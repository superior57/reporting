<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Product as Product;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function export_pdf()
  {
    // Fetch all customers from database
    $data = Customer::get();
    // Send data to the view using loadView function of PDF facade
    $pdf = PDF::loadView('pdf.customers', $data);
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->download('customers.pdf');
  }
}
