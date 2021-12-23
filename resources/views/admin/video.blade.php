@extends('layouts.admin_app')
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
                  <li class="breadcrumb-item"><a href="admin-index">Home</a></li>
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
            <div class="row">
            <div class="col-12">
                <button type="button" data-toggle="modal" data-target="#modalAddUser" class="btn btn-md btn-success">Add</button>
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Videos</h3>
    
                    <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  @if (count($videos) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>ID</th>
                          <th>Link</th>
                          <th>Comment</th>
                          
                          <th>Action</th>
                          </tr>
                      </thead>
                      @foreach ($videos as $video)

                    <tbody>
                        <tr>
                        <td>{{$video->id}}</td>                      
                         <td>{{$video->video_link}}</td>
                        <td>{{$video->comment}}</td>
                        <td>
                    
                    <button data-toggle="modal" data-target="#delete{{$video->id}}">
                        <i class="fas fa-eject text-red"></i>
                        </button>
                        </td>
                        <!-- Delete news modal-->
                      <div class="modal fade" id="delete{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">

                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-sm" role="document">


                        <div class="modal-content">
                          <div class="modal-body">
                              <form action="/deleteVideo" method="post" id="deleteUser">
                                @csrf
                              <input name="videoId" id="id" type="hidden" value="{{$video->id}}">
                              <h5>Are you sure delete Video?</h5>
                              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" type="submit" class="btn btn-danger btn-sm pull-right">Delete</button>
                              </form>
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- Delete News modal -->
                        </tr>
                    </tbody>
                                            
                      @endforeach
                    </table>
    
                  @else
                      <p>No record found</p>
                  @endif
                </div>
                <!-- /.card-body -->
                {{$videos->links()}}
                </div>
                <!-- /.card -->
            </div>
            </div>
            <!-- /.row -->
        </div>
        </section>
        </div>
      <!-- /.content-wrapper -->
      <div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Upload Video</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body mx-3">
  <form method="POST" action="/addVideo" role="form" id="videoForm">
    @csrf
         <div class="form-group">
          <label data-error="wrong" data-success="right" for="form3">Video link</label>
            <input type="text" id="form3" name="link" class="form-control validate">
        </div>
        <div class="form-group">
          <label data-error="wrong" data-success="right" for="form2">Course</label>
          <select name="course" id="" class="form-control">
            <option disabled selected>Choose course</option>
            <option value="Front End">Front End</option>
            <option value="Lamp Stack">Lamp Stack</option>
            <option value="Laravel Framework">Laravel Framework</option>
            <option value="Mern Stack">Mern Stack</option>
            <option value="Mobile">Mobile</option>
            <option value="Networking">Networking</option>
            <option value="Cyber Security">Cyber Security</option>
          </select>
        </div>
        <div class="form-group">
          <label data-error="wrong" data-success="right" for="form2">Comment</label>
            <textarea name="comment" class="form-control"></textarea>
            
        </div>
         
            
      
  </form>

</div>
<div class="modal-footer d-flex justify-content-center">
<button class="btn btn-success" type="submit" form="videoForm">Add<i class="fas fa-paper-plane-o ml-1"></i></button>
</div>
</div>
</div>
</div>
@endsection
