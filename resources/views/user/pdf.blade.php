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
              <li class="breadcrumb-item"><a href="/user-index">Home</a></li>
              <li class="breadcrumb-item active">PDF Files</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        @if (count($pdfs) > 0)
        <div class="row">
        @foreach ($pdfs as $pdf)
        <div class="col-md-2">
            <div class="card">
                <p><a href="/storage/file_folder/{{$pdf->file}}">
                  {{$pdf->filename}}&nbsp;
                  <i class="fa fa-download">
                  </i></a></p>
              <img src="{{asset('images/pdf2.jpeg')}}" alt="" width="100%" height="100px">    
                <small><b>Instructor:</b>&nbsp;{{$pdf->course}}</small>
                <small><b>Date:</b>&nbsp;{{$pdf->created_at}}</small> 

            </div>
        </div>
            
        @endforeach

        </div>
        {{$pdfs->links()}}
            
        @else
            <p>No recor found</p>
        @endif
 
        
        </div>
    </section>
    </div>
  <!-- /.content-wrapper -->
@endsection