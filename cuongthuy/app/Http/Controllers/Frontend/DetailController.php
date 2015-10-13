<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Input;
use DB;
    
class DetailController extends Controller {
    public function getIndex () {
        if (Input::has('product_id')){
            $product = DB::table('products')->where('id', Input::get('product_id'))->get();
        }
        $product = $product[0];
        
        //Get breadcrumbs
        $categoriesTmp = DB::table('categories')->where('id', $product->product_category)->get();
        $categories[0] = $categoriesTmp[0];
        
        $i = 1;
        while ($categories[$i-1]->category_parent) {
            //Get parrent categories
            $categoriesTmp = DB::table('categories')->where('id', $categories[$i-1]->category_parent)->get();
            if ($categoriesTmp[0]->id) {
                $categories[$i] = $categoriesTmp[0];
            }
            $i++;
        }
        return view('Frontend.detail', compact('product', 'categories'));
    }
}
