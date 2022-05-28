( function( $ ) {
    $(document).ready(function (){
        $(document).mousemove(function(){
            if($("#bouton_toutes_les_recettes:hover").length != 0){
                $("#photo_cuisine").attr("src","/images/cuisine.jpg");
            } else if($("#bouton_boissons:hover").length != 0) {
                    $("#photo_cuisine").attr("src","/images/boisson.jpg");
            } else if($("#bouton_desserts:hover").length != 0) {
                    $("#photo_cuisine").attr("src","/images/dessert.jpg");
            } else if($("#bouton_entrees:hover").length != 0) {
                $("#photo_cuisine").attr("src","/images/entree.jpg");
            } else if($("#bouton_plats:hover").length != 0) {
                $("#photo_cuisine").attr("src","/images/plat.jpg");
            } else {
                $("#photo_cuisine").attr("src","/images/cuisine.jpg");
            }
        });
        
        /*
        // recettes (défaut)
        var recettesIsHovered = $('#bouton_toutes_les_recettes').is(":hover"); // returns true or false
        console.log(recettesIsHovered);
        if( recettesIsHovered == true ) {
            $("#photo_cuisine").attr("src","/images/cuisine.jpg");
        }
        // Boissons
        var boissonsIsHovered = $('#bouton_boissons').is(":hover"); // returns true or false
        console.log(boissonsIsHovered);
        if( boissonsIsHovered == true ) {
            $("#photo_cuisine").attr("src","/images/boisson.jpg");
        }
        var dessertsIsHovered = $('#bouton_desserts').is(":hover"); // returns true or false
        console.log(dessertsIsHovered);
        if( dessertsIsHovered == true ) {
            $("#photo_cuisine").attr("src","/images/dessert.jpg");
        }
        var entreesIsHovered = $('#bouton_entrees').is(":hover"); // returns true or false
        console.log(entreesIsHovered);
        if( entreesIsHovered == true ) {
            $("#photo_cuisine").attr("src","/images/entree.jpg");
        }
        var platsIsHovered = $('#bouton_plats').is(":hover"); // returns true or false
        console.log(platsIsHovered);
        if( platsIsHovered == true ) {
            $("#photo_cuisine").attr("src","/images/plat.jpg");
        }
        */
    });
} )( jQuery );