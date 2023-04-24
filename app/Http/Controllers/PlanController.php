<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Flutterwave\Flutterwave;
use Flutterwave\Payload;
use Flutterwave\Service\PaymentPlan;

class PlanController extends Controller
{
    public function create()
    {
        return view('plans.create');
    }

    public function store(Request $request)
    {
        $flutterwave = new Flutterwave(env('FLUTTERWAVE_PUBLIC_KEY'), env('FLUTTERWAVE_SECRET_KEY'));

        $rules = [
            'name' => 'required|min:2',
            'amount' => 'required',
            'interval' => 'required'
        ];
        
        $messages = [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least 3 characters.',
            'interval.required' => 'The interval field is required.',
            'amount.required' => 'The amount field is required.',
        ];
        $validated = $request->validate($rules, $messages);
        $data = [
            'name' => $request->name,
            'amount' => $request->amount,
            'interval' => $request->interval,
            'currency' => $request->currency,
            'duration' => $request->interval === 'monthly' ? 1 : 12
        ];

        $payload = new Payload();
        $payload->set("amount", $request->amount);
        $payload->set("name", $request->name);
        $payload->set("interval", $request->interval);
        $payload->set("duration", $request->interval === 'monthly' ? '1' : "12");

        $service = new PaymentPlan();
        $request = $service->create($payload);
        $plan = $flutterwave->createPlan($data);

        Plan::create([
            'name' => $plan['name'],
            'slug' => $plan['id'],
            'amount' => $plan['amount'],
            'currency' => $plan['currency'],
            'interval' => $plan['interval']
        ]);

        return redirect()->route('plans.index')->with('success', 'Plan created successfully.');
    }

    public function index()
    {
        $plans = Plan::all();

        return view('plans.index', compact('plans'));
    }

    public function edit(Plan $plan)
    {
        return view('plans.edit', compact('plan'));
    }

    public function update(Request $request, Plan $plan)
    {
        $rules = [
            'name' => 'required|min:2',
            'amount' => 'required',
            'interval' => 'required'
        ];
        
        $messages = [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least 3 characters.',
            'interval.required' => 'The interval field is required.',
            'amount.required' => 'The amount field is required.',
        ];
        $validated = $request->validate($rules, $messages);
        $plan->name = $request->name;
        $plan->amount = $request->amount;
        $plan->currency = $request->currency;
        $plan->interval = $request->interval;
        $plan->save();

        return redirect()->route('plans.index')->with('success', 'Plan updated successfully.');
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans.index')->with('success', 'Plan deleted successfully.');
    }

}
