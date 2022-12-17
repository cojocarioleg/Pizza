<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function order(OrderRequest $request){
        $order = new Order();
        $order->saveOrder(
            $request->name, 
            $request->phone, 
            $request->size, 
            $request->pizza, 
            $request->price, 
            $request->adress, 
            $request->pay
        );
        if ( $order->save()) {  
            Mail::to('cojocarioleg89@gmail.com')->send(new OrderMail($order));        
            return redirect()->route('home')->with('success', __('session.succes'));
        }
        else{
            return redirect()->route('home')->with('error', __('session.error'));
        } 
                
    }
}
