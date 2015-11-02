<?php include("login.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Journal</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">On The Fence</a>

            </div>

            <div class="collapse navbar-collapse">
                <ul class=" nav navbar-nav" id="nav_links">
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="">About Me</a></li>
                    <li><a href="">About My App</a></li>
                    <li><a href="">Download My App</a></li>
                </ul>
                <button id="login_button" class="btn btn-default navbar-btn navbar-right " data-toggle="modal" data-target="#loginModal">Login </button>
                <button class="btn btn-default navbar-btn navbar-right " data-toggle="modal" data-target="#signUpModal">Sign Up </button>
            </div>

        </div>
    </nav>

    <div id="loginModal" class="modal fade">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">X</button>
                    <h4 class="modal-title">Login</h4>
                </div>


                <div class="modal-body">

                    <form method="post">
                        <div class="form-group">
                            <label for="loginemail">Email</label>
							<input type="email" class="form-control" name="loginemail" id="loginemail"  placeholder="John Doe@example.com" value="<?php echo addslashes($_POST['email']); ?>" />

                        </div>
                        <div class="form-group">
                            <label for="loginpassword">Password</label>
							<input type="password" class="form-control" name="loginpassword" placeholder="Default" value="<?php echo addslashes($_POST['password']); ?>" />

                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me</label>
                        </div>
                        <input class="btn btn-primary" type="submit" name="submit" value="Log In">
                    </form>

                    </form>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

    </div>

    <div id="signUpModal" class="modal fade">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">X</button>
                    <h4 class="modal-title">Sign Up</h4>
                </div>
                <div class="modal-body">
					<?php

					if($error) {

						echo '<div class="alert alert-danger">.addslashes($error).</div>';
					}

					?>

                    <form method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="John Doe@example.com" value="<?php echo addslashes($_POST['email']); ?>" />
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Default" value="<?php echo addslashes($_POST['password']); ?>" />

                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me</label>
                        </div>
                        <input type="submit"class="btn btn-primary" name="submit" value="Sign Up">
                    </form>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

    </div>

    	<div class="container" id="topContainer">

			<div class="row">
				<div class="col-md-6 col-md-offset-3">

	            <h1 class="text-center">Secret Journal</h1>
				<p class="lead text-center">Your own private journal with you wherever you go!</p>
			</div>


			</div>

		</div>














        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

        <script>
            $("#topContainer").css("height", $(window).height());
        </script>


</body>

</html>
