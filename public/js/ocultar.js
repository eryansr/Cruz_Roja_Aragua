$(document).ready(function(){
    $("#ocultar").hide();
    $("#ocultar0").hide();
    $("#ocultar1").hide();
    $("#ocultar2").hide();
    $("#ocultar3").hide();

    $("#si").on( "click", function() {
        $('#ocultar').show("slow"); //muestro mediante clases
     });

    $("#no").on( "click", function() {
        $('#ocultar').hide(1000); //oculto mediante clases
    });

    $("#si1").on( "click", function() {
        $('#ocultar1').show("slow"); //muestro mediante clases
     });

    $("#no1").on( "click", function() {
        $('#ocultar1').hide(1000); //oculto mediante clases
    });

    $("#si2").on( "click", function() {
        $('#ocultar2').show("slow"); //muestro mediante clases
     });

    $("#no2").on( "click", function() {
        $('#ocultar2').hide(1000); //oculto mediante clases
    });

    $("#si3").on( "click", function() {
        $('#ocultar3').show("slow"); //muestro mediante clases
     });

    $("#no3").on( "click", function() {
        $('#ocultar3').hide(1000); //oculto mediante clases
    });
});