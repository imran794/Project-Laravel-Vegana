
@extends('layouts.dashboard')

@section('Banner')
active
@endsection

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
    </ol>
  </nav>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
           <div class="card">
               <div class="card-body">Add Brand</div>
               <div class="card-header">
                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                      <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-25p">Image</th>
                            <th class="wd-25p">Name</th>
                            <th class="wd-25p">Role Id</th>
                            <th class="wd-25p">Email</th>
                            <th class="wd-25p">Number</th>
                            <th class="wd-25p">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                          <tr>
                            <td>
                              <img width="100" style="border-radius: 50%;" src="{{ asset($user->image) }}" alt="upload/banner_image">
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>
                            	@if ($user->role_id == 1)
                            		  <span class="badge badge-pill badge-success">Admin</span>
                            		  @elseif($user->role_id == 2)
                            		    <span class="badge badge-pill badge-danger">User</span> 
                            		    @elseif($user->role_id == 3)
                            		    <span class="badge badge-pill badge-info">Author</span>
                            		     @elseif($user->role_id == 4)
                            		    <span class="badge badge-pill badge-primary">Moderate</span>
                            	@endif
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->number }}</td>
                           
                    
                               <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ url('admin/profile/edit') }}/{{ $user->id }}" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('admin/profile/delete') }}/{{ $user->id }}"  type="button" class="btn btn-danger btn-sm" title="Soft Delete"><i class="fa fa-trash"></i></a>
                                
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
    
    </div>
</div>

@endsection