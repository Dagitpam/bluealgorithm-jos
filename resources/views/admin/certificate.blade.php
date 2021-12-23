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
                  <li class="breadcrumb-item active">Certificate</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-lg">
                    Add Certificate
                </button><br><br>
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Certificate</h3>
    
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
                  @if (count($certificates) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Course</th>
                          <th>Date</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      @foreach ($certificates as $certificate)

                    <tbody>
                        <tr>
                        <td>{{$certificate->cert_id}}</td>                      
                         <td>{{$certificate->names}}</td>
                         <td>{{$certificate->course}}</td>
                        <td>{{$certificate->created_at}}</td>
                        <td>
                        <button data-toggle="modal" data-target="#editNews{{$certificate->id}}">
                              <i class="fas fa-edit text-blue"></i>
                            </button>
                            <button data-toggle="modal" data-target="#delete{{$certificate->id}}">
                                <i class="fas fa-eject text-red"></i>
                              </button>
                        </td>
                        </tr>
                    </tbody>
                                            
                      @endforeach
                    </table>
    
                  @else
                      <p>No record found</p>
                  @endif
                </div>
                <!-- /.card-body -->
                {{$certificates->links()}}
                </div>
                <!-- /.card -->
            </div>
            </div>
            <!-- /.row -->
        </div>
        </section>
        </div>
      <!-- /.content-wrapper -->
      {{-- Modals --}}
 <!-- Edit modal -->
 <!-- /..Edit -->
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><p class="h4 mb-4">Add Certificate</p> </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
            <form role="form" method="POST" class="border border-light p-5" action="/add-cert" id="certificate-form" enctype="multipart/form-data">
                @csrf 
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Names<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" name="names" id="exampleInputEmail1" placeholder="Enter Fullname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course<sup class="text-danger">*</sup></label>
                      <select name="course" id="course" class="form-control">
                        <option disabled selected>Choose course</option>
                        <option value="Animation">Animation</option>
                        <option value="Robotics">Robotics</option>
                        <option value="LAMP Stack">LAMP Stack</option>
                        <option value="LARAVEL Framework">LARAVEL Framework</option>
                      </select>
                      </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Passport</label>
                            <input type="file" name="image" class="form-control" id="exampleInputFile">
                        </div>
                  
                    
                </div>
                <!-- /.card-body -->
                </form>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success" form="certificate-form">Add</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- Delete news modal-->
   <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">

   <!-- Change class .modal-sm to change the size of the modal -->
   <div class="modal-dialog modal-sm" role="document">


     <div class="modal-content">
       <div class="modal-body">
          <form action="/deleteNews" method="post" id="deleteNews">
            @csrf
          <input name="newsid" id="newsid" type="hidden">
          </form>
         <h5>Are you sure delete Certificate?</h5>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
         <button type="submit" type="submit" class="btn btn-danger btn-sm" form="deleteNews">Delete</button>
       </div>
     </div>
   </div>
 </div>
<!-- Delete News modal -->
          <!-- /.modal -->
 {{-- SCript --}}
@endsection

