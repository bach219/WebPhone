<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use App\Model\Comment;
use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    //
    public function getHome(){
    	$data['newList'] = Product::orderBy('prod_id','desc')
    	                            ->take(8)
    	                            ->get();
    	$data['categories'] = Category::all();
    	return view('frontend.home',$data);
    }

    public function getShop(){
    	$data['featuredList'] = Product::where('prod_featured',1)
    	                                 ->orderBy('prod_id','asc')
    	                                 ->paginate(12);
    	$data['categories'] = Category::all();
    	return view('frontend.shop',$data);
    }

    public function getContact(){
		return view('frontend.contact');
	}

    public function getBlog(){
		return view('frontend.blog');
	}

    public function getAbout(){
		return view('frontend.about');
	}

    public function getDetail($id){
    	$data['detail'] = Product::find($id);
		$data['comments'] = Comment::where('com_product',$id)->get();
		$data['count'] = DB::table('vp_comment')->where('com_product','=',$id)
		                                        ->count();
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
        $data['product'] = Product::where('prod_name', 'like', '%'.$result.'%')
												   ->join('vp_categories', 'vp_products.prod_cate', '=', 'vp_categories.cate_id')
												   ->orWhere('vp_categories.cate_name', 'like', '%'.$result.'%')
		                                           ->paginate(12);

		$data['search'] = $result;
        return view('frontend.search', $data);
    }

}