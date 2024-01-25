<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderline;
use App\Models\Pizza;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use function Webmozart\Assert\Tests\StaticAnalysis\null;

class OrderController extends Controller
{
//test

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
        $quantity = $request['quantity'];
        //puts the pizza into the order\


        $size = 0;
        if($request['size']== "small"){
            $size = 1;
        }
        elseif($request['size']== "medium"){
            $size = 2;
        }
        elseif($request['size']== "large"){
            $size = 3;
        }
        else{
            echo '<script>alert("oops sometings wrong");</script>';
        }


       $order = Order::firstOrCreate(['session'=>$value,'OrderStatus_id' => 1]);


//        $orderline = new Orderline();
        $order->orderline()->create([ 'pizzas_id'=> $pizza['id'],'size_id' => $size,'quantity'=>$quantity, 'order_id'=>$order['id']]);



        // dd($order['id']);

        //$orderline->order()->attach([ 'id'=>null,'quantity'=>1,'pizzas_id'=> $pizza['id']]);
        //Pizza::Orderline();
        return view('bestellen');

       // return redirect('/winkelwagen');

    }

    public function showCart()
    {
        $value = session('_token');


        // Find the order associated with the session, eager loading related data
        $order = Order::with(['orderline' => function ($query) {
            $query->with('pizza');
            $query->with('pizzasize');

        }])->where('session', $value)->first();


        // Check if the order variable is set

            // Redirect or handle the case when the order is not found
        return View::make('winkelwagen', ['order' => $order]);



    }

    public function redirectToOrderStatus()
{
    $value = session('_token');

    // Order met session
    $order = Order::with(['orderline' => function ($query) {
        $query->with('pizza');
    }])
        ->where('session', $value)
        ->first();
    // Eventueel order data krijgen in de status view
    // dd($order);
    return view('status', ['order' => $order]);
}





    /**
     * Show the form for creating a new resource.
     */
    public function deleteorderline($id)
    {
        db:destroy($id);
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
