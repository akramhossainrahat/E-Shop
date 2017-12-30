<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_content = view('admin.admin_home_content');
        return view('admin.admin_dashboard')
            ->with('admin_home_content', $home_content);
    }

    public function product_add()
    {
        $home_content = view('admin.add_product');
        return view('admin.admin_dashboard')
            ->with('admin_home_content', $home_content);
    }

    public function add_new_product(Request $request)
    {
        $product = new Product();

        $product->product_id = "PRO-" . rand(000, 999);
        $product->product_name = $request->input('pro_name');
        $product->product_desc = $request->input('pro_desc');
        $product->product_price = $request->input('pro_price');
        $product->product_image = "assets/img/uproar.jpg";
        $product->product_category = $request->input('pro_cat');
        $product->product_brand = $request->input('pro_brand');
        $product->created_at = Carbon::now();
        $product->updated_at = Carbon::now();

        $product->save();


    }

    public function add_product_category()
    {
        $cat_lists = Category::get();

        $home_content = view('admin.add_product_category')->with('cat_lists', $cat_lists);
        return view('admin.admin_dashboard')
            ->with('admin_home_content', $home_content);

    }

    public function save_product_category(Request $request)
    {
        $rules = array(
            'category_name' => 'required|unique:categories, category_name|max:255'
            );

            $messages = array(
                'category_name.required' => 'Category Name is Required & Should be Unique.'
//                'category_name.unique' => 'Category Name Should be Unique.'
            );

            $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return Redirect::to('/add-product-category')->withErrors($validator)->withInput();
        }else{

            $category = new Category();

            $category->category_id = "CAT-".rand(000,999);
            $category->category_name = $request->input('cat_name');
            $category-> created_at  = Carbon::now();
            $category-> updated_at = Carbon::now();

            $category->save();

            return redirect('add-product-category');
        }

    }
}
