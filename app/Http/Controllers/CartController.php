<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Session;


class CartController extends Controller
{
    public function add_to_cart(Request $request){

          if($request->session()->has('user')){

             $user = $request->session()->get('user');
             $cart = new Cart();
             $cart->user_id = $user['id'];
             $cart->product_id = $request->product_id;
             $cart->save();
             return redirect(route('home'));

          }else{

            return redirect(route('login'));

          }
    }

    static function countProduct(){
      if(Session::has('user')){
          $userId = Session::get('user')['id'];
          $result = Cart::where('user_id',$userId)->count();
          return $result;
      }else{
          return 0;
      }
    }

    public function showOrders(){
        $user = Session::get('user')['id'];
        $result = Cart::where('user_id',$user)->get();
        return $result;
    }


}
