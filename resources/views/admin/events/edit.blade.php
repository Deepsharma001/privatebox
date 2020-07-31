@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit Event
    </div>

    <div class="card-body">
        <form action="{{ route("admin.events.update", [$event->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <label for="title">Title*</label>
                <input type="text" id="title" name="title" value="{{$event->title}}" class="form-control" required>

            </div>
            <div class="form-group">
                <label for="description">description*</label>
                <textarea  id="summernote" name="description"  class="form-control" required> {{$event->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="location">Location*</label>
                <input type="text" id="location" name="location"  value="{{$event->location}}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">images*</label>
                <img src="{{asset('storage/event/' . $event->image)}}" height="150px" width="200px" alt="" title="{{ $event->image}}" srcset="" sizes="(max-width: 720px) 100vw, 720px"/>
            </div>

            <div class="form-group">
                <label for="description">images*</label>
                <input type="file" id="image" name="image" class="form-control" >
            </div>
            <div class="form-group">
                <label for="date">Start Date*</label>
                 <input type="date" id="date" name="started_at" class="form-control" value="{{$event->started_at}}" required>
            </div>
            @php
              @$category_name = \App\Category::where('id', $event->category_id )->first()->id;
            @endphp
            <div class="form-group">
                 <label for="">Category *</label>
                 <select class="form-control" name="category_id">
                     @foreach($category as $item)
                     <option value="{{$item->id}} "  {{  ($item->id == $category_name ) ?    'selected' : ''}}>  {{ $item->name}}  </option>
                     @endforeach
                 </select>
            </div>
            <div class="form-group">
                <label for="">Paid *</label>
                 <select class="form-control">
                @if($event->is_paid == 0)
                <option value="0"> No </option>
                @else
                <option value="1"> Yes </option>
                @endif
                <option value="1"> Yes </option>
                <option value="0"> No </option>
                 </select>
            </div>

            <div class="form-group">
                <label for="Price">Event Price*</label>
                <input type="number" id="price" name="price" value="{{$event->price}}" class="form-control" required>
            </div>


            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection