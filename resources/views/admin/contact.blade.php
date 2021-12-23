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
                  <li class="breadcrumb-item active">Contact</li>
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
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contact</h3>
    
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
                  @if (count($contacts) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>subject</th>
                          <th>Message</th>
                          <th>Action</th>
                          </tr>
                      </thead>

                      <tbody>
                        @foreach ($contacts as $contact)
                          <tr>
                            <td>{{$contact->name}}</td>                      
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
                          <td>
                          <button type="button" data-toggle="modal" data-target="#delete{{$contact->id}}">
                                  <i class="fas fa-eject text-red"></i>
                              </button>
                          </td>
                          <!-- Central Modal Small -->
                        <div class="modal fade" id="delete{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">

   <!-- Change class .modal-sm to change the size of the modal -->
   <div class="modal-dialog modal-sm" role="document">


     <div class="modal-content">
       <div class="modal-body">
          <form action="/deleteContact" method="post" id="deleteContact">
            @csrf
          <input name="contactId" id="contactId" type="hidden">
          </form>
         <h5>Are you sure delete contact?</h5>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
         <button type="submit" type="submit" class="btn btn-danger btn-sm" form="deleteContact">Delete</button>
       </div>
     </div>
   </div>
 </div>
        </tr>
          @endforeach
      </tbody>
    </table>

  @else
      <p>No record found</p>
  @endif
</div>
<!-- /.card-body -->
{{$contacts->links()}}
</div>
<!-- /.card -->
</div>
</div>
            <!-- /.row -->
        </div>
        </section>
        </div>
      <!-- /.content-wrapper -->
@endsection

  