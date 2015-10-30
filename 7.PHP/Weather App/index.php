<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">



</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center ">
                <h1 class="center white">Weather Predicter</h1>

                <p class="lead center white">Enter your city below to get a forecast</p>

                <form>
                    <div class="form group">
                        <input type="text" class="form-control" name="city" id="city"placeholder="Eg. London, Paris, New York...">
                    </div>
                    <button id="findMyWeather" class="btn btn-success btn-lg">Find my weather</button>

                </form>
                <div id="success" class="alert alert-success">Text</div>

                <div id="fail" class="alert alert-danger">Could not find weather for that city!</div>
                <div id="noCity" class="alert alert-danger">Please enter a city!</div>
            </div>
            </div>





        </div>

    </div>




        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        <script>

        $("#findMyWeather").click(function(event){
            event.preventDefault();
                $(".alert").hide();

            if ($("#city").val()!=""){



            $.get("scraper.php?city="+$("#city").val(),function( data ){


                if(data==""){

                    $("#fail").fadeIn(200);


                }else{

                    $("#success").html(data).fadeIn(200);
                }
            });
        } else {

            $("#noCity").fadeIn(200);
        }
    });

        </script>


</body>

</html>
