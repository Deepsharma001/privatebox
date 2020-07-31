@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Media Show Page
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                           Name
                        </th>
                        <td>
                            {{ $testimonial->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Title
                        </th>
                        <td>
                            {{ $testimonial->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Description
                        </th>
                        <td>
                            {!! $testimonial->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Media Image
                        </th>
                        <td>
                        <img src="{{asset('storage/testimonial/' . $testimonial->image)}}" alt="" title="{{ $testimonial->image}}" srcset="" width= "200px" height="150px" "/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection