@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Home Page
    </div>
    <div class="card-body">
        <form action="{{ route("admin.homepage.update", [$page->id]) }}" method="POST" enctype="multipart/form-data">
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
            <div class="form-group ">
                <label for="main_title">Secondary Title*</label>
                <textarea type="text" id="secondary_title" name="secondary_title" class="form-control summernote" >{{$page->secondary_title}} </textarea>
            </div>
            <div class="form-group">
                <label for="secondary_sub_description">Sub Description*</label>
                <textarea  id="summernote" name="secondary_sub_description"  class="form-control summernote" required> {{$page->secondary_sub_description}} </textarea>
            </div>
            <div class="form-group">
                <label for="secondary_description">Description*</label>
                <textarea  id="summernote" name="secondary_description"  class="form-control summernote" required> {{$page->secondary_description}} </textarea>
            </div>
            <div class="form-group">
                <label for="secondary_link">Video Link*</label>
                <input  id="summernote" name="secondary_link" value="{{$page->secondary_link}}" class="form-control" required>  
            </div>

            <div class="form-group">
                <label for="third_title">Third Title*</label>
                <textarea id="summernote" name="third_title"  class="form-control summernote" required> {{$page->third_title}} </textarea>
            </div>
            <div class="form-group">
                <label for="secondary_sub_description">Sub Description*</label>
                <textarea  id="summernote" name="third_sub_description"  class="form-control summernote" required> {{$page->third_sub_description}} </textarea>
            </div>
            <div class="form-group">
                <label for="third_description">Description*</label>
                <textarea  id="summernote" name="third_description"  class="form-control summernote" required> {{$page->third_description}} </textarea>
            </div>
            <div class="form-group">
                <label for="third_link">Video Link*</label>
                <input  id="summernote" name="third_link" value="{{$page->third_link}}" class="form-control" required>  
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection