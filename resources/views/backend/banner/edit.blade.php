@extends('layouts.dashboard')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin.dashboard') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('banner') }}">Banner</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Banner</li>
    </ol>
  </nav>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
         <div class="card">
             <div class="card-header">Edit Banner</div>
             <div class="card-body">
                   <form method="POST" action="{{ route('Banner.edit.post') }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value='{{ $edit_data->id }}'>
                  <input type="hidden" name="old_image" value="{{ $edit_data->banner_image }}">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Banner Title</label>
                      <input type="text" class="form-control" name="banner_title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $edit_data->banner_title }}">
                      @error('banner_title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                     <div class="form-group">
                      <label for="exampleInputEmail1">Banner Title</label>
                      <textarea class="form-control" name="banner_des">{{ $edit_data->banner_des }}</textarea>
                      @error('banner_des')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Banner Title</label>
                      <input type="text" class="form-control" name="banner_btn" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $edit_data->banner_btn }}">
                      @error('banner_btn')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                       <div class="form-group">
                      <label for="exampleInputPassword1">Banner Image</label>
                      <input type="file" name="banner_image" class="form-control" id="exampleInputPassword1">
                      <div class="py-2">
                        <img width="200" src="{{ asset($edit_data->banner_image) }}">
                      </div>
                      @error('banner_image')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>
                  {{--     <div class="form-group">
                      <label for="exampleInputPassword1">Banner Content</label>
                      <label class="ckbox">
                        <input type="checkbox"  value="1" name="laft_contect">
                        <span>Laft Contect</span>
                      </label>
                       <label class="ckbox">
                        <input type="checkbox" value="1" name="right_contect">
                        <span>Right Contect</span>
                      </label>
                       <label class="ckbox">
                        <input type="checkbox" value="1" name="middle_contect"> 
                        <span>Middle Contect</span>
                      </label>
                    </div>  --}}

                    <button type="submit" style="cursor: pointer" class="btn btn-primary">Update Brand</button>
                  </form>
             </div>
         </div>
        </div>
    </div>
</div>
</div>

@endsection
