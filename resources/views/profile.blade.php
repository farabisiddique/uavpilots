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

              	<div class="container d-flex flex-column justify-content-center">
              	
	              	<h1>Tony Stark</h1>

	              	<!-- <h1> $user->first_name   $user->last_name </h1> -->

	              	<div class="visitbuttondiv">
	              		<button type="button" class="btn btn-primary rounded-pill visitbutton">visit my channel</button>
	              	</div>





	              	


              	</div>

              	

              	<div class="container">
              			
              			<p>At just 19, Vanover is the youngest pilot in DRL. With MultiGP National Championships under his belt, he’s ready to take on the big leagues. Vanover is a hot shot rookie who isn’t afraid to show the vets he’s the new generation coming for the title. Vanover is all about hard work, determination and showing off his skills to get in the other pilot’s heads.</p>

              			<!-- <p> $user->description </p> -->


              	</div>

              	<div class="container">

              		Location: Roanoke, TX
					Industry: Racing
					Awards: Drone Racing League
					Certified: FAA Part 107
              		

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