@extends('layouts.other_app')
@section('content')
<section>
  <div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
         <!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('register') }}" method="post">
  @csrf
  <p class="h4 mb-4">Sign up</p>

  <div class="form-row">
      <div class="col-md-6">
          <div class="form-group" style="display: flex; flex-direction: row;">
          <!-- First name -->
          <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-user"></i></button>
          <input id="fName" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="fName" value="{{ old('fName') }}" required autocomplete="name" autofocus placeholder="First name" style="border-radius: 0px;">
          @error('fName')
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
          <input id="mName" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="mName" value="{{ old('mName') }}" required autocomplete="name" autofocus placeholder="Middle name" style="border-radius: 0px;">
          @error('mName')
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
              <input id="lName" type="text" class="form-control form-control-sm @error('lName') is-invalid @enderror" name="lName" value="{{ old('lName') }}" required autocomplete="lName" autofocus placeholder="Last name" style="border-radius: 0px;">

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
   <!-- Phone number -->
   <div class="form-group" style="display: flex; flex-direction: row;">
      <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-phone"></i></button>
      <input type="text" id="phone" class="form-control form-control-sm @error('phone') is-invalid @enderror" placeholder="Phone number" name="phone" value="{{ old('phone') }}" required autocomplete="phone" style="border-radius: 0px;">
          @error('phone')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
  </div>
   <!-- Residential area -->
   <div class="form-group" style="display: flex; flex-direction: row;">
    <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-map-marker-alt"></i></button>
    <input type="text" id="residArea" class="form-control form-control-sm @error('residArea') is-invalid @enderror" placeholder="Residential Area" name="residArea" value="{{ old('residArea') }}" required autocomplete="phone" style="border-radius: 0px;">
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
        <option value="" disabled selected>Your Gender</option>
        <option>Male</option>
        <option>Female</option>
    </select>
</div>
  <!-- row begins -->
  <div class="row">

    <div class="col-md-12">
        <div class="form-group" style="display: flex; flex-direction: row;">
            <!--Course  -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-book-open"></i></button>
            <select class="form-control form-control-sm" name="course" id="course" onChange="prices()">
                      <option value="" disabled selected>Choose course</option>
                      <option value="Front End">Front End</option>
                      <option value="Lamp Stack">Lamp Stack</option>
                      <option value="Laravel Framework">Laravel Framework</option>
                      <option value="Mern Stack">Mern Stack</option>
                      <option value="Mobile">Mobile</option>
                      <option value="Networking">Networking</option>
                      <option value="Cyber Security">Cyber Security</option>
                      <option value="Ui/Ux">Ui/Ux</option>
                      <option value="Graphic Design">Graphic Design</option>
                      <option value="Gaming">Gaming</option>
                      <option value="Python Programing">Python Programing</option>
                      
             </select>
        </div>
        </div>
        <div >
        <div class="form-group" style="display: flex; flex-direction: row;">
        <!-- First name -->
        {{-- <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="far fa-money-bill-alt"></i></button> --}}
        <input type="hidden"  id="amount" name="amount" class="form-control form-control-sm" placeholder="amount">
    </div>
        </div>
    </div>
    <!-- row end -->
  <!-- Password --> 
  <div class="form-group" style="display: flex; flex-direction: row;">
      <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-key"></i></button>
      <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" style="border-radius: 0px;">
  {{-- <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted">
      At least 8 characters and 1 digit
  </small> --}}
  </div>
  
  <!-- Password -->
  <div class="form-group" style="display: flex; flex-direction: row;">
      <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-key"></i></button>
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Comfirm-password" style="border-radius: 0px;">

  </div>
  
 

  <!-- Sign up button -->
  <button class="btn btn-success my-4 btn-sm" type="submit">Sign in</button>

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

//   $("defaultInline2").click(function(){
//     $("p").html("Hello <b>world!</b>");
//   });
// });
// $("#defaultInline2").click(function(){ 
//   myFunction()
  
//   $("p").html("Hello <b>world</b>!")
//   ;
  
//    });
function prices(){
  var course = document.getElementById("course").value;
  var amount = document.getElementById("amount").value;
  document.getElementById("amount").style.border="1px solid green";
  

if (course == "Front End") {
  document.getElementById("amount").value = 70000;
} else if(course == "Mobile") {
  document.getElementById("amount").value = 1010000;
}
else if(course == "Networking") {
  document.getElementById("amount").value = 65000;
}
else if(course == "Lamp Stack") {
  document.getElementById("amount").value = 85000;
}

else if(course == "Mern Stack") {
  document.getElementById("amount").value = 85000;
}
else if(course == "Cyber Security") {
  document.getElementById("amount").value = 100000;
}
else if(course == "Ui/Ux") {
  document.getElementById("amount").value = 70000;
}
// else if(course == "Graphic Design") {
//   document.getElementById("amount").value = 700000;
// }
else if(course == "Graphic Design") {
  document.getElementById("amount").value = 700000;
}
else if(course == "Gaming") {
  document.getElementById("amount").value = 1200000;
}
else if(course == "Python Programing") {
  document.getElementById("amount").value = 1000000;
}
}


</script>
</section>
@endsection
