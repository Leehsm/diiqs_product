<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Combo;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Slider;
use App\Models\Feedback;

class AdminController extends Controller
{
    function dashboard(){
        return view('backend.menu.dashboard');
    }

    function viewProduct(){

        $product = Product::all();
        return view('backend.menu.product.view',['product'=>$product]);
    }

    function addProduct(){
        return view('backend.menu.product.add');
    }

    function editProduct(){
        return view('backend.menu.product.adit');
    }

    function deleteProduct($id){
        
        Product::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }




    function viewCombo(){

        $combo = DB::table('combo')->get();
        return view('backend.menu.combo.view',['combo'=>$combo]);
    }

    function addCombo(){
        return view('backend.menu.combo.add');
    }






    function viewSlider(){

        $slider = Slider::all();
        return view('backend.menu.slider.view',['slider'=>$slider]);
    }

    function addSlider(){
        return view('backend.menu.slider.add');
    }





    function viewOrder(){

        $order = Order::all();
        // $order = OrderItem::all();
        return view('backend.menu.order.view',['order'=>$order]);
    }





    function viewFeedback(){

        $feedback = DB::table('feedbacks')->get();
        return view('backend.menu.feedback.view',['feedback'=>$feedback]);
    }
}
