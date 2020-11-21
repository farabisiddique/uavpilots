@extends('layouts.app')



@section('content')



<br>



    <div class="container-fluid">

            <div class="row introdiv">
              <div class="col-sm imagediv">
                  <img src="{{ asset('img/ironman.jpg') }}"> 

              </div>

              <div class="col-sm-2">
                
              </div>

              <div class="col-sm writingdiv">

              	<br><br>

              	<div class="container">
              	
    	              	<h1 class="user_name_class">Tony Stark</h1>

    	              	<!-- <h1> $user->first_name   $user->last_name </h1> -->

    	              	<div class="visitbuttondiv container">
    	              		<!-- <button type="button" class="btn btn-primary rounded-pill visitbutton">visit my channel</button> -->

                        <a href="#" class="btn btn-primary rounded-pill visitbutton mt-5 mb-5 p-3 pl-4 pr-4">Visit my channel</a>


    	              	</div>





	              	


              	</div>

              	

              	<div class="container d-flex justify-content-center">
              			
              			<p>At just 19, Vanover is the youngest pilot in DRL. With MultiGP National Championships under his belt, he’s ready to take on the big leagues. Vanover is a hot shot rookie who isn’t afraid to show the vets he’s the new generation coming for the title. Vanover is all about hard work, determination and showing off his skills to get in the other pilot’s heads.</p>

              			<!-- <p> $user->description </p> -->


              	</div>

              	<div class="container mt-2">

                  		<p><b>Location:</b> Roanoke, TX</p>
              				<p><b>Industry:</b> Racing</p>
              				<p><b>Awards:</b> Drone Racing League</p>
              				<p><b>Certified:</b> FAA Part 107</p>
              		

              	</div>
<!-- 
              	<div class="container">

              		Location:  $user->state ,  $user->country 
					Industry:  $user->industry 
					Awards: Drone Racing League
					Certified: FAA Part 107
              		

              	</div>
 -->

                    







              </div>

            </div>
          
      
    </div>






@endsection