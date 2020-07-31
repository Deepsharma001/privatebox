@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Edit Page
    </div>
    <div class="card-body">
        <form action="{{ route("admin.pages.update", [$pages->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <label for="title">Title*</label>
                <input type="text" id="title" name="title" value="{{$pages->title}}" class="form-control" required>

            </div>
            <div class="form-group">
                <label for="description">description*</label>
               <textarea id="summernote" name="description" class="form-control summernote" required> {{$pages->description}} </textarea>
            </div>

            <div class="form-group">
                <label for="description">images*</label>
                <img src="{{asset('storage/' . $pages->banner_image)}}" alt="" srcset="" width= "200px" height="150px" "/>
            </div>

            <div class="form-group">
                <label for="description">Banner Image*</label>
                <input type="file" name="banner_image" class="form-control" required>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection