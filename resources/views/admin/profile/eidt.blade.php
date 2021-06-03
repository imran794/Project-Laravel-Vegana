@extends('layouts.dashboard')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin.dashboard') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('edit.admin.profile') }}">Profile</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit User</li>
    </ol>
  </nav>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
         <div class="card">
             <div class="card-header">Edit Profile</div>
             <div class="card-body">
                   <form method="POST" action="{{ route('admin.edit.post') }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="old_image" value="{{ Auth::user()->image }}">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $edit_data->name }}">
                      @error('name')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                     <div class="form-group">
                       <label for="exampleInputEmail1">Phone Number</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $edit_data->email }}">
                      @error('email')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Phone Number</label>
                      <input type="text" class="form-control" name="number" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $edit_data->number }}">
                      @error('number')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                       <div class="form-group">
                      <label for="exampleInputPassword1">Image</label>
                      <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                      <div class="py-2">
                        <img width="200" src="{{ asset($edit_data->image) }}">
                      </div>
                      @error('image')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>
                 

                    <button type="submit" style="cursor: pointer" class="btn btn-primary">Update Profile</button>
                  </form>
             </div>
         </div>
        </div>
    </div>
</div>
</div>

@endsection
