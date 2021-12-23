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
            <button type="button" class="btn btn-sm btn-success" id="btnPrint">
                Print Acknowledgement letter
             </button>
             <button class="btn btn-sm btn-info" onclick="generatePDF()">Download as PDF</button>
                  <div>
                    <div style="margin-top: 90px;" id="printnotready">
                      <div id="printJS-form" class="" style="width: 793px; height: 1123px; margin: 0 auto;">
                          <div style="width: 793px; height: 600px; border: 2px solid black; border-style: dashed;" id="invoice">
                            <img src="{{asset('template/img/logo4.png')}}" alt="" width="170px" height="100px" style="margin-left: 40%; margin-top: 30px;">
                          <div style="margin-left: 30px">
                            <div style="width: 100%; height: 100px; display: flex; align-items: center; justify-content: center; flex-direction: column;">
                              <i style="font-size: 30px; font-style: normal; font-family: Times New Roman, Times, serif; font-weight: bold;">BLUE ALGORITHM TECHNOLOGIES LIMITED</i>
                              <i style="font-size: 15px; font-style: normal; font-family: Times New Roman, Times, serif; font-weight: bold;">KALWA PLAZA 1ST FLOOR, ZARMAGANDA JUNCTION OPPOSITE</i>
                              <i style="font-size: 15px; font-style: normal; font-family: Times New Roman, Times, serif; font-weight: bold;">NNPC FILLING STATION JOS, PLATEAU STATE</i>
                              <i style="font-size: 15px; font-style: normal; font-family: Times New Roman, Times, serif; font-weight: bold;">+234 8075563000 +234 8115190900</i>
                              <i style="font-size: 15px; font-style: normal; font-family: Times New Roman, Times, serif; font-weight: bold;">www.bluealgorithmtechnologies.com</i>
                          </div>
                          <br><br><br>
                          <i style="font-size: 15px; font-style: normal; font-family: Times New Roman, Times, serif; font-weight: bold; background:blue;color:white;"><center style="background: blue">RECEIPT</center></i>
                          <br>
                          <div class="" style="width: 100%; display: flex; flex-direction: column; margin: 0 auto;">
                            <i style="font-size: 12px; font-style: normal; font-weight: bold;"><center>BILL TO</center></i>
                            <table style="border: 1px solid black">  
                              <tr>
                                    <td><i style="font-size: 12px; font-style: normal;">Name:</i></td>
                              <td><i id="matnumber" style="font-size: 12px; font-style: normal; font-weight: bold;">{{$details[0]['fName']}} {{$details[0]['mName']}} {{$details[0]['lName']}}</i></td>
                                </tr>
                                <tr>
                                    <td><i style="font-size: 12px; font-style: normal;">Phone Number:</i></td>
                                    <td><i id="studentname" style="font-size: 12px; font-style: normal; font-weight: bold;">{{$details[0]['phone']}}</i></td>
                                </tr>
                                <tr>
                                    <td><i style="font-size: 12px; font-style: normal;">Course:</i></td>
                                    <td><i id="class" style="font-size: 12px; font-style: normal; font-weight: bold;">{{$details[0]['course']}}</i></td>
                                </tr>
                                <tr>
                                    <td><i style="font-size: 12px; font-style: normal;">Amount:</i></td>
                                    <td><i id="session" style="font-size: 12px; font-style: normal; font-weight: bold;">N{{$details[0]['amount']}}</i></td>
                                </tr>
                                <tr>
                                  <td><i style="font-size: 12px; font-style: normal;">Bill Number:</i></td>
                                  <td><i id="session" style="font-size: 12px; font-style: normal; font-weight: bold;">Bluealgorithmtechnologies{{$details[0]['id']}}</i></td>
                              </tr>
                            </table>
                        </div>
                        </div> 
                          </div>
                      </div>
                    </div>
                  </div>
            
        </div>
        </section>
        
        </div>
@endsection