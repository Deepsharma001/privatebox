<?php
namespace App\Http\Controllers\Admin;

use File;
use Storage;
use App\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    
    public function index()
    {
        $media = Media::all();
        return view('admin.media.index',compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media = $request->all();
        if($request->file('image')){
            $cover = $request->file('image');
            $extension = $cover->getClientOriginalExtension();
            $media['image'] = $cover->getClientOriginalName();
            Storage::disk('media')->put( $cover->getClientOriginalName(),  
            File::get($cover));
        }
        $media = Media::create($media);


        return redirect()->route('admin.media.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media = Media::where('id',$id)->first();
        return view('admin.media.show', compact('media'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::where('id',$id)->first();
        return view('admin.media.edit',compact('media'));
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
        $media = Media::where('id',$id)->first();
        $requestData = $request->except('_method', '_token');;
        if($request->file('image')){
            $cover = $request->file('image');
            $extension = $cover->getClientOriginalExtension();
            $requestData['image'] = $cover->getClientOriginalName();
            Storage::disk('media')->put( $cover->getClientOriginalName(),  
            File::get($cover));
        }
        $media->where('id',$media->id)->update($requestData);
        return redirect()->route('admin.media.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::where('id',$id)->first();

        $media->delete();
        return back();
    }
}
