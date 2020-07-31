@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.users.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.user.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" >
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.user.fields.email') }}*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" >
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('job_title') ? 'has-error' : '' }}">
                <label for="job_title">Job Title*</label>
                <input type="text" id="job_title" name="job_title" class="form-control" value="{{ old('job_title', isset($user) ? $user->job_title : '') }}" >
                @if($errors->has('job_title'))
                    <em class="invalid-feedback">
                    Job title
                    </em>
                @endif
                
            </div>
            <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                <label for="Location">Location*</label>
                <input type="text" id="location" name="location" class="form-control" value="{{ old('location', isset($user) ? $user->location : '') }}" >
                @if($errors->has('location'))
                    <em class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                <label for="email">Company*</label>
                <input type="text" id="company" name="company" class="form-control" value="{{ old('company', isset($user) ? $user->company : '') }}" >
                @if($errors->has('company'))
                    <em class="invalid-feedback">
                        {{ $errors->first('company') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('ssn') ? 'has-error' : '' }}">
                <label for="Social Security Nubmer">Social Security Nubmer*</label>
                <input type="number" id="ssn" name="ssn" class="form-control" value="{{ old('ssn', isset($user) ? $user->ssn : '') }}" >
                @if($errors->has('ssn'))
                    <em class="invalid-feedback">
                        {{ $errors->first('ssn') }}
                    </em>
                @endif
                
            </div>
            <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" class="form-control" value="{{ old('email', isset($user) ? $user->age : '') }}" >
                @if($errors->has('age'))
                    <em class="invalid-feedback">
                        {{ $errors->first('age') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                <label for="Gender">Gender</label>
                <input type="text" id="gender" name="gender" class="form-control" value="{{ old('gender', isset($user) ? $user->gender : '') }}" >
                @if($errors->has('gender'))
                    <em class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input type="password" id="password" name="password" class="form-control">
                @if($errors->has('password'))
                    <em class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group">
                      <div class="form-check">
                        <label>
                            @if($user->approved == 1)
                          <input type="checkbox" class="form-control p-input form-check-input" name="approved" value="1" checked>
                          @else
                          <input type="checkbox" class="form-control p-input form-check-input" name="approved" value="1">
                          @endif
                          Verify

                        </label>
                      </div>
            </div>
            <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                <label for="roles">{{ trans('cruds.user.fields.roles') }}*
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" >
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <em class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.roles_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection