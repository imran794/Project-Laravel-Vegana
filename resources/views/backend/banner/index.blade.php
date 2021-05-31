@extends('layouts.dashboard')

@section('Banner')
active
@endsection

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Banner</li>
    </ol>
  </nav>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
           <div class="card">
               <div class="card-body">Add Brand</div>
               <div class="card-header">
                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                      <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-25p">Banner Image</th>
                            <th class="wd-25p">Banner Title</th>
                            <th class="wd-25p">Banner Des</th>
                            <th class="wd-25p">Banner Con</th>
                            <th class="wd-25p">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- @foreach ($brands as $brand)
                          <tr>
                            <td>
                              <img width="100" src="{{ asset('uploaded/brand_image') }}/{{ $brand->brand_image }}" alt="">
                            </td>
                            <td>{{ $brand->brand_name_en }}</td>
                            <td>{{ $brand->brand_name_bn }}</td>
                            <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ url('admin/edit') }}/{{ $brand->id }}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="{{ url('admin/brand/soft') }}/{{ $brand->id }}"  type="button" class="btn btn-info btn-sm" title="Soft Delete"><i class="fa fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                          @endforeach --}}
                        </tbody>
                      </table>
                    </div>
                  </div>
               </div>
           </div>
           <br>
           <div class="card">
            <div class="card-body">Trash Data</div>
            <div class="card-header">
             <div class="card pd-20 pd-sm-40">
                 <div class="table-wrapper">
                   <table id="datatable2" class="table display responsive nowrap">
                     <thead>
                       <tr>
                         <th class="wd-25p">Brand Image</th>
                         <th class="wd-25p">Brand Name En</th>
                         <th class="wd-25p">Brand Name Bn</th>
                         <th class="wd-25p">Action</th>
                       </tr>
                     </thead>
                     <tbody>
                       {{-- @foreach ($trashed as $trash)
                       <tr>
                         <td>
                           <img width="100" src="{{ asset('uploaded/brand_image') }}/{{ $trash->brand_image }}" alt="">
                         </td>
                         <td>{{ $trash->brand_name_en }}</td>
                         <td>{{ $trash->brand_name_bn }}</td>
                         <td>
                           <div class="btn-group" role="group" aria-label="Basic example">
                             <a href="{{ url('admin/trashed') }}/{{ $trash->id }}" class="btn btn-info btn-sm" title="restore">restore</a>
                             <a href="{{ url('admin/delete') }}/{{ $trash->id }}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                           </div>
                         </td>
                       </tr>
                       @endforeach --}}
                     </tbody>
              
                   </table>
                 </div>
               </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
         <div class="card">
             <div class="card-header">Add Brand</div>
             <div class="card-body">
                <form method="POST" action="{{ route('Banner.post') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Bnnner Title</label>
                      <input type="text" class="form-control" name="Banner_title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bnnner Title">
                      @error('Banner_title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bnnner Title</label>
                      <input type="text" class="form-control" name="Banner_des" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bnnner Description">
                      @error('Banner_des')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Brnad Btn</label>
                      <input type="text" class="form-control" name="banner_btn" id="exampleInputPassword1" placeholder="Banner Btn">
                      @error('banner_btn')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>
                       <div class="form-group">
                      <label for="exampleInputPassword1">Brnad Image</label>
                      <input type="file" name="brand_image" class="form-control" id="exampleInputPassword1" placeholder="Brand Image">
                      @error('brand_image')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>
                    <button type="submit" style="cursor: pointer" class="btn btn-primary">Add Banner</button>
                  </form>
             </div>
         </div>
        </div>
    </div>
</div>

@endsection