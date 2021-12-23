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
                  <li class="breadcrumb-item active">Registered Members</li>
                  
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
                    <h3 class="card-title">Registered members</h3><br>
                    <button onclick="exportTableToExcel('tblData','Registered members')" class="btn btn-success btn-sm">Download Excel</button>
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
                  @if (count($members) > 0)
                  <table class="table table-hover">
                      <thead>
                          <tr>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Phone number</th>
                          <th>Location</th>
                          <th>Gender</th>
                          <th>Course</th>
                          <!--<th>Amount</th>-->
                          <th>Date</th>
                          <th>Action</th>
                          </tr>
                      </thead>

                      <tbody>
                        @foreach ($members as $member)
                          <tr>
                            <td>{{$member->fName}}&nbsp;{{$member->mName}}&nbsp;{{$member->lName}}</td>                      
                            <td>{{$member->email}}</td>
                            <td>{{$member->phone}}</td>
                            <td>{{$member->residArea}}</td>
                            <td>{{$member->gender}}</td>
                            <td>{{$member->course}}</td>
                            <!--<td>{{$member->amount}}</td>-->
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
          <form action="/deleteUser" method="post" id="deleteUser{{$member->id}}">
            @csrf
          <input name="id" id="paymentid" type="hidden" value="{{$member->id}}">
          </form>
         <h5>Are you sure delete user?</h5>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
         <button type="submit" type="submit" class="btn btn-danger btn-sm" form="deleteUser{{$member->id}}">Delete</button>
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
{{$members->links()}}
</div>
<!-- /.card -->
</div>
</div>
            <!-- /.row -->
        </div>
        </section>
        </div>
        <table class="table table-hover" id="tblData" style="display: none">
          <thead>
              <tr>
              
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Location</th>
                <th>Gender</th>
                <th>Course</th>
                <!--<th>Amount</th>-->
                <th>Date</th>
        
              </tr>
          </thead>
      
          <tbody>
            @foreach ($members as $member)
            {{-- @php $count = method_exists($applications, 'links') ? ($applications->currentpage()-1) * $applications->perpage() + $loop->index + 1 : $count + 1; @endphp --}}
              <tr>
                <td>{{$member->fName}}&nbsp;{{$member->mName}}&nbsp;{{$member->lName}}</td>                      
                <td>{{$member->email}}</td>
                <td>{{$member->phone}}</td>
                <td>{{$member->residArea}}</td>
                <td>{{$member->gender}}</td>
                <td>{{$member->course}}</td>
                <td>{{$member->amount}}</td>
                 <td>{{ date('j, F, Y', strtotime($member->created_at))}}</td>
          
      </tr>
      @endforeach
      </tbody>
      </table>
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
             td = tr[i].getElementsByTagName("td")[1];
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

  