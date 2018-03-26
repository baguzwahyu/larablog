<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Employes;
use App\customer;
use App\Product;
use App\transjual;
use App\User;
use DB;

use Validator;

class RumahController extends Controller
{

    // larablog

    public function showHome()
    {
        return view('larablog.home.showHome');
    }


    public function createEmployes()
    {
        return view('larablog.home.createEmployes');
    }


    public function saveEmployes(Request $request)
    {
        $this->validate($request, [
        'company' => 'required',
        'first_name' => 'required |max:10',
        'last_name' => 'required',
        ]);

        $emp = new Employes([
            'company'  => $request->get('company'),
            'first_name' => $request->get('first_name'),
            'last_name'  => $request->get('last_name'),
        ]);

        $emp->save();

        return redirect('/showEmployes');
    }

    


    // public function showEmployes()
    // {

    //     // $emp = Employes::all()->toArray();
    //     // yang dibawah ini adalah pagination cuma next.
    //     // $emp = Employes::simplePaginate(3);
    //     // return view('larablog.home.showEmployes', compact('emp'));
    // }

    // ini showEmployes menampilkan pagination berbasis nomor
    public function showEmployes(Request $request){

      $emp = Employes::paginate(2);
      return view('larablog.home.showEmployes', compact('emp'))->with('i', ($request->input('page', 1) - 1) * 5);    
  
    }

    // delete
    public function destroyEmp($id)
    {
        $emp = Employes::find($id);
        $emp->delete();

        return redirect('/showEmployes');
    }

    // Edit
    public function editEmp($id)
    {
      $emp = Employes::find($id);

      return view('larablog.home.editEmployes', compact('emp'));
    }

    // Update
    public function updateEmp(Request $request, $id)
    {
        $emp = Employes::FindOrFail($id);
        $emp->update( $request->all() );

        return redirect('/showEmployes');
    }


    //========== ini bagian Customer ===============
    public function createCustomer()
    {
        return view('larablog.home.createCustomer');
    }

    public function saveCustomer(Request $request)
    {
        $this->validate($request, [
        'company' => 'required',
        'first_name' => 'required |max:10',
        'last_name' => 'required',
        ]);

        $custo = new customer([
            'company'  => $request->get('company'),
            'first_name'  => $request->get('first_name'),
            'last_name'  => $request->get('last_name')
        ]);

        $custo->save();

        return redirect('/showCustomer');
    }

    // Default showCustomer
    // public function showCustomer()
    // {
    //     // $custo = customer::all()->toArray();
    //     $custo = customer::simplePaginate(3);

    //     return view('larablog.home.showCustomer', compact('custo'));
    // }

    // ini showCustomer menampilkan pagination berbasis nomor
    public function showCustomer(Request $request){
          
        $custo = customer::paginate(2);
        return view('larablog.home.showCustomer', compact('custo'))->with('i', ($request->input('page', 1) - 1) * 5);    
            
    }

    // Delete
    public function destroycusto($id)
    {
      $custo = customer::find($id);
      $custo->delete();

      return redirect('/showCustomer');
    }

    // Edit
    public function editCusto($id)
    {
      $custo = customer::find($id);

      return view('larablog.home.editCustomer', compact('custo'));
    }

    // Update
    public function updateCusto(Request $request, $id)
    {
        $custo = customer::FindOrFail($id);
        $custo->update( $request->all() );

        return redirect('/showCustomer');
    }


    // =========== Bagian supplier ==========

    public function createSupplier()
    {
        return view('larablog.home.createSupplier');
    }

    // Default showSupplier

    // public function showSupplier()
    // {
    //     // $supp = Supplier::all()->toArray();
    //     $supp = Supplier::simplePaginate(3);
    //     return view('larablog.home.showSupplier', compact('supp'));
    // }

     // ini showSupplier menampilkan pagination berbasis nomor
     public function showSupplier(Request $request){
          
        $supp = Supplier::paginate(2);
        return view('larablog.home.showSupplier', compact('supp'))->with('i', ($request->input('page', 1) - 1) * 5);    
            
    }

