<?php

namespace App\Http\Controllers\Admin;

use File;
use Storage;
use App\Homepage;
use App\About_event;
use App\About_media;
use App\About_courses;
use App\About_swamiji;
use App\About_vedanta;
use App\About_sunandaji;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth\Admin;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Homepage::First();
        return view ('admin.pages.homepage', compact('page'));
    }

    public function update(Request $request, $id)
    {   
            $data  = $request->except('_token');

            if($request->file('banner_image')){
                $cover = $request->file('banner_image');
                $extension = $cover->getClientOriginalExtension();
                $data['banner_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }

        Homepage::where('id',$id)->update($data);
        return Redirect()->back();
    }

    public function about_vedanta()
    {
        
        $page = About_vedanta::First();
        return view ('admin.pages.about_vedanta', compact('page'));
    }

    public function vedanta_update(Request $request, $id)
    {   
            $data  = $request->except('_token');

            if($request->file('banner_image')){
                $cover = $request->file('banner_image');
                $extension = $cover->getClientOriginalExtension();
                $data['banner_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }

        About_vedanta::where('id',$id)->update($data);
        return Redirect()->back();
    }
    public function about_sunandaji()
    {
        
        $page = About_sunandaji::First();
        return view ('admin.pages.about_sunandaji', compact('page'));
    }

    public function about_sunandaji_update(Request $request, $id)
    {   
            $data  = $request->except('_token');

            if($request->file('banner_image')){
                $cover = $request->file('banner_image');
                $extension = $cover->getClientOriginalExtension();
                $data['banner_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }
            if($request->file('about_image')){
                $cover = $request->file('about_image');
                $extension = $cover->getClientOriginalExtension();
                $data['about_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }

            About_sunandaji::where('id',$id)->update($data);
        return Redirect()->back();
    }

    public function about_media()
    {
        
        $page = About_media::First();
        return view ('admin.pages.about_media', compact('page'));
    }
 
    public function about_media_update(Request $request, $id)
    {   
            $data  = $request->except('_token');
            if($request->file('banner_image')){
                $cover = $request->file('banner_image');
                $extension = $cover->getClientOriginalExtension();
                $data['banner_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }
            About_media::where('id',$id)->update($data);
        return Redirect()->back();
    }

    public function about_swamiji()
    {
        $page = About_swamiji::First();
        return view ('admin.pages.about_swamiji', compact('page'));
    }
 
    public function about_swamiji_update(Request $request, $id)
    {
            $data  = $request->except('_token');
            if($request->file('banner_image')){
                $cover = $request->file('banner_image');
                $extension = $cover->getClientOriginalExtension();
                $data['banner_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }
            if($request->file('image')){
                $cover = $request->file('image');
                $extension = $cover->getClientOriginalExtension();
                $data['image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }
            if($request->file('image_1')){
                $cover = $request->file('image_1');
                $extension = $cover->getClientOriginalExtension();
                $data['image_1'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }
            if($request->file('side_image')){
                $cover = $request->file('side_image');
                $extension = $cover->getClientOriginalExtension();
                $data['side_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }
            if($request->file('author_image')){
                $cover = $request->file('author_image');
                $extension = $cover->getClientOriginalExtension();
                $data['author_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }
            if($request->file('academic_image')){
                $cover = $request->file('academic_image');
                $extension = $cover->getClientOriginalExtension();
                $data['academic_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }

            if($request->file('corporate_guru_image')){
                $cover = $request->file('corporate_guru_image');
                $extension = $cover->getClientOriginalExtension();
                $data['corporate_guru_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }

        About_swamiji::where('id',$id)->update($data);
        return Redirect()->back();
    }

     
    public function event()
    { 
        $page = About_event::First();
        return view ('admin.pages.about_event', compact('page'));
    }
 
    public function about_event_update(Request $request, $id)
    {   
            $data  = $request->except('_token');

            if($request->file('banner_image')){
                $cover = $request->file('banner_image');
                $extension = $cover->getClientOriginalExtension();
                $data['banner_image'] = $cover->getClientOriginalName();
                Storage::disk('public')->put( $cover->getClientOriginalName(),  
                File::get($cover));
            }
            About_event::where('id',$id)->update($data);
        return Redirect()->back();
    }

    public function courses()
    { 
        $page = About_courses::First();
        return view ('admin.pages.courses', compact('page'));
    }
 
    public function courses_update(Request $request, $id)
    {
            $data  = $request->except('_token');

            if($request->file('banner_image')){
                $cover = $request->file('banner_image');
                $extension = $cover->getClientOriginalExtension();
                $data['banner_image'] = uniqid() . '_' . trim($cover->getClientOriginalName());
                Storage::disk('public')->put(  $data['banner_image'],  
                File::get($cover));
            }
            if($request->file('image')){
                $cover = $request->file('image');
                $extension = $cover->getClientOriginalExtension();
                $data['image'] = uniqid() . '_' . trim($cover->getClientOriginalName());
                Storage::disk('public')->put(  $data['image'],  
                File::get($cover));
            }

            About_courses::where('id',$id)->update($data);
            return Redirect()->back();
    }



}

