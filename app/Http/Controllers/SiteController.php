<?php

namespace App\Http\Controllers;

use App\Model\Feedback;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Product;

class SiteController extends Controller
{
    //

    public function index()
    {
        $products = DB::table('products')->get();

        $home_content = view('Front.home_content')->with('products', $products);
        return view('Front.home_page')
            ->with('home', $home_content);
    }

    public function products_list_view()
    {
        $product_list = view('Front.home_list_product');
        return view('Front.home_page')
            ->with('home', $product_list);
    }

    public function product_quick_view($pid)
    {
        $products = DB::table('products')->get();

        $productdetails = Product::where('product_id', $pid)->first();
        $home_details = view('Front.product_details')
            ->with('productdetails', $productdetails);
        return view('Front.home_page')
            ->with('home_details', $home_details);
    }
    public function save_feedback(Request $request){

        $feedback = new Feedback();

        $feedback->product_id = $pid = $request->input('pro_id');
        $feedback->customer_name = $request->input('cust_name');
        $feedback-> customer_email  = $request->input('cust_email');
        $feedback->feedback = $request->input('cust_feedback');
        $feedback->created_at = Carbon::now();
        $feedback->updated_at = Carbon::now();


        $feedback->save();

        return redirect('product-details/'.$pid);

        //Have to show feedback for each product in view

    }
}

