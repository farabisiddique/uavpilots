@extends('layouts.admin.admin_layout')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  
 <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" defer></script> 
 <script src="{{ asset('js/datatable.js') }}"></script>
 <script src="{{ asset('js/approveordeclineUsersAjax.js') }}"></script>


@section('content')



<!-- ############ Content START-->
<div id="content" class="flex ">
  <!-- ############ Main START-->
  <div>
    <div class="page-hero page-container " id="page-hero">
      <div class="padding d-flex">
        <div class="page-title">
          <h2 class="text-md text-highlight">Dashboard</h2>
          <small class="text-muted">Welcome aboard,
            <!-- <strong>Jacqueline Reid</strong> -->
            <strong>{{ $adminDetails->name }}</strong>

             
          </small>
        </div>
        <div class="flex"></div>

      </div>
    </div>
    <div class="page-content page-container" id="page-content">
      <div class="padding">

        

      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Location</th>
                <!-- <th>Country</th>
                <th>State</th> -->
                <th>Industry</th>
                <th>Description</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Youtube</th>
                <th>Instagram</th>
                <th>Username</th>
                <th>Registration Date</th>
                <th>Action</th>
                <!-- <th>Salary</th> -->
            </tr>
        </thead>
        <tbody>
   
@foreach ($PendingUsers as $PendingUser)



            <tr id="trid{{ $PendingUser->id }}">
                <td>{{ $PendingUser->first_name }} {{ $PendingUser->last_name }}</td>
                <td>{{ $PendingUser->email }}</td>
                <td>{{ $PendingUser->state }},{{ $PendingUser->country }}</td>
                
                <!-- <td>{{ $PendingUser->country }}</td>
                <td>{{ $PendingUser->state }}</td> -->
                <td>{{ $PendingUser->industry }}</td>
                <td>{{ $PendingUser->description }}</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>{{ $PendingUser->username }}</td>
                <td>{{ $PendingUser->created_at }}</td>
                <td class="buttonbox"><button type="button" class="btn btn-success mb-2 approve_button" id="{{ $PendingUser->id }}">Approve</button> <button type="button" class="btn btn-danger delete_button" id="{{ $PendingUser->id }}">Delete</button></td>
            </tr>
@endforeach

        </tbody>
        <tfoot>


        </tfoot>
    </table>










      </div>
    </div>
  </div>
  <!-- ############ Main END-->
</div>
<!-- ############ Content END-->
@endsection
