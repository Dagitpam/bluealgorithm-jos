@extends('layouts.user_app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          @include('include.message')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
            {{-- !row --}}
          <div class="row">
              {{-- !col-md- --}}
            <div class="col-md-8">
                <!-- Profile Image -->
            <div class="card card-info card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    @if (Auth::user()->image!=null)
                    <img class="profile-user-img img-fluid img-circle"
                    src="/storage/profile_images/{{$results['result'][0]['image']}}"
                         alt="User profile picture"> 
                    @else
                    <img class="profile-user-img img-fluid img-circle"
                    src="dist/img/avatar5.png" alt="User profile picture">  
                    @endif

                  </div>
  
                <h3 class="profile-username text-center">
                  {{$results['result'][0]['kid_surname']}}
                  {{$results['result'][0]['kid_firstname']}}
                  {{$results['result'][0]['kid_middlename']}}
                </h3>
  
                  <p class="text-muted text-center">Kid Coder</p>
                  <form  action="/update-profile" method="POST">
                    @csrf
                    <p class="h4 mb-4">You can edit profile</p>
      
                  <input type="hidden" name="userId" value="{{$results['result'][0]['id']}}">
                  <div class="row">
                    <div class="col-md-6">
                      <!-- sur name-->
                    <label for="">Last Name </label>
                    <input type="text" name="lName"  class="form-control mb-4" value="{{$results['result'][0]['lName']}}">
                    </div>
                    <div class="col-md-6">
                       <!-- second name -->
                       <label for="">First Name </label>
                    <input type="text" name="fName"  class="form-control mb-4" value="{{$results['result'][0]['fName']}}">
                    </div>
                  </div>
                    
                  <div class="row">
                      <div class="col-md-6">
                        
                      <label for="">Middle Name </label>
                       <!-- Middle name -->
                    <input type="text" name="mName"  class="form-control mb-4" value="{{$results['result'][0]['mName']}}">
                      </div>
                      <div class="col-md-6">
                  
                         <label for="">Email</label>
                      <!-- email -->
                     <input type="text" name="email" class="form-control mb-4" value="{{$results['result'][0]['email']}}">
      
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          
                        <label for="">Phone number</label>
                        <!--phone number  -->
                     <input type="text" name="phone" class="form-control mb-4" value="{{$results['result'][0]['phone']}}">
                    </div>
                        <div class="col-md-6">
                    
                           <label for="">Residential Area</label>
                         <!-- Residential area -->
                     <input type="text" name="residArea" class="form-control mb-4" value="{{$results['result'][0]['residArea']}}">
        
                        </div>
                      </div>
                      {{-- <div class="row">
                          <div class="col-md-6">
                            
                          <label for="">School</label>
                          <!-- School -->
                     <input type="text" name="school" class="form-control mb-4" value="{{$results['result'][0]['kid_school']}}">                          </div>
                          <div class="col-md-6">
                      
                             <label for="">Class</label>
                           <!-- class -->
                     <input type="text" name="class" class="form-control mb-4" value="{{$results['result'][0]['kid_class']}}">
          
                          </div>
                        </div>  --}}
                      
                    <!-- Sign in button -->
                    <button class="btn btn-success btn-md" type="submit">Update</button>
                </form>
                </div>
                <!-- /.card-body -->
              </div>
             </div>
            {{-- !col-md- --}}
            <div class="col-md-4">
                <!-- About Me Box -->
            <div class="card">
                    <div class="card-header aqua-gradient">
                      <h3 class="card-title">Change Password</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <form  action="/change-password" method="POST">
                                @csrf
                            <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                                                  
                                <!-- Password -->
                                <input type="password" name="new-password" class="form-control mb-4" placeholder="New password">
                                
                                <!-- Confirm Password -->
                                <input type="password" name="confirm-password" class="form-control mb-4" placeholder="Confirm Password">
                                <!-- Sign in button -->
                                <button class="btn btn-success btn-md" type="submit">Update</button>
                  
                  
                              </form>   
                             </div>
                    <!-- /.card-body -->  
                  </div>
                  <!-- /.card -->
                   <!-- About Me Box -->
            <div class="card">
                <div class="card-header blue-gradient">
                  <h3 class="card-title">Update Image</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                        <form  action="/upload-image" method="POST" enctype="multipart/form-data">
                            @csrf
                          
                       <label for="">Image <span class="text-muted">Not greater than 2mb</span></label>
                       <input type="file" name="images" class="form-control mb-4">
                            <button class="btn btn-success btn-md" type="submit">Upload</button>
                          </form>   
                         </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
         {{-- !row --}}
          
    </div>
    </section>
    </div>
  <!-- /.content-wrapper -->
@endsection