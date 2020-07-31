@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Create New Page
    </div>

    <div class="card-body">
        <form action="{{ route("admin.pages.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="title">Title*</label>
                <input type="text" id="title" name="title" class="form-control" required>

            </div>
            <div class="form-group">
                <label for="description">description*</label>
                <textarea id="summernote" name="description" class="form-control summernote" required> </textarea>
            </div>
            <div class="form-group">
                <label for="description">Banner Image*</label>
                <input type="file" name="banner_image" class="form-control " required>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection