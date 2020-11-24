<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function homepage(){
        return view('homepage');
    }
    public function index($id){
        $var="Internship";
        $lesson="Laravel Lesson";
        return view('mycreatefolder.index')->with([
            'test'=>$var,
            'test_1'=>$lesson,
            'roll_no'=>$id
            
            ]);
    }
    public function post($id,$name,$email){
        return view('mycreatefolder.index',compact('id','name','email')
    );
    }
    public function postpage(){
        return view('post');
    }
    public function aboutpage(){
        return view('about');
    }
    public function product(){
        $item=['computer','white','$700','gaming'];
        return view('product',compact('item'));
    }
}