    public function saveSupplier(Request $request)
    {
      $this->validate($request, [
      'company' => 'required',
      'first_name' => 'required |max:10',
      'last_name' => 'required',
      ]);

        $supp = new Supplier([
            'company' => $request->get('company'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name')
        ]);

        $supp->save();

        return redirect('/showSupplier');
    }

    // Delete
    public function destroySupp($id)
    {
      $supp = Supplier::find($id);
      $supp->delete();

      return redirect('/showSupplier');
    }

    // Edit
    public function editSupp($id)
    {
      $supp = Supplier::find($id);

      return view('larablog.home.editSupplier', compact('supp'));
    }

    // Update
    public function updateSupp(Request $request, $id)
    {
      $supp = Supplier::FindOrFail($id);
      $supp->update( $request->all() );

      return redirect('/showSupplier');
    }


    // ========== ini bagian Product ==============
    public function createProduct()
    {
        return view('larablog.home.createProduct');
    }


    public function saveProduct(Request $request)
    {
      $this->validate($request, [
      'product_code' => 'required',
      'product_name' => 'required |max:10',
      'description' => 'required',
      ]);

        $prod = new Product([
            'product_code' => $request->get('product_code'),
            'product_name' => $request->get('product_name'),
            'description' => $request->get('description')
        ]);

        $prod->save();

        return redirect('/showProduct');
      }

      // Default showProduct

      // public function showProduct()
      // {
      //     // $prod = Product::all()->toArray();
          
      //     $prod = Product::simplePaginate(3);

      //     return view('larablog.home.showProduct', compact('prod'));
      // }

      // ini showProduct menampilkan pagination berbasis nomor
      public function showProduct(Request $request){
      
          $prod = Product::paginate(2);
          return view('larablog.home.showProduct', compact('prod'))->with('i', ($request->input('page', 1) - 1) * 5);    
        
      }

    // Delete
    public function destroyProd($id)
    {
      $prod = Product::find($id);
      $prod->delete();

      return redirect('/showProduct');
    }

    // Edit
    public function editProd($id)
    {
      $prod = Product::find($id);

      return view('larablog.home.editProduct', compact('prod'));
    }

    // Update
    public function updateProd(Request $request, $id)
    {
      $prod = Product::FindOrFail($id);
      $prod->update( $request->all() );

      return redirect('/showProduct');
    }

    // bagian transjual
    public function createTransjual()
    {
      $cocus = customer::all()->toArray();
      $pro = Product::all()->toArray();

      return view('larablog.home.createTransjual', compact('cocus','pro'));
    }

    // Save
    public function saveTransjual(Request $request)
    {
      $this->validate($request, [
      'nota' => 'required',
      'customer_id' => 'required',
      'code_product' => 'required',
      'jumlah' => 'required',
      ]);

        $trj = new transjual([
            'nota' => $request->get('nota'),
            'customer_id' => $request->get('customer_id'),
            'code_product' => $request->get('code_product'),
            'jumlah' => $request->get('jumlah'),
        ]);

        $trj->save();

        return redirect('/showTransjual');
    }

    // Default Show
    // public function showTransjual(){
      
    //   $trj = DB::table('customer')
    //   ->join('transjual', 'transjual.customer_id', '=', 'customer.id')
    //   ->join('product', 'transjual.code_product', '=', 'product.id')
    //   ->select('transjual.*', 'customer.*', 'product.*')
    //   ->get();
            
    //   return view('larablog.home.showTransjual', compact('trj'));
              
    // }
    

    // ini showTransjual menampilkan pagination berbasis nomor
    public function showTransjual()
    {
      $trj = DB::table('customer')
             ->join('transjual', 'transjual.customer_id', '=', 'customer.id')
             ->join('product', 'transjual.code_product', '=', 'product.id')
             ->select('transjual.*', 'customer.*', 'product.*')
             ->paginate(3);

      return view('larablog.home.showTransjual', compact('trj'));

      // $tj = transjual::where('customer_id', 'customer_id')->with('customer')->paginate(3);
      // return view('larablog.home.showTransjual', compact('tj'));
    }

    // Delete
    public function destroytrj($id)
    {
      $trj = transjual::find($id);
      $trj->delete();

      return redirect('/showTransjual');
    }

    // Edit
    public function editTrj($id)
    {
      // $trj = transjual::find($id);
      // $cocus = customer::all()->toArray();
      // $pro = Product::all()->toArray();
      //
      // return view('larablog.home.editTransjual', compact('cocus', 'pro', 'trj'));

      $trj = DB::table('customer')
             ->join('transjual', 'transjual.customer_id', '=', 'customer.id')
             ->join('product', 'transjual.code_product', '=', 'product.id')
             ->select('transjual.*', 'customer.*', 'product.*')
             ->get();

      return view('larablog.home.editTransjual', compact('trj'));
    }

    // Update
    public function updateTrj(Request $request, $id)
    {
      $trj = transjual::FindOrFail($id);
      $trj->update($request->all());

      return redirect('/showTransjual');
    }












    // ======== form validtion ==============
    public function myform()
    {
      return view('myform');
    }

    public function myformPost(Request $request)
    {

      $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        if ($validator->passes()) {

    return response()->json(['success'=>'Added new records.']);
    }

    return response()->json(['error'=>$validator->errors()->all()]);
    }

    // ;;;;;;;;;;;;;;;;;;;;;;
    public function formValidation()
{
  return view('/form-validation');
}

  public function formValidationPost(Request $request)
  {
    $this->validate($request,[
        'firstname' => 'required|min:5|max:35',
        'lastname' => 'required|min:5|max:35',
        'email' => 'required|email|unique:users',
        'mobileno' => 'required|numeric',
        'password' => 'required|min:3|max:20',
        'confirm_password' => 'required|min:3|max:20|same:password',
        'details' => 'required'
      ],[
        'firstname.required' => ' The first name field is required.',
        'firstname.min' => ' The first name must be at least 5 characters.',
        'firstname.max' => ' The first name may not be greater than 35 characters.',
        'lastname.required' => ' The last name field is required.',
        'lastname.min' => ' The last name must be at least 5 characters.',
        'lastname.max' => ' The last name may not be greater than 35 characters.',
      ]);

    dd('You are successfully added all fields.');
  }
}
