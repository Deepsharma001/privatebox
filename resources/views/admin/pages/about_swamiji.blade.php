@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Home Page
    </div>
    <div class="card-body">
        <form action="{{ route("admin.swamiji.update", [$page->id]) }}" method="POST" enctype="multipart/form-data">
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
                <label for="description">About Swamiji Images*</label>
                <img src="{{asset('storage/' . @$page->image)}}" alt="" title="{{ @$page->image}}" height="150px" width="200px"/>
                <input type="file" id="image" name="image" class="form-control" >
            </div>
            <div class="form-group">
                <label for="description">About Swamiji Images*</label>
                <img src="{{asset('storage/' . @$page->image_1)}}" alt="" title="{{ @$page->image_1}}" height="150px" width="200px"/>
                <input type="file" id="image" name="image_1" class="form-control" >
            </div>

            <div class="form-group">
                <label for="description">Activity Image*</label>
                <img src="{{asset('storage/' . @$page->side_image)}}" alt="" title="{{ @$page->side_image}}" height="150px" width="200px"/>
                <input type="file" id="image" name="side_image" class="form-control" >
            </div>

            <div class="form-group">
                <label for="secondary_sub_description">Activity Description*</label>
                <textarea  id="summernote" name="description"  class="form-control summernote" required> {{$page->description}} </textarea>
            </div>

            <div class="form-group">
                <label for="card_title">Card Header*</label>
                <textarea  id="summernote" name="card_title"  class="form-control summernote" required> {{$page->card_title}} </textarea>
            </div>
            <div class="form-group">
                <label for="secondary_description">Description*</label>
                <textarea  id="summernote" name="card_description"  class="form-control summernote" required> {{$page->card_description}} </textarea>
            </div>

            <div class="form-group">
                <label for="author_title">Author Title*</label>
                <textarea id="summernote" name="author_title"  class="form-control summernote" required> {{$page->author_title}} </textarea>
            </div>
            <div class="form-group">
                <label for="author_sub_description">Sub Description*</label>
                <textarea  id="summernote" name="author_sub_description"  class="form-control summernote" required> {{$page->author_sub_description}} </textarea>
            </div>

            <div class="form-group">
                <label for="author_description">Description*</label>
                <textarea  id="summernote" name="author_description"  class="form-control summernote" required> {{$page->author_description}} </textarea>
            </div>
            <div class="form-group">
                <label for="description">Author Image*</label>
                <img src="{{asset('storage/' . @$page->author_image)}}" alt="" title="{{ @$page->author_image}}" height="150px" width="200px"/>
                <input type="file" id="image" name="author_image" class="form-control" >
            </div>

            <div class="form-group">
                <label for="academic_title">Academic Title*</label>
                <textarea id="summernote" name="academic_title"  class="form-control summernote" required> {{$page->academic_title}} </textarea>
            </div>
            <div class="form-group">
                <label for="academic_sub_description">Sub Description*</label>
                <textarea  id="summernote" name="academic_sub_description"  class="form-control summernote" required> {{$page->academic_sub_description}} </textarea>
            </div>

            <div class="form-group">
                <label for="academic_description">Description*</label>
                <textarea  id="summernote" name="academic_description"  class="form-control summernote" required> {{$page->academic_description}} </textarea>
            </div>
            <div class="form-group">
                <label for="academic_image">Academic Image*</label>
                <img src="{{asset('storage/' . @$page->academic_image)}}" alt="" title="{{ @$page->academic_image}}" height="150px" width="200px"/>
                <input type="file" id="image" name="academic_image" class="form-control" >
            </div>
            <div class="form-group">
                <label for="corporate_guru_title">Corporate Title*</label>
                <textarea id="summernote" name="corporate_guru_title"  class="form-control summernote" required> {{$page->corporate_guru_title}} </textarea>
            </div>
            <div class="form-group">
                <label for="corporate_guru_sub_description">Sub Description*</label>
                <textarea  id="summernote" name="corporate_guru_sub_description"  class="form-control summernote" required> {{$page->corporate_guru_sub_description}} </textarea>
            </div>

            <div class="form-group">
                <label for="corporate_guru_description">Description*</label>
                <textarea  id="summernote" name="corporate_guru_description"  class="form-control summernote" required> {{$page->corporate_guru_description}} </textarea>
            </div>
            <div class="form-group">
                <label for="corporate_guru_image">Corporate Guru Image*</label>
                <img src="{{asset('storage/' . @$page->corporate_guru_image)}}" alt="" title="{{ @$page->corporate_guru_image}}" height="150px" width="200px"/>
                <input type="file" id="image" name="corporate_guru_image" class="form-control" >
            </div>

            <div class="form-group ">
                <label for="footer_title">Footer Title*</label>
                <input type="text" id="footer_title" name="footer_title" value="{{$page->footer_title}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="footer_description">Description*</label>
                <textarea  id="summernote" name="footer_description"  class="form-control summernote" required> {{$page->footer_description}} </textarea>
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