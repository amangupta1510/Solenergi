<?php

namespace App\Http\Controllers;
use Validator;
use Response;
use File;
use Auth;
use Storage;
use PDF;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\http\Requests;
use Illuminate\Http\Request;
use App\address;
use App\bill;
use App\cart;
use App\current_order;
use App\order;
use App\product;
use App\offer;
use App\transaction;
use App\wallet;
use App\accounting;
use App\user;
use App\delivery_boy;
use App\hub;
use App\shopkeeper;
use App\admin;
use App\wishlist;
use App\worker;
use DB;


class admincontroller extends Controller
{ 
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
      return view('admin.profile');
    }



}