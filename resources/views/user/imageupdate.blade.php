@extends('layouts.frontend')

@section('content')
   
        <!--=====================================
                 SINGLE BANNER PART START
        =======================================-->
        <section class="single-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h2>User Profile</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Image Update</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                 SINGLE BANNER PART END
        =======================================-->
     <section class="faq-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                         <div class="card text-center" class="" style="width: 18rem;">
                  <img class="card-img-top" style="border-radius: 50%; margin-top: 10px;" width="100%" height="100%" src="{{ asset(Auth::user()->image) }}" alt="">
                  <ul class="list-group list-group-flush">
                   <a href="{{ route('user.dashboard') }}" class="btn btn-sm btn-block btn-primary">Home</a>
                    <a href="{{ route('image.update') }}" class="btn btn-sm btn-block btn-primary">Update Image</a>
                    <a href="{{ route('change.passwprd') }}" class="btn btn-sm btn-block btn-primary">Change Password</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="btn btn-sm btn-block btn-danger">Sign Out</a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </ul>
                </div> 
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
               <h3 class="text-center"> <span class="text-dange">Hi..!</span> <strong class="text-warning">{{ Auth::user()->name }}</strong> Update Your profile</h3>
             <div class="card-body">
                <form method="POST" action="{{ route('update.image.post') }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="old_image" value="{{ auth::user()->image }}">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('image')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror

                    </div>
               
                    <button type="submit" style="cursor: pointer" class="btn btn-primary">Update Image</button>
                  </form>
             </div>
         </div>
        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection