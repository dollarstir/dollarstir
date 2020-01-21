$(function(){
document.getElementById


    $("#dp").hide();
    $("#cp").hide();
    $("#gh").css("cursor","not-allowed");
    $("#ep").hide();
    $("#np").hide();

    $("#ad1").hide();
    $("#ad2").hide();
    $("#ct").hide();
    $("#st").hide();
    $("#county").hide();
    $("#typec").hide();
    $("#tmount").hide();

    $("#bita").hide();
    $("#bamount").hide();
    $("#bbt").hide();

    $("#buyc").change(function () {
        if ($("#buyc").val()=="paypal") {

            $("#dp").show();
            $("#cp").show();
            $("#ep").show();
            $("#np").show();

            
        }
        else{

            $("#dp").hide();
            $("#cp").hide();
            $("#ep").hide();
            $("#np").hide();
        }




        if ($("#buyc").val()=="bitcoin") {

            $("#bita").show();
            $("#bamount").show();
            $("#bbt").show();

            
        }
        else{

            $("#bita").hide();
            $("#bamount").hide();
            $("#bbt").hide();
        }



        if ($("#buyc").val()=="creditcard") {

            $("#ad1").show();
            $("#ad2").show();
            $("#ct").show();
            $("#st").show();
            $("#county").show();
            $("#typec").show();
            $("#tmount").show();

            
        }
        else{

            $("#ad1").hide();
            $("#ad2").hide();
            $("#ct").hide();
            $("#st").hide();
            $("#county").hide();
            $("#typec").hide();
            $("#tmount").hide();
        }
        


        
        
    });

    

    




    


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


    $("#buyform").submit(function (buy) {

        buy.preventDefault();
        var buyopt = {

            url: 'actions.php?dollar=buying',
            type: "POST",
            data : new FormData(this),
            cache: false,
            contentType : false,
            processData : false;
            

        }
        
    })
    
})

