<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employes;

class EmpController extends Controller
{
  public function index(Request $request){
    $emp = Employes::paginate(2);
    return view('showEmp', compact('emp'))->with('i', ($request->input('page', 1) - 1) * 5);

  }
}
