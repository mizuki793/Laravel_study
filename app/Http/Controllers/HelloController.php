<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller{
	public function index(Request $request){
		$sort =$request->sort;
		$items=Person::orderBy($sort,'asc')
			->paginate(5);
		$param = ['items'=>$items,'sort'=>$sort];
		return view('hello.index',$param);
	}
	public function post(Request $request){
		$validate_rule = [
			'name' =>'required',
			'mail'=>'email',
			'age'=>'numeric|between:0,150',
		];
		$this->validate($request, $validate_rule);
		return view ('hello.index',['msg'=>'正しく入力されました！']);
	}
}