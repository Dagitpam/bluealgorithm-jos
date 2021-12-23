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
                  <li class="breadcrumb-item active">Deposite</li>
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
                    <h3 class="card-title">Deposite</h3>
    
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
                  @if (count($deposites) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>Account Name</th>
                          <th>Email</th>
                          <th>Phone number</th>
                          <th>Amount</th>
                          <th>Deposite Type</th>
                          <th>Date</th>
                          <th>Action</th>
                          </tr>
                      </thead>

                      <tbody>
                        @foreach ($deposites as $deposite)
                          <tr>
                            <td>{{$deposite->account_name}}</td>                      
                            <td>{{$deposite->email}}</td>
                            <td>{{$deposite->phone_number}}</td>
                            <td>{{$deposite->amount}}</td>
                            <td>{{$deposite->method_of_deposite}}</td>
                            <th>{{$deposite->created_at}}</th>
                          <td>
                          <button type="button" data-toggle="modal" data-target="#delete{{$deposite->id}}">
                                  <i class="fas fa-eject text-red"></i>
                              </button>
                              <button type="button" data-toggle="modal" data-target="#approve{{$deposite->id}}">
                                <i class="fas fa-eye text-blue"></i>
                            </button>
                          </td>
                          <!-- Central Modal Small  delete deposite-->
                        <div class="modal fade" id="delete{{$deposite->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">

            <!-- Change class .modal-sm to change the size of the modal -->
            <div class="modal-dialog modal-sm" role="document">


                <div class="modal-content">
                <div class="modal-body">
                    <form action="/delete_deposite" method="post" id="delete_deposite">
                        @csrf
                    <input name="deposite_id" type="hidden">
                    </form>
                    <h5>Are you sure you want to delete deposite?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">cancel</button>
                    <button type="submit" type="submit" class="btn btn-danger btn-sm" form="delete_deposite">delete</button>
                </div>
                </div>
            </div>
            </div>
        <!-- Central Modal Small  delete deposite-->
        <div class="modal fade" id="approve{{$deposite->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">

<!-- Change class .modal-sm to change the size of the modal -->
<div class="modal-dialog modal-sm" role="document">


    <div class="modal-content">
    <div class="modal-body">
        <form action="/approve_deposite" method="post" id="approve_deposite">
            @csrf
        <input name="deposite_id" value="{{$deposite->email}}"  type="text">
        </form>
        <h5>Are you sure you want to approve deposite?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">cancel</button>
        <button type="submit" type="submit" class="btn btn-danger btn-sm" form="approve_deposite">approve</button>
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
{{$deposites->links()}}
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

  