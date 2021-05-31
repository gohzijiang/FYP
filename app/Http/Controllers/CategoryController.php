<?php

namespace App\Http\Controllers;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function store(){
        $r=request();//get all the submited form input
        $addCategory=Category::create([
            'id'=>$r->ID,
            'name'=>$r->name,
        ]);
        return redirect()->route('showCategory');
    }
    public function show(){
        $categories=Category::all();
        return view('showCategory')->with('categories',$categories);
    }
    public function delete($id){
        $categories=Category::find($id);
        $categories->delete();
        return redirect()->route('showCategory');
    }

}
