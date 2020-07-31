@extends('layouts.admin')
@section('content')
<div class="card"> 
    <div class="card-header">
        Courses Page
    </div>
    <div class="card-body">
        <form action="{{ route("admin.courses.update", [$page->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="main_title">Head Title*</label>
                <input type="text" id="main_title" name="main_title" value="{{$page->main_title}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Head Description*</label>
                <textarea  id="summernote" name="main_sub_description"  class="form-control summernote" required> {{$page->main_sub_description}} </textarea>
            </div>
            <div class="form-group">
                <label for="description">Banner Images*</label>
                <img src="{{asset('storage/' . @$page->banner_image)}}" alt="" title="{{ @$page->banner_image}}" height="150px" width="200px"/>
                <input type="file" id="image" name="banner_image" class="form-control" >
            </div>
            <div class="form-group ">
                <label for="main_title">Youth camps Title*</label>
                <input type="text" id="secondary_title" name="secondary_title" class="form-control "  value="{{$page->secondary_title}} ">
            </div>
            <div class="form-group">
                <label for="secondary_sub_description">Sub Description*</label>
                <input   name="secondary_sub_description"  class="form-control" value="{{$page->secondary_sub_description}}" required >
            </div>
            <div class="form-group">
                <label for="secondary_description">Description*</label>
                <textarea  id="summernote" name="secondary_description"  class="form-control summernote" required> {{$page->secondary_description}} </textarea>
            </div>

            <div class="form-group ">
                <label for="main_title">Course Section Title*</label>
                <input type="text" id="third_title" name="third_title" class="form-control" value="{{$page->third_title}} " >
            </div>
            <div class="form-group">
                <label for="third_sub_description">Sub Description*</label>
                <input  name="third_sub_description"  class="form-control" required value="{{$page->third_sub_description}}">  
            </div>
            <div class="form-group">
                <label for="third_description">Description*</label>
                <textarea  id="summernote" name="third_description"  class="form-control summernote" required> {{$page->third_description}} </textarea>
            </div>


            <div class="form-group">
                <label for="card_title">Family retreats Section Title*</label>
                <input name="card_title"  class="form-control" value="{{$page->card_title}}" required> 
            </div>

            <div class="form-group">
                <label for="card_sub_description">Sub Description*</label>
                <input name="card_sub_description"  class="form-control" value="{{$page->card_sub_description}}" required>
            </div>

            <div class="form-group">
                <label for="card_description">Main Description*</label>
                <input name="card_description"  class="form-control summernote" value="{{$page->card_description}}"  required> 
            </div>

            <div class="form-group">
                <label for="topic_card">Topic Section Title*</label>
                <input name="topic_card"  class="form-control" value="{{$page->topic_card}}" required>
            </div>

            <div class="form-group">
                <label for="description">Description*</label>
                <textarea  id="summernote" name="description"  class="form-control summernote" required> {{$page->description}} </textarea>
            </div>

            <div class="form-group">
                <label for="retreats">Retreats Title*</label>
                <input name="retreats"  class="form-control" value="{{$page->retreats}}" required> 
            </div>
            <div class="form-group">
                <label for="retreats_sub_description">Sub Description*</label>
                <input name="retreats_sub_description"  class="form-control" value="{{$page->retreats_sub_description}}" required> 
            </div>

            <div class="form-group">
                <label for="retreats_description">Description*</label>
                <textarea  id="summernote" name="retreats_description"  class="form-control summernote" required> {{$page->retreats_description}} </textarea>
            </div>

            <div class="form-group">
                <label for="image">Footer Image*</label>
                <img src="{{asset('storage/' . @$page->image)}}" alt="" title="{{ @$page->image}}" height="150px" width="200px"/>
                <input type="file" id="image" name="image" class="form-control" >
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection