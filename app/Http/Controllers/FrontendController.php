<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class FrontendController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function about()
    {
        return view('dashboard.about');
    }

    public function package()
    {
        return view('dashboard.package');
    }

    public function features()
    {
        return view('dashboard.features');
    }
    public function blog()
    {
        return view('dashboard.blog');
    }

    public function contact()
    {
        return view('dashboard.contact');
    }
     
    public function contact_store(request $request)
    {
        dd($request->all());
       
    }
  

}
