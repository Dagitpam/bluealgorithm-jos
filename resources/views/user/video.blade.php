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
              <li class="breadcrumb-item active">Videos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        @if (count($videos) > 0)
        <div class="row">
        @foreach ($videos as $video)
        <div class="col-md-4">
            <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{$video->video_link}}" allowfullscreen></iframe>
                          </div>
                        <small><b>Uploaded by:</b>&nbsp;{{$video->name}}</small>
                        <small><b>Instructor:</b>&nbsp;{{$video->course}}</small>
                        <small><b>Date:</b>&nbsp;{{$video->created_at}}</small>
                          
            </div>
        </div>
            
        @endforeach

        </div>
        {{$videos->links()}}
            
        @else
            <p>No recor found</p>
        @endif 
        
    </div>
    </section>
    </div>
  <!-- /.content-wrapper -->
@endsection