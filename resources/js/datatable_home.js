$(document).ready(function() {
    $('#example').DataTable( {

        // "paging": false,
        "bAutoWidth":false,

        dom: 'Bfrtip',




        buttons: [
            {
                text: 'Reset',
                action: function ( e, dt, node, config ) {
                    // alert( 'Button activated' );

                    $("#example").DataTable().search("").draw();
                    $("#example").DataTable().fnDraw();
                }
            }
        ],

        //  initComplete: function () {
        //     this.api().column().every( function () {

        //         var column = this;
               

        //         var select = $('<select><option value=""></option></select>')
        //             .appendTo( $(column.header()).empty() )
        //             .on( 'change', function () {
        //                 var val = $.fn.dataTable.util.escapeRegex(
        //                     $(this).val()
        //                 );
 
        //                 column
        //                     .search( val ? '^'+val+'$' : '', true, false )
        //                     .draw();
        //             } );
 
        //         column.data().unique().sort().each( function ( d, j ) {
        //             select.append( '<option value="'+d+'">'+d+'</option>' )
        //         } );
        //     } );
        // }





        

       




    } );


     // $("#example tfoot th").each( function ( i ) {
     //     if(i==1) {}
     //     else {
     //        var select = $('<select><option value=""></option></select>')
     //            .appendTo( $(this).empty() )
     //            .on( 'change', function () {
     //                table.column( i )
     //                    .search( $(this).val() )
     //                    .draw();
     //            } );
         
     //        table.column( i ).data().unique().sort().each( function ( d, j ) {
     //            select.append( '<option value="'+d+'">'+d+'</option>' )
     //        } );
     //     }
     //    } );



    $("#example_wrapper").css("width","100%");
    $("#example_filter").css("width","270px");

} );