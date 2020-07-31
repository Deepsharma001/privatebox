<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Institute;

class InstitutionController extends Controller
{
    public function index()
    {
        $institute = Institute::all();
      
        return view('admin.institutes.index',compact('institute'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.institutes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $institute = $request->all();
        $institute = Institute::create($institute);
        return redirect()->route('admin.institutions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institute = Institute::where('id',$id)->first();
        return view('admin.institutes.show', compact('institute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institute = Institute::where('id',$id)->first();
        return view('admin.institutes.edit',compact('institute'));
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
        $institute = Institute::where('id',$id)->first();
        $requestData = $request->except('_method', '_token');;
        $institute->where('id',$institute->id)->update($requestData);
        return redirect()->route('admin.institutions.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Institute::where('id',$id)->first();

        $testimonial->delete();
        return back();
    }

}
