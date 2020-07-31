<?php
namespace App\Http\Controllers\Admin;

use File;
use Storage;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('admin.testimonials.index',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = $request->all();
        if($request->file('image')){
            $cover = $request->file('image');
            $extension = $cover->getClientOriginalExtension();
            $testimonial['image'] = $cover->getClientOriginalName();
            Storage::disk('testimonial')->put( $cover->getClientOriginalName(),  
            File::get($cover));
        }
        $testimonial = Testimonial::create($testimonial);


        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        return view('admin.testimonials.edit',compact('testimonial'));
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
        $testimonial = Testimonial::where('id',$id)->first();
        $requestData = $request->except('_method', '_token');;
        if($request->file('image')){
            $cover = $request->file('image');
            $extension = $cover->getClientOriginalExtension();
            $requestData['image'] = $cover->getClientOriginalName();
            Storage::disk('testimonial')->put( $cover->getClientOriginalName(),  
            File::get($cover));
        }
        $testimonial->where('id',$testimonial->id)->update($requestData);
        return redirect()->route('admin.testimonials.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();

        $testimonial->delete();
        return back();
    }
}
