$(function(){
    function resp(response) {

        $("#rep").html(response);
        
        $(".mess").fadeOut(8000);

        
    }

    function download(response2) {
        $(".downloading").html(response2);
        $(".mess").fadeOut(100000);
        
    }

    $("#myform").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=bookform",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: resp


        };

        $.ajax(mf);
        

        
    });

    function ecoo(response1) {

        if (response1 == "success") {

            $(".mmm").html("Good job");
            
        }
        
    }

    $(".mmf").submit(function (ev) {
        ev.preventDefault();

        var codee = {

            url:"co.php",
            type: "post",
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: ecoo

        };

        $.ajax(codee);
        
    })

    $("#mylink").submit(function (e) {
        e.preventDefault();

        var cont = {
            url : 'actions.php?dollar=getlink',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
            success : download
        }

        $.ajax(cont);   
        
    })
    
})

