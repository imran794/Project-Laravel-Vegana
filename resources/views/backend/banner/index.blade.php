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
                            <th class="wd-25p">Status</th>
                            <th class="wd-25p">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($banners as $banner)
                          <tr>
                            <td>
                              <img width="100" src="{{ asset($banner->banner_image) }}" alt="upload/banner_image">
                            </td>
                            <td>{{ Str::limit($banner->banner_title,15) }}</td>
                            <td>{{ Str::limit($banner->banner_des,10) }}</td>
                            <td>
                              @if ($banner->laft_contect == 1)
                                <span class="badge badge-pill badge-success">Left Content</span>
                                @elseif($banner->right_contect == 1)
                                <span class="badge badge-pill badge-info">Right Content</span>
                                  @elseif($banner->middle_contect == 1)
                                <span class="badge badge-pill badge-primary">Middel Content</span>

                              @endif
                            </td>
                            <td>
                              @if ($banner->status == 1)
                                <span class="badge badge-pill badge-success">Active</span>
                                @else
                               <span class="badge badge-pill badge-danger">Deactive</span>
                              @endif
                            </td>

                            <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                @if (Auth::user()->role_id == 4)
                                  @else
                                  <a href="{{ url('admin/edit') }}/{{ $banner->id }}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                
                                <a href="{{ url('admin/banner/soft') }}/{{ $banner->id }}"  type="button" class="btn btn-danger btn-sm" title="Soft Delete"><i class="fa fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                          @endforeach
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
                           <th class="wd-25p">Banner Image</th>
                            <th class="wd-25p">Banner Title</th>
                            <th class="wd-25p">Banner Des</th>
                            <th class="wd-25p">Banner Con</th>
                            <th class="wd-25p">Status</th>
                            <th class="wd-25p">Action</th>
                       </tr>
                     </thead>
                     <tbody>
                       @foreach ($trashed as $trash)
                          <tr>
                            <td>
                              <img width="100" src="{{ asset($trash->banner_image) }}" alt="upload/banner_image">
                            </td>
                            <td>{{ Str::limit($trash->banner_title,15) }}</td>
                            <td>{{ Str::limit($trash->banner_des,10) }}</td>
                            <td>
                              @if ($trash->laft_contect == 1)
                                <span class="badge badge-pill badge-success">Left Content</span>
                                @elseif($trash->right_contect == 1)
                                <span class="badge badge-pill badge-info">Right Content</span>
                                  @elseif($trash->middle_contect == 1)
                                <span class="badge badge-pill badge-primary">Middel Content</span>

                              @endif
                            </td>
                            <td>
                              @if ($trash->status == 1)
                                <span class="badge badge-pill badge-success">Active</span>
                                @else
                               <span class="badge badge-pill badge-danger">Deactive</span>
                              @endif
                            </td>

                            <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ url('admin/banner/restore') }}/{{ $trash->id }}" class="btn btn-success btn-sm" title="Restore"><i class="fa fa-arrow-up"></i></a>
                                <a href="{{ url('admin/banner/delete') }}/{{ $trash->id }}"  type="button" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                     </tbody>
              
                   </table>
                 </div>
               </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
         <div class="card">
             <div class="card-header">Add Banner</div>
             <div class="card-body">
                <form method="POST" action="{{ route('banner.post') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Bnnner Title</label>
                      <input type="text" class="form-control" name="banner_title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bnnner Title">
                      @error('banner_title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bnnner Title</label>
                     
                      <textarea class="form-control" name="banner_des" placeholder="Bnnner Description"></textarea>
                      @error('banner_des')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Banner Btn</label>
                      <input type="text" class="form-control" name="banner_btn" id="exampleInputPassword1" placeholder="Banner Btn">
                      @error('banner_btn')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>
                       <div class="form-group">
                      <label for="exampleInputPassword1">Banner Image</label>
                      <input type="file" name="banner_image" class="form-control" id="exampleInputPassword1" placeholder="Brand Image">
                      @error('banner_image')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div> 
                      <div class="form-group">
                      <label for="exampleInputPassword1">Banner Content</label>
                      <label class="ckbox">
                        <input type="checkbox" value="1" name="laft_contect">
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
                    </div> 

                    
                 
                    <button type="submit" style="cursor: pointer" class="btn btn-primary">Add Banner</button>
                  </form>
             </div>
         </div>
        </div>
    </div>
</div>

@endsection