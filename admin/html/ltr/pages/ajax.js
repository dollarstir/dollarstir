$(function(){
   
    function resp(response){
        $(".fback").html(response);
        $("#fout").fadeOut(5000);


    }

    $("#adp").submit(function(e){

        e.preventDefault();
        var opt = {
            url: 'actions.php?dollar=addport',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
            success: resp
        }
        $.ajax(opt);
    });




    $("#adpro").submit(function (e) {

        e.preventDefault();
        var adpropt = {
            url : 'actions.php?dollar=adprod',
            type: 'post',
            data : new FormData(this),
            cache: false,
            processData :false,
            contentType: false,
            success: resp

        }
        $.ajax(adpropt);
        
    })
})