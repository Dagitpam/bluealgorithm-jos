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
              <li class="breadcrumb-item active">Registration Form</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      {{-- Form design --}}
      @if (Auth::user()->status=='success')
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Kids Code Registration Form</h4>
            <p class="card-description text-danger">&nbsp;<sub>(Carefully fill in the form with correct details)</sub></p>
            <h5><b>Child's Bio data:</b></h5>
            <form class="forms-sample" method="POST" action="/reg-form" enctype="multipart/form-data">
              @csrf
            <input type="hidden" name="userId" value="{{Auth::user()->id}}">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group col-sm-12 col-md-12 col-lg-12">
                    <label for="exampleInputName1">Surname</label>
                    <input type="text" class="form-control" name="kid-surname" id="exampleInputName1" placeholder="Kid Surname">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group col-sm-12 col-md-12 col-lg-12">
                    <label for="exampleInputName1">First Name</label>
                    <input type="text" class="form-control" name="kid-firstname" id="exampleInputName1" placeholder="Kid Firstname">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group col-sm-12 col-md-12 col-lg-12">
                    <label for="exampleInputName1">Middle Name</label>
                    <input type="text" class="form-control" name="kid-middlename" id="exampleInputName1" placeholder="Kid Middle-Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">State of Residence</label>
                    <select class="form-control" name="kid-state-of-origin" id="exampleSelectGender">
                      <option value="" disabled selected>Choose State</option>
                      <option value="Abia">Abia Umuahia</option>
                      <option value="Adamawa">Adamawa Yola</option>
                      <option value="Akwa Ibom">Akwa Ibom Uyo</option>
                      <option value="Anambra">Anambra Awka</option>
                      <option value="Bauchi">Bauchi Bauchi</option>
                      <option value="Bayelsa">Bayelsa Yenagoa</option>
                      <option value="Benue">Benue Makurdi</option>
                      <option value="Borno">Borno Maiduguri</option>
                      <option value="Cross">Cross River Calabar</option>
                      <option value="Delta">Delta Asaba</option>
                      <option value="Ebonyi">Ebonyi Abakaliki</option>
                      <option value="Edo">Edo Benin City</option>
                      <option value="Ekiti">Ekiti Ado - Ekiti</option>
                      <option value="Enugu">Enugu Enugu</option>
                      <option value="Gombe">Gombe Gombe	</option>
                      <option value="Imo">Imo Owerri</option>
                      <option value="Abia">Abia Umuahia</option>
                      <option value="Adamawa">Adamawa Yola</option>
                      <option value="Akwa">Akwa Ibom Uyo</option>
                      <option value="Anambra">Anambra Awka</option>
                      <option value="Bauchi">Bauchi Bauchi</option>
                      <option value="Jigawa">Jigawa Dutse</option>
                      <option value="Kaduna">Kaduna Kaduna</option>
                      <option value="Kano">Kano Kano</option>
                      <option value="Katsina">Katsina Katsina</option>
                      <option value="Kebbi">Kebbi Birnin Kebbi</option>
                      <option value="Kogi">Kogi	Lokoja</option>
                      <option value="Kwara">Kwara Ilorin</option>
                      <option value="Lagos">Lagos Ikeja</option>
                      <option value="Nasarawa">Nasarawa Lafia</option>
                      <option value="Ogun">Ogun Abeokuta</option>
                      <option value="Ondo">Ondo Akure</option>
                      <option value="Osun">Osun Oshogbo</option>
                      <option value="Oyo">Oyo Ibadan</option>
                      <option value="Plateau">Plateau Jos</option>
                      <option value="Rivers">Rivers Port Harcourt</option>
                      <option value="Sokoto">Sokoto Sokoto</option>
                      <option value="Taraba">Taraba Jalingo</option>
                      <option value="Yobe">Yobe Damaturu</option>
                      <option value="Zamfara">Zamfara Gusau</option>
                      <option value="Abuja">Abuja FCT</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-lg-12">
                    <label for="exampleInputName1">Residential Area</label>
                    <input type="text" class="form-control" name="kid-resid-area" id="exampleInputEmail3" placeholder="Kid Residential Area">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">School</label>
                    <input type="text" class="form-control" name="kid-school" id="exampleInputEmail3" placeholder="Kid School">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Class</label>
                    <input type="text" class="form-control" name="kid-class" id="exampleInputEmail3" placeholder="Kid Class">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Gender</label>
                    <select class="form-control" name="kid-gender" id="exampleSelectGender">
                      <option value="" disabled selected>Choose Gender</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-lg-12">
                      <label>Upload Passport</label><br>
                      <input type="file" name="kid-image">
                  </div>
                </div>
              </div>   
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-sm-12 col-md-12 col-md-12">
                      <label for="exampleInputName1">Age</label>
                      <input type="number" class="form-control" name="kid-age" id="exampleInputEmail3" placeholder="Kid Age">
                    </div>
                  </div>
                  </div>  <hr>
                  <h5><b>Parent's / Guardian's Bio data:</b></h5>  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="exampleInputName1">Surname</label>
                        <input type="text" class="form-control" name="surname" id="exampleInputName1" placeholder="Your Surname">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="exampleInputName1">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="exampleInputName1" placeholder="Your Firstname">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="exampleInputName1">Middle Name</label>
                        <input type="text" class="form-control" name="middlename" id="exampleInputName1" placeholder="Your Middle-Name">
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group col-sm-12 col-md-12 col-md-12">
                        <label for="exampleInputName1">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail3" value="{{Auth::user()->email}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group col-sm-12 col-md-12 col-md-12">
                        <label for="exampleInputName1">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="exampleInputEmail3" placeholder="Your Phone number">
                      </div>
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group col-sm-12 col-md-12 col-md-12">
                        <label for="exampleInputName1">Occupation</label>
                        <input type="text" class="form-control" name="occupation" id="exampleInputEmail3" placeholder="Your Occupation">
                      </div>
                    </div>
                    </div> 
                    @if ($payment!=null)
                    <small class="text-muted text-danger">Sorry, form submiited already!</small>
                    @else
                    <button type="submit" class="btn btn-default float-md-right mr-2">Proceed</button> 
                    @endif    
                  
            </form>
          </div>
        </div>
      </div>
          
      @else
         <b class="h6-responsive font-weight-bold text-success my-4">

        <i>Sorry, you are not authorize to register for Kids Code Club Africa</i>   
         </b> 
         <p>You have to make payment <a href="/payment">pay Now!</a></p>
      @endif
      
    </div>
    </section>
    </div>
  <!-- /.content-wrapper -->
@endsection