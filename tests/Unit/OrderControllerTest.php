<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Order;
use App\Models\Orderline;
use App\Models\Pizza;

class OrderControllerTest extends TestCase
{
    /**
     * A basic test example.
     */
   // Example: tests/Feature/OrderControllerTest.php
   public function testAddPizzaToOrder()
   {
       $response = $this->post('/addPizza', ['id' => 1, 'size' => 'small', 'quantity' => 2]);
       $response->assertStatus(302);

       $this->assertDatabaseHas('orderlines', [
           'pizzas_id' => 1,
           'size_id' => 1,
           'quantity' => 2,
           'order_id' => Order::where('session', session('_token'))->first()->id,
       ]);
   }

   public function testShowCart()
   {
       $response = $this->get('/winkelwagen');
       $response->assertStatus(200);
   }

}
