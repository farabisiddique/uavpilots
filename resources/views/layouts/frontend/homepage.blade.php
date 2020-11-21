
@extends('layouts.app')
 

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  
 <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" defer></script> 
 <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js" defer></script> 
 <script src="{{ asset('js/datatable_home.js') }}"></script>


@section('content')



<br>

    <div class="container-fluid">

            <div class="row introdiv">
              <div class="col-sm imagediv">
                  <img src="{{ asset('img/abc.png') }}"> 

              </div>

              <div class="col-sm-2">
                
              </div>

              <div class="col-sm writingdiv">


                    <div class="container-fluid d-flex justify-content-center mt-5">
                      <img src="{{ asset('img/dronelogo.png') }}">    
                    </div>

                    <div class="container-fluid d-flex justify-content-center mt-5">
                      <p>A DronePilots verified profile is the perfect tool for helping drone pilots from all industries showcase themselves and their companies in an attention-grabbing context.  Whether you want to drum up new customers, find sponsors, or build your personal brand – it’s all easier with your own dedicated verified profile.</p>
                    </div>

                    

<!--                     <div class="container-fluid d-flex justify-content-center mt-5">
                      <p>A DronePilots verified profile is the perfect tool for helping drone pilots from all industries showcase themselves and their companies in an attention-grabbing context.</p>
                    </div> -->






                    <div class="container-fluid d-flex mt-5">

                                <table id="example" class="display" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Name</th>
                                              <th>Industry</th>
                                              <th>Location</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($ApprovedUsersData as $ApprovedUser)
                                          <tr>
                                              <td><a href="/{{ $ApprovedUser->username }}">{{ $ApprovedUser->first_name }} {{ $ApprovedUser->last_name }}</a></td>
                                              <td>{{ $ApprovedUser->industry }}</td>
                                              <td>{{ $ApprovedUser->state }}, {{ $ApprovedUser->country }}</td>
                                              
                                          </tr>
                                          @endforeach

<!--                                           <tr>
                                              <td><a href="/profile">Garrett Winters</a></td>
                                              <td>Accountant</td>
                                              <td>Tokyo</td>
                                              
                                          </tr>
                                          <tr>
                                              <td><a href="/profile">Ashton Cox</a></td>
                                              <td>Junior Technical Author</td>
                                              <td>San Francisco</td>
                                              
                                          </tr>
                                          <tr>
                                              <td><a href="/profile">Cedric Kelly</a></td>
                                              <td>Senior Javascript Developer</td>
                                              <td>Edinburgh</td>
                                              
                                          </tr> -->

                                      </tbody>
                                      <tfoot>
                                        <th></th>
                                      </tfoot>
                                </table>
                

              </div>
                    







              </div>

            </div>
          
      
    </div>






@endsection





