<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   
   
   public function index(){
   		$employees = DB::table('employees')->get();
   		return view('pages.home',compact('employees'));
   }
}
