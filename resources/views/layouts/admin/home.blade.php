@extends('layouts.admin.admin_layout')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  
 <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" defer></script> 
 <script src="{{ asset('js/datatable.js') }}"></script>


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
                <th>Country</th>
                <th>State</th>
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


            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
                <td>61</td>
            </tr>

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
