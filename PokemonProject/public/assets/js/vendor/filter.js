// $(document).ready(function(){
//     $('#order_list').change( function() {
//         $(this).find(":selected").each(function () {
//             if ($(this).val()=='hp')
//             {
//                 console.log(1)
//                 $('#ajax_load').load("pokemons",{type:$(this).val()},function(responseTxt, statusTxt, xhr){
//                     if(statusTxt == "success")
//                         alert("External content loaded successfully!");
//                     if(statusTxt == "error")
//                         alert("Error: " + xhr.status + ": " + xhr.statusText);
//                 }) ;
//             }
//             else if ($(this).val()=='niveau')
//             {
//                 console.log(2)
//                 // $('#ajax_load').load("pokemons",{type:$(this).val()}) ;
//             }
//         });
//     });
//
//     // $('#view_module').click( function() {
//     //     $('#ajax_load').load("php/courses/views/courseslist.php") ;
//     // });
//
// });
$(document).ready(function () {
    // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $('#order_list').change(function () {
        $(this).find(":selected").each(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                /* the route pointing to the post function */
                url: '/pokemons/sort',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {type: $(this).val()},
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) {
                    console.log(1);
                    $("#ajax_load").html(data);
                    $("#mainscript").each(function () {
                        var oldScriptSrc = this.getAttribute("src");
                        var oldScriptId = this.getAttribute("id");
                        $(this).remove();
                        var newScript;
                        newScript = document.createElement('script');
                        newScript.type = 'text/javascript';
                        newScript.src = oldScriptSrc;
                        newScript.id = oldScriptId;
                        document.getElementsByTagName("head")[0].appendChild(newScript);
                    });

                }
            });
        });
    });
});

