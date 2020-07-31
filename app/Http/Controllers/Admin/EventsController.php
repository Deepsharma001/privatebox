<?php

namespace App\Http\Controllers\Admin;

use File;
use Storage;
use App\Event;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $category = Category::get();
        $date = Carbon::now()->toDateString();
        return view('admin.events.create',compact('category','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $event = $request->all();

        if($request->file('image')){
            $cover = $request->file('image');
            $extension = $cover->getClientOriginalExtension();
            $event['image'] = $cover->getClientOriginalName();
            Storage::disk('event')->put( $cover->getClientOriginalName(),  
            File::get($cover));
        }
    
        $event = Event::create($event);

        return redirect()->route('admin.events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Event $event)
    {
        $category = Category::all();
        return view('admin.events.edit',compact('category','event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, Event $event)
    {
        $requestData = $request->except('_method', '_token');;
        if($request->file('image')){
            $cover = $request->file('image');
            $extension = $cover->getClientOriginalExtension();
            $requestData['image'] = $cover->getClientOriginalName();
            Storage::disk('event')->put( $cover->getClientOriginalName(),  
            File::get($cover));
        }
        $event->where('id',$event->id)->update($requestData);
        return redirect()->route('admin.events.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return back();
    }
}
