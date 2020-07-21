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
                  <li class="breadcrumb-item active">News</li>
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
                    Add News
                </button><br><br>
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">News</h3>
    
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
                  @if (count($news) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>ID</th>
                          <th>News title</th>
                          <th>Date</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      @foreach ($news as $new)

                    <tbody>
                        <tr>
                        <td>{{$new->id}}</td>                      
                         <td>{{$new->news_title}}</td>
                        <td>{{$new->created_at}}</td>
                        <td>
                          <button data-toggle="modal" data-target="#editNews" onclick="transfer({{$new->id}})">
                              <i class="fas fa-edit text-blue"></i>
                            </button>
                            <button data-toggle="modal" data-target="#delete" onclick="transferDel({{$new->id}})">
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
                {{$news->links()}}
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
                  <h4 class="modal-title"><p class="h4 mb-4">Add News</p> </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
            <form role="form" method="POST" class="border border-light p-5" action="/add-news" id="news-form" enctype="multipart/form-data">
                @csrf 
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">News title<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" name="news-title" id="exampleInputEmail1" placeholder="Enter News title">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">News Body<sup class="text-danger">*</sup></label>
                    <textarea name="news-body" id="" cols="15" rows="5" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputFile">File input <span class="text-muted">(optional)</span></label>
                            <input type="file" name="image" class="form-control" id="exampleInputFile">
                        </div>
                  
                    
                </div>
                <!-- /.card-body -->
                </form>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success" form="news-form">Add</button>
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
         <h5>Are you sure delete News?</h5>
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
 <script>
  function transfer(a){
    var a;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
            url:"/editNews",
            method: "POST",
            cache: false,
            data: {id: a},
            success:function(result){
               //  alert(result.msg);
               document.getElementById('id').value = result.id;
                document.getElementById('title').value = result.title;
                document.getElementById('body').value = result.body;
            },
            error:function(){
                alert('fuck');
            }
        });
};
function transferDel(a){
    var a;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
            url:"/getNewsId",
            method: "POST",
            cache: false,
            data: {id: a},
            success:function(result){
               //  alert(result.msg);
               document.getElementById('newsid').value = result.id;
                
            },
            error:function(){
                alert('fuck');
            }
        });
};
</script> 
<div class="modal fade" id="editNews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
 aria-hidden="true">

 <!-- Change class .modal-sm to change the size of the modal -->
 <div class="modal-dialog modal-lg" role="document">

   <div class="modal-content">
       <div class="modal-heading">
           <h3>Edit and Update News</h3>
         </div>
     <div class="modal-body">
        <form role="form" method="POST" class="border border-light p-5" action="/update-news" id="update-news" enctype="multipart/form-data">
          @csrf 
          <div class="card-body">
              <input type="hidden" id="id" name="id">
              <div class="form-group">
              <label for="exampleInputEmail1">News title<sup class="text-danger">*</sup></label>
              <input type="text" class="form-control" name="news-title" id="title">
              </div>
              <div class="form-group">
              <label for="exampleInputPassword1">News Body<sup class="text-danger">*</sup></label>
              <textarea name="news-body" id="body" cols="15" rows="5" class="form-control"></textarea>
              </div>
              <div class="form-group">
              <label for="exampleInputFile">File input <span class="text-muted">(optional)</span></label>
                  <input type="file" name="edi-image" class="form-control" id="exampleInputFile">
              </div>
              
          </div>
          <!-- /.card-body -->
          </form>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        <form role="form" method="POST" class="border border-light p-5" action="/update-news" id="update-news" enctype="multipart/form-data"></form>
       <button class="btn btn-default btn-sm" type="submit" form="update-news">Update</button>
         </div>
         </div>
       </div>
     </div>
@endsection

