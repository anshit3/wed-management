<?php


namespace wedman\Http\Controllers;


use wedman\Orders;
use Illuminate\Http\Request;


class OrderController extends Controller
{
     public function orderPlace(Request $request)
     {
         $this->validate($request,[
             'start' => 'required|date|after:yesterday',
             'end' => 'required|date',
             'eventcity' => 'required',
             'eventlocation' => 'required',
             'pack' => 'required',
             'eventtype' => 'required',
             'firstname' => 'required|max:50',
             'lastname' => 'required|max:50',
             'phonenumber' => 'required|max:10|min:10',
             'email' => 'required|email',
             'age' => 'required',
             'address' => 'required',
             'city' => 'required',
             'zipcode' => 'required'
         ]);

         $order = new Orders();
         $order->start = $request['start'];
         $order->end = $request['end'];
         $order->eventcity = $request['eventcity'];
         $order->eventlocation = $request['eventlocation'];
         $order->pack = $request['pack'];
         $order->eventtype = $request['eventtype'];
         $order->fname = $request['firstname'];
         $order->lname = $request['lastname'];
         $order->phone = $request['phonenumber'];
         $order->email = $request['email'];
         $order->age = $request['age'];
         $order->address = $request['address'];
         $order->city = $request['city'];
         $order->zip = $request['zipcode'];

         $message = "There was an error";

         if($request->user()->orders()->save($order)){
             $message = 'Order placed successfully';
             return redirect()->route('home2')->with(['message' => $message]);
         }else{
             return redirect()->route('placeorder')->with(['message' => $message]);
         }
     }
}
