@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Home Page
    </div>
    <div class="card-body">
        <form action="{{ route("admin.event.update", [$page->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="main_title">Head Title*</label>
                <input type="text" id="main_title" name="main_title" value="{{$page->main_title}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Head Description*</label>
                <textarea  id="summernote" name="main_description"  class="form-control summernote" required> {{$page->main_description}} </textarea>
            </div>
            <div class="form-group">
                <label for="description">Banner Images*</label>
                <img src="{{asset('storage/' . @$page->banner_image)}}" alt="" title="{{ @$page->banner_image}}" height="150px" width="200px"/>
                <input type="file" id="image" name="banner_image" class="form-control" >
            </div>
            <div class="form-group">
                <label for="link_1">Video Link*</label>
                <input name="link_1" value="{{$page->link_1}}" class="form-control" required>  
            </div>
            <div class="form-group">
                <label for="link_2">Video Link*</label>
                <input name="link_2" value="{{$page->link_2}}" class="form-control" required>  
            </div>
            <div class="form-group">
                <label for="link_3">Video Link*</label>
                <input  name="link_3" value="{{$page->link_3}}" class="form-control" required>  
            </div>
            <div class="form-group">
                <label for="link_4">Video Link*</label>
                <input name="link_4" value="{{$page->link_4}}" class="form-control" required>  
            </div>
          

          
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection