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
                    <li class="breadcrumb-item active">Applicants</li>
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
                      <h3 class="card-title">Participants</h3><br>
                    <button onclick="exportTableToExcel('tblData','Applicants info')" class="btn btn-success btn-sm">Download Excel</button>
                      <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                          <input id="myInput" onkeyup="myFunction()" type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                          <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                      </div>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    @if (count($applications) > 0)
                    @php $count = method_exists($applications, 'links') ? 1 : 0; @endphp
                    <table class="table table-hover" id="tData">
                        <thead>
                            <tr>
                              <th>Id</th>
                            <th>Firts name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Location</th>
                            <th>Gender</th>
                            <th>Date</th>
                            <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                          @foreach ($applications as $member)
                          
                            <tr>
                            <td>{{$member->id}}</td>
                            <td>{{$member->firstname}}</td> 
                            <td>{{$member->lastname}}</td>                    
                              <td>{{$member->email}}</td>
                              <td>{{$member->phone}}</td>
                              <td>{{$member->address}}</td>
                              <td>{{$member->gender}}</td>
                              <td>{{ date('j, F, Y', strtotime($member->created_at))}}</td>
                            <td>
                            <button type="button" data-toggle="modal" data-target="#delete{{$member->id}}">
                                    <i class="fas fa-eject text-red"></i>
                                </button>
                            </td>
                            <!-- Central Modal Small -->
                          <div class="modal fade" id="delete{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-sm" role="document">


      <div class="modal-content">
        <div class="modal-body">
            <form action="/deleteUser" method="post" id="deleteUser">
              @csrf
            <input name="paymentid" id="paymentid" type="hidden">
            </form>
          <h5>Are you sure delete user?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" type="submit" class="btn btn-danger btn-sm" form="deleteUser">Delete</button>
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

    <table class="table table-hover" id="tblData" >
      <thead>
          <tr>
          
          <th>Firts name</th>
          <th>Last name</th>
          <th>Email</th>
          <th>Phone number</th>
          <th>Location</th>
          <th>Gender</th>
          <th>Course</th>
    
          </tr>
      </thead>

      <tbody>
        @foreach ($applications as $member)
        {{-- @php $count = method_exists($applications, 'links') ? ($applications->currentpage()-1) * $applications->perpage() + $loop->index + 1 : $count + 1; @endphp --}}
          <tr>
        
          <td>{{$member->firstname}}</td> 
          <td>{{$member->lastname}}</td>                    
            <td>{{$member->email}}</td>
            <td>{{$member->phone}}</td>
            <td>{{$member->address}}</td>
            <td>{{$member->gender}}</td>
            <td>{{$member->course}}</td>
      
  </tr>
  @endforeach
  </tbody>
  </table>
  </div>
  <!-- /.card-body -->
  {{-- {{$applications->links()}} --}}
  </div>
  <!-- /.card -->
  </div>
  </div>
              <!-- /.row -->
          </div>
          </section>
          </div>
        <!-- /.content-wrapper -->
        <script>
      function exportTableToExcel(tableID, filename = ''){
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
        
        // Specify file name
        filename = filename?filename+'.xls':'excel_data.xls';
        
        // Create download link element
        downloadLink = document.createElement("a");
        
        document.body.appendChild(downloadLink);
        
        if(navigator.msSaveOrOpenBlob){
            var blob = new Blob(['\ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob( blob, filename);
        }else{
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
        
            // Setting the file name
            downloadLink.download = filename;
            
            //triggering the function
            downloadLink.click();
        }
      }
      // filter kids table
      function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("tData");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }
      </script> 
  @endsection

    