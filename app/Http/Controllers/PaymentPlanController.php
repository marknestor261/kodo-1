<?php

namespace App\Http\Controllers;

use App\Models\PaymentPlan;
use App\Flutterwave\FlutterwaveService;
use Illuminate\Http\Request;

class PaymentPlanController extends Controller
{
    private $flutterwave;

    public function __construct(FlutterwaveService $flutterwave)
    {
        $this->flutterwave = $flutterwave;
    }

    public function index()
    {
        $paymentPlans = PaymentPlan::all();
        return view('payment-plans.index', compact('paymentPlans'));
    }

    public function create()
    {
        return view('payment-plans.create');
    }

    public function store(Request $request)
    {
        $plan = new PaymentPlan();
        $plan->name = $request->name;
        $plan->amount = $request->amount;
        $plan->interval = $request->interval;
        $plan->duration = $request->duration;
        $plan->description = $request->description;
        $plan->save();

        $this->flutterwave->createFlutterwavePlan($plan);

        return redirect()->route('payment-plans.index')
            ->with('success', 'Payment plan created successfully');
    }

    public function edit(PaymentPlan $paymentPlan)
    {
        return view('payment-plans.edit', compact('paymentPlan'));
    }

    public function update(Request $request, PaymentPlan $paymentPlan)
    {
        $paymentPlan->name = $request->name;
        $paymentPlan->amount = $request->amount;
        $paymentPlan->interval = $request->interval;
        $paymentPlan->duration = $request->duration;
        $paymentPlan->description = $request->description;
        $paymentPlan->save();

        $this->flutterwave->updateFlutterwavePlan($paymentPlan);

        return redirect()->route('payment-plans.index')
            ->with('success', 'Payment plan updated successfully');
    }

    public function destroy(PaymentPlan $paymentPlan)
    {
        $this->flutterwave->deleteFlutterwavePlan($paymentPlan);

        $paymentPlan->delete();

        return redirect()->route('payment-plans.index')
            ->with('success', 'Payment plan deleted successfully');
    }

    public function subscribe(PaymentPlan $paymentPlan)
    {
        $subscription = $this->flutterwave->subscribeToPaymentPlan($paymentPlan);

        return redirect($subscription->data->link);
    }
}

