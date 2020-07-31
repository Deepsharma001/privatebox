<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Corporate_bodies;

class Corporate_bodiesController extends Controller
{
    public function index()
    {
        $Corporate_bodies = Corporate_bodies::all();
      
        return view('admin.Corporate_bodies.index',compact('Corporate_bodies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.Corporate_bodies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Corporate_bodies = $request->all();
        $Corporate_bodies = Corporate_bodies::create($Corporate_bodies);
        return redirect()->route('admin.corporate_bodies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Corporate_bodies = Corporate_bodies::where('id',$id)->first();
        return view('admin.Corporate_bodies.show', compact('Corporate_bodies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Corporate_bodies = Corporate_bodies::where('id',$id)->first();
        return view('admin.Corporate_bodies.edit',compact('Corporate_bodies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request,$id)
    {
        $Corporate_bodies = Corporate_bodies::where('id',$id)->first();
        $requestData = $request->except('_method', '_token');;
        $Corporate_bodies->where('id',$Corporate_bodies->id)->update($requestData);
        return redirect()->route('admin.corporate_bodies.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institute = Corporate_bodies::where('id',$id)->first();

        $institute->delete();
        return back();
    }

}
