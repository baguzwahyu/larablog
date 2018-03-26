<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employes;
use DB;
use DataTables;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\User;

class DataTableController extends Controller
{
  public function datatable()
    {
      $emp = User::all();
        // return view('larablog.home.showEmployes', compact('emp'));
        return view('datatable' , compact('emp') );
    }

    public function getPosts()
    {
        return \DataTables::of(User::query())->make(true);
    }
}
