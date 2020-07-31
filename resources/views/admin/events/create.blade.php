@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Create Event
    </div>

    <div class="card-body">
        <form action="{{ route("admin.events.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="title">Title*</label>
                <input type="text" id="title" name="title" class="form-control" required>

            </div>
            <div class="form-group ">
                <label for="title">Location*</label>
                <input type="text" id="location" name="location" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">description*</label>
                <input type="text" id="description" name="description" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">images*</label>
                <input type="file" id="image" name="image" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Start Date*</label>
                <input type="date" id="date" name="started_at" class="form-control" min="{{$date}}" required>
            </div>

            <div class="form-group">
                <label for="">Category *</label>
                 <select class="form-control" name="category_id" required>
                     <option> Select Category </option>
                        @foreach($category as $item)
                     <option value="{{$item->id}}"> {{ $item->name}}  </option>
                     @endforeach
                 </select>
            </div>

            <div class="form-group">
                <label for="Price">Event Price*</label>
                <input type="number" id="price" name="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Paid *</label>
                 <select class="form-control">
                     <option value="1"> Yes </option>
                     <option value="0"> No </option>
                 </select>
            </div>


            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>

@endsection
