<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }

  public function confirm(Request $request){
    $contact = [
    'tel' => $request->tel1 . $request->tel2 . $request->tel3,
    'last_name'=> $request->last_name, 
    'first_name'=>$request->first_name,
    'gender' => $request->gender,
    'email' => $request->email,
    'address' => $request->address,
    'building' => $request->building,
    'detail' => $request->detail,
    ];
    return view('confirm', compact('contact'));
    //取得した入力情報を変数\$contactに格納し、その値を return
  }
}
