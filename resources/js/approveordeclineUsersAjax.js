
$(document).ready(function(){


		// function approve() {



  //           $.ajax({
  //              type:'POST',
  //              url:'/getPending',
  //              data:'_token = <?php echo csrf_token() ?>',
  //              success:function(data) {
  //                 $("#msg").html(data.msg);
  //              }
  //           });

  //        }

  	$("td button").click(function(){

  			var userid = parseInt($(this).attr('id'));

  			if($(this).hasClass("approve_button")){


  				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				    }
				});

  				$.ajax({
	               type:'POST',
	               url:'approve_user',
	               data: { approve_id: userid },
	               success:function(msg) {

	                  $("#trid"+userid+" .buttonbox").empty();
	                  $("#trid"+userid+" .buttonbox").append("<button type='button' class='btn btn-success' disabled>Approved &#9989;</button>")





               }
            	});


  				
  			}



  			if($(this).hasClass("delete_button")){


  				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				    }
				});

  				$.ajax({
	               type:'POST',
	               url:'remove_user',
	               data: { delete_id: userid },
	               success:function(msg) {

	               		console.log("hello");
	                  $("#trid"+userid).empty();
	                  // $("#trid"+userid+" .buttonbox").append("<button type='button' class='btn btn-success' disabled>Approved &#9989;</button>")





               }
            	});


  				
  			}


	           

         

    		






	});







});



