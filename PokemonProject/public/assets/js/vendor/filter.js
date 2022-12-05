$(document).ready(function(){
    $('#order_list').change( function() {
        console.log(1)
        $(this).find(":selected").each(function () {
            console.log( $(this).val() );
            if($(this).val()=='Niveau')
            {
                console.log(1);
                //console.log(1);
                // $('#ajax_load').load("/pokemons",{type:$(this).val()}) ;
            }
            if($(this).val()=='Points De Vie')
            {
                // $('#ajax_load').load("/pokemons",{type:$(this).val()}) ;
            }
            else if ($(this).val()=='hp')
            {
                // $('#ajax_load').load("pokemons",{type:$(this).val()}) ;
            }
            else if ($(this).val()=='niveau')
            {
                // $('#ajax_load').load("pokemons",{type:$(this).val()}) ;
            }
        });
    });

    // $('#view_module').click( function() {
    //     $('#ajax_load').load("php/courses/views/courseslist.php") ;
    // });

});

