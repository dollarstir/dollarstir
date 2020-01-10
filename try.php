<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time Ago </title>
</head>
<body>
    
    <form action="#" method="post" class="mmf">

        <input type="text" name="post">
        <input type="submit" value="Submit" name="su">

       

    </form>

    

<div class="mmm">

</div>
    <br>

    <div class="ress">
            <div class="dipo">
           
            </div>
        </div>


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
        setInterval(() => {
            $(".dipo").load("to.php");
            
        }, 1000);    
    </script>
    <script src="ajax.js"></script>
</body>

</html>