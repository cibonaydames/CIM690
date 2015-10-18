$("#hello").click(
    function() {
            console.log("hello");
        }
);


//$( document ).ready(function() {
// 
//    // Your code here.
// 
//});


$("#on").click(function() {
            $( "#hello" ).addClass( "test" );
        });
$("#off").click(function() {
            $( "#hello" ).removeClass ( "test" );
        });


$("#loader").click(function() {
            $.ajax({
              url: "text.html",
              cache: false
            })
              .done(function( html ) {
                $( "#holder" ).append( html );
              });
        });
