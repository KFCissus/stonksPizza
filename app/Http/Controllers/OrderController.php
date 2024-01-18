<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderline;
use App\Models\Pizza;
use Illuminate\Http\Request;
use function Webmozart\Assert\Tests\StaticAnalysis\null;

class OrderController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function addPizzaToOrder(Request $request)
    {
        //$value = session('key', 'default');
        $value = session('_token');
        //get the id of the pizza
        $id = $request['id'];
        // finds the pizza in the db
        $pizza = Pizza::find($id);
        //puts the pizza into the order



       $order = Order::firstOrCreate(['session'=>$value,'size_id' => 1,'OrderStatus_id' => 1]);


//        $orderline = new Orderline();
        $order->orderline()->create([ 'pizzas_id'=> $pizza['id'],'quantity'=>1, 'order_id'=>$order['id']]);
        dd($order['id']);
        //$orderline->order()->attach([ 'id'=>null,'quantity'=>1,'pizzas_id'=> $pizza['id']]);
        //Pizza::Orderline();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
