<?php

namespace App\Observers;

use App\Models\Invoce;
use App\Models\Order;

class OrderObserver
{

    public function created(Order $order): void
    {
        Invoce::create([
            'amount' => $order->amount,
            'order_id' => $order->id
        ]);
    }

    public function updated(Order $order): void
    {
        //
    }

    public function deleted(Order $order): void
    {
        //
    }

    public function restored(Order $order): void
    {
        //
    }

    public function forceDeleted(Order $order): void
    {
        //
    }
}
