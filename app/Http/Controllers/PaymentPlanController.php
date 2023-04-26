<?php

namespace App\Http\Controllers;

use App\Models\PaymentPlan;
use Illuminate\Http\Request;

class PaymentPlanController extends Controller
{
    public function index()
    {
        $paymentPlans = PaymentPlan::all();
        return view('payment_plans.index', compact('paymentPlans'));
    }

    public function show(PaymentPlan $paymentPlan)
    {
        return view('payment_plans.show', compact('paymentPlan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'amount' => 'required|numeric|min:1',
            'currency' => 'required|in:NGN,USD,GHS,KES,ZAR',
            'interval' => 'required|in:weekly,monthly,quarterly,biannually,annually'
        ]);

        $planData = [
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'amount' => $validatedData['amount'],
            'currency' => $validatedData['currency'],
            'interval' => $validatedData['interval']
        ];

        $flutterwavePlan = $this->createFlutterwavePlan($planData);

        if ($flutterwavePlan) {
            $planData['plan_id'] = $flutterwavePlan->id;
            $paymentPlan = PaymentPlan::create($planData);
            return redirect()->route('payment_plans.show', $paymentPlan);
        } else {
            return back()->withInput()->withErrors(['error' => 'Failed to create plan']);
        }
    }

    private function createFlutterwavePlan($planData)
    {
        $payload = [
            'name' => $planData['name'],
            'amount' => $planData['amount'],
            'interval' => $planData['interval'],
            'duration' => 0, // 0 means the plan will run indefinitely
            'currency' => $planData['currency'],
            'description' => $planData['description']
        ];

        $headers = [
            'Authorization' => 'Bearer ' . env('FLUTTERWAVE_SECRET_KEY'),
            'Content-Type' => 'application/json'
        ];

        $response = Http::withHeaders($headers)->post('https://api.flutterwave.com/v3/plans', $payload);

        if ($response->successful()) {
            return json_decode($response->body());
        } else {
            return null;
        }
    }


    public function create()
    {
        return view('payment_plans.create');
    }

    public function edit($id)
    {
        $plan = PaymentPlan::findOrFail($id);
        return view('payment_plans.edit', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $plan = PaymentPlan::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'amount' => 'required|numeric|min:1',
            'interval' => 'required|in:monthly,quarterly,biannually,annually',
            'duration' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $plan->name = $request->input('name');
        $plan->description = $request->input('description');
        $plan->amount = $request->input('amount');
        $plan->interval = $request->input('interval');
        $plan->duration = $request->input('duration');
        $plan->update();

        return redirect()->route('payment-plans.show', $plan->id)->with('success', 'Payment plan updated successfully');
    }

    public function destroy($id)
    {
        $plan = PaymentPlan::findOrFail($id);
        $plan->delete();
        return redirect()->route('payment-plans.index')->with('success', 'Payment plan deleted successfully');
    }

}
