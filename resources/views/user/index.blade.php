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
                  <li class="breadcrumb-item"><a href="user-index">Home</a></li>
                  <li class="breadcrumb-item active">User Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
              @if (Auth::user()->transStatus == "success")
                <!-- /.card-header -->
              
                  @if (count($payments) > 0)
                    <!-- Small boxes (Stat box) -->

            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>44</h3>  
                    <p>Receipt</p>
                  </div>
                  <div class="icon">
                    <i class="icon ion-ios-people"></i>
                  </div>
                  <a href="/receipt" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                        <h3>32</h3>   
                    <p>PDF Files</p>
                  </div>
                  <div class="icon">
                    <i class="icon ion-ios-browsers"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                  <h3>54</h3> 
    
                    <p>Video Tutorial</p>
                  </div>
                  <div class="icon">
                    <i class="icon ion-chatbubble"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>1</h3>
    
                    <p>My account</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
    
                  @else
                      <p>No record found</p>
                  @endif
                
                <!-- /.card-body -->  
              @else
              <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Congratulations!</h4>
                <p>You've successfully registered with Blue Algorithm Technologies Limited...</p>
                <hr>
                <p class="mb-0">
                    
                  <h3>You're yet to make payment for the enrolment. Pay With
                    <a class="btn btn-success btn-sm" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      Mobile transfer
                    </a> or via a secured paystack
                    <button type="submit" class="btn btn-success btn-sm" form="paystackForm">Pastack</button></h3>  
                      <!-- Collapsible element -->
              <div class="collapse" id="collapseExample">
                <div class="mt-3">
                  <form class="text-center border border-light p-5" action="/user-deposite" method="POST">
                    @csrf
                    <span class="h4 mb-4">Mobile transfer to this account</span><br>
                    <em class="h4 mb-4">Account Number: 1210575584</em><br>
                    <em class="h4 mb-4">Account Name: BLUE ALGORITHM TECHNOLOGIES LIMITED</em><br>
                    <em class="h4 mb-4">Bank: Access</em><hr>
                    <p class="text-danger">Please, make sure you deposite first Before submitting the form!</p>
      
      
                    <!-- Name -->
                    <input type="text" name="account_name" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Account name">
      
                    <!-- amount -->
                  <input type="text" name="amount" id="defaultSubscriptionFormEmail" class="form-control mb-4" value="{{ Auth::user()->amount}}">
                    <select class="mdb-select md-form form-control mb-4" name="method_of_deposite">
                      <option value="" disabled selected>Method of deposite</option>
                      <option value="Cash deposite">Cash deposite</option>
                      <option value="Mobile Banking">Mobile Banking</option>
                    {{-- </select><input type="text" name="amount" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Amount"> --}}
                    <!-- Phone number -->
                    <input type="text" name="phone_number" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="phone number">
                    <!-- Sign in button -->
                    <button class="btn btn-success btn-md" type="submit">Submit</button>
                  </form>
                </div>
                </div>
                <!-- / Collapsible element -->
                   
        </p>
              </div>  
              @endif
            
        </div>
        </section>
        
        </div>
      <!-- /.content-wrapper -->
     <!-- Default form subscription -->
     <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form" id="paystackForm">
      @csrf
      <div class="row">
          <div class="col-md-12">
          <input type="hidden" name="email" value="{{Auth::User()->email}}"> {{-- required --}}
            <input type="hidden" name="orderID" value="345">
            {{-- required in kobo --}}
            <input type="hidden" name="amount" value="{{Auth::User()->amount}}">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">   {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}            
             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
          </div>
        </div>
  </form>
  
@endsection