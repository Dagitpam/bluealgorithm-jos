@extends('layouts.other_app')
@section('content')
<section>
  <div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
         <!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('store-application') }}" method="post">
  @csrf
  <p class="h4 mb-4">Application</p>

  <div class="form-row">
      <div class="col-md-6">
          <div class="form-group" style="display: flex; flex-direction: row;">
          <!-- First name -->
          <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-user"></i></button>
          <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="First name" style="border-radius: 0px;">
          @error('firstname')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group" style="display: flex; flex-direction: row;">
          <!-- Middle name -->
          <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-user"></i></button>
          <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus placeholder="Last name" style="border-radius: 0px;">
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          </div>
      </div>
  </div>

  <div class="form-row">
      <div class="col-md-6">
          <!-- Last name -->
          <div class="form-group" style="display: flex; flex-direction: row;">
              <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-user"></i></button>
              <input id="phone" type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autofocus placeholder="Phone number" style="border-radius: 0px;">

          </div>
                  </div>
      <div class="col-md-6">
          <!-- Email Address-->
          <div class="form-group" style="display: flex; flex-direction: row;">
              <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="far fa-envelope"></i></button>
              <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" style="border-radius: 0px;">
              @error('email')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
          </div>

      </div>
  </div>
 
   <!-- Residential area -->
   <div class="form-group" style="display: flex; flex-direction: row;">
    <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-map-marker-alt"></i></button>
    <input type="text" id="address" class="form-control form-control-sm @error('address') is-invalid @enderror" placeholder="Your address" name="address" value="{{ old('residArea') }}" required style="border-radius: 0px;">
        @error('residArea')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
</div>
<div class="form-group " style="display: flex; flex-direction: row;">
  <!-- gender -->
  <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-user-friends"></i></button>
     <select class="form-control form-control-sm" name="gender" id="gender">
        <option value="" disabled selected>---Your Gender---</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</div>
  <!-- row begins -->
  <div class="row">

    <div class="col-md-6">
        <div class="form-group" style="display: flex; flex-direction: row;">
            <!--Course  -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-book-open"></i></button>
            <select class="form-control form-control-sm" name="course" id="course">
                      <option value="" disabled selected>---Choose course--</option>
                      <option value="Front End">Web development</option>
                    
                      <option value="Mobile">Mobile development</option>
                   
             </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group" style="display: flex; flex-direction: row;">
        <!-- First name -->
        <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="far fa-money-bill-alt"></i></button>
        <input type="text" id="" name="occupation" class="form-control form-control-sm" placeholder="Your Occupation">
    </div>
        </div>
    </div>
    
  
 

  <!-- Sign up button -->
  <button class="btn btn-success my-4 btn-sm" type="submit">Apply</button>

  <!-- Social register -->

</form>
<!-- Default form register -->
         </div>
      </div>
  </div>
</div>
<!-- Side Modal Top Right -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>




</script>
</section>
@endsection
