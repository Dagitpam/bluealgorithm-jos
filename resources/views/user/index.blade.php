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
                <div class="card-body table-responsive p-0">
                  @if (count($payments) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>ID</th>
                          <th>Date</th>
                          <th>Email</th>
                          <th>Transaction Id</th>
                          <th>Transaction status</th>
                          <td>Amount</td>
                          <td>Action</td>
                          </tr>
                      </thead>

                      <tbody>
                        @foreach ($payments as $payment)
                          <tr>
                            <td>{{$payment->id}}</td> 
                            <td>{{$payment->created_at}}</td>                      
                            <td>{{$payment->email}}</td>
                            <td>{{$payment->transId}}</td>
                            <td>{{$payment->transStatus}}</td>
                            <td>{{$payment->amount}}</td> 
                          <td>
                          <button type="button" data-toggle="modal" data-target="#delete" onclick="transfer({{$payment->id}})">
                                  <i class="fas fa-eject text-red"></i>
                              </button>
                              <button type="button" data-toggle="modal" data-target="#delete" onclick="transfer({{$payment->id}})">
                                <i class="fas fa-eye text-blue"></i>
                            </button>
                          </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
    
                  @else
                      <p>No record found</p>
                  @endif
                </div>
                <!-- /.card-body -->  
              @else
              <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Congratulations!</h4>
                <p>You've successfully registered with Blue Algorithm Technology Limited...</p>
                <hr>
                <p class="mb-0">
                    
                    You're yet to make payment for the enrolment
                    <button type="submit" type="submit" class="btn btn-default btn-sm" form="paystackForm">Proceed</button>
                   
        </p>
              </div>  
              @endif
            
        </div>
         <!-- Default form subscription -->
         <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form" id="paystackForm">
          @csrf
          <div class="row">
              <div class="col-md-12">
              <input type="hidden" name="email" value="{{Auth::User()->email}}"> {{-- required --}}
                <input type="hidden" name="orderID" value="345">
               <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                <input type="hidden" name="quantity" value="3">
                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">   {{-- required --}}
                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}            
                 <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
              </div>
            </div>
      </form>
        </section>
        </div>
      <!-- /.content-wrapper -->
@endsection