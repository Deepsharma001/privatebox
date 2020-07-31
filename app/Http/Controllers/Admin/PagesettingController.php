<?php
namespace App\Http\Controllers\Admin;
use Storage;
use File;
use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Support\Facades\Auth\Admin;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
class PagesettingController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $pages = Page::all();
        return view('admin.pagesetting.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.pagesetting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pages = $request->all();
        if($request->file('banner_image')){
            $cover = $request->file('banner_image');
            $extension = $cover->getClientOriginalExtension();
            $pages['banner_image'] = uniqid() . '_' . trim($cover->getClientOriginalName());
            Storage::disk('public')->put(   $pages['banner_image'],  
            File::get($cover));
        }
        $pages = Page::create($pages);
        return redirect()->route('admin.pages.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = Page::where('id',$id)->first();
        return view('admin.pagesetting.edit',compact('pages'));
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
        $pages = Page::where('id',$id)->first();
        $requestData = $request->except('_method', '_token');;
        if($request->file('banner_image')){
            $cover = $request->file('banner_image');
            $extension = $cover->getClientOriginalExtension();
            $requestData['banner_image'] = uniqid() . '_' . trim($cover->getClientOriginalName());
            Storage::disk('public')->put($requestData['banner_image'],  
            File::get($cover));
        }
        $pages->where('id',$pages->id)->update($requestData);
        return redirect()->route('admin.pages.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages = Page::where('id',$id)->first();

        $pages->delete();
        return back();
    }
}
