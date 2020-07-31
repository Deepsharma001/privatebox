@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit Media
    </div>

    <div class="card-body">
        <form action="{{ route("admin.media.update", [$media->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <label for="title">Title*</label>
                <input type="text" id="title" name="title" value="{{$media->title}}" class="form-control" required>

            </div>
            <div class="form-group">
                <label for="description">description*</label>
               <textarea id="summernote" name="description" class="form-control" required> {{$media->description}} </textarea>
            </div>
           

            <div class="form-group">
                <label for="description">images*</label>
                <img src="{{asset('storage/media/' . $media->image)}}" alt="" title="{{ $media->image}}" srcset="" width= "200px" height="150px" "/>
            </div>

            <div class="form-group">
                <label for="description">images*</label>
                <input type="file" id="image" name="image" class="form-control" >
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection