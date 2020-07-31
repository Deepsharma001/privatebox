<?php

namespace App\Http\Controllers;

use App\About_courses;
use App\Page;
use App\Event;
use App\Media;
use App\Homepage;
use App\About_event;
use App\About_media;
use App\About_swamiji;
use App\About_vedanta;
use App\About_sunandaji;
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
        $date = Carbon::now()->toDateString();
        $events = Event::where('started_at', '>',$date)->get();
        $data = Homepage::Where('id',1)->first();
        return view('Dashboard.index', compact('events','data'));
    }
    /**
     * about function.
     */ 
    public function show($id)
    {
        $pages = Page::where('id',$id)->first();
        return view('admin.pagesetting.show', compact('pages'));
    }
    
    public function courses()
    {
        $pages = About_courses::where('id' , 1)->first();
        return view('Dashboard.courses' , compact('pages'));
    }

    public function aboutsunandaji()
    {
        $page = About_sunandaji::Where('id',1)->first();
        return view('Dashboard.sunandaji' ,compact('page'));
    }

    public function media()
    {
        $page = About_media::Where('id',1)->first();
        $media = Media::all();
        return view('Dashboard.media',compact('page','media'));
    }

    public function event()
    {   
        $page = About_event::Where('id',1)->first();
        $events = Event::all();
        return view('Dashboard.event',compact('page','events'));
    }

    public function vedanta()
    {  
        $page = About_vedanta::Where('id',1)->first();
        return view('Dashboard.vedanta', compact('page'));
    }
    public function about_swamiji ()
    {
        $page = About_swamiji::Where('id',1)->first();
        return view('Dashboard.about_swamiji',compact('page'));
    }

    public function contact()
    {
        return view('contact');
    }
  

}
