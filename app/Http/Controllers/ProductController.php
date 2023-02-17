<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function addProductForm()
   {
        return view('admin.addProduct');
   }
   public function addBrand(Request $request)
   {
        $input=$request->all();
        $data=Brand::create($input);
        return redirect()->back()->with( $data);
   }
}
