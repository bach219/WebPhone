<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use App\Model\Comment;
class FrontendController extends Controller
{
    //
    public function getHome(){
    	$data['featuredList'] = Product::where('prod_featured',1)
    	                                 ->orderBy('prod_id','asc')
    	                                 ->get();
    	$data['newList'] = Product::orderBy('prod_id','desc')
    	                            ->take(10)
    	                            ->get();
    	$data['categories'] = Category::all();
    	return view('frontend.home',$data);
    }

    public function getDetail($id){
    	$data['detail'] = Product::find($id);
    	$data['comments'] = Comment::where('com_product',$id)->get();
    	return view('frontend.details',$data);
    }

    public function getCategory($id){
    	$data['products'] = Product::where('prod_cate',$id)
    	                             ->orderBy('prod_id','desc')
    	                             ->paginate(12);
    	$data['category'] = Category::find($id);
    	return view('frontend.category',$data);
    }

    public function postComment(Request $request, $id){
    	$com = new Comment;
    	$com->com_name = $request->name;
    	$com->com_email = $request->email;
    	$com->com_content = $request->content;
    	$com->com_product = $id;
    	$com->save();
    	return back();
    }

    public function getSearch(Request $request){
        $result = $request->result;
        $result = str_replace(' ', '%', $result);
        $data['product'] = Product::where('prod_name','like','%'.$result.'%')->get();
        $data['search'] = $result;
        return view('frontend.search', $data);
    }

}
