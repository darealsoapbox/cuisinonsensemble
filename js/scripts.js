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
            }
        });
    });
} )( jQuery );