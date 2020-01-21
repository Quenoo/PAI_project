<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Title Page</title>
        <!-- <script type='text/javascript' src="../Public/js/Board.css"></script> -->
        <?php include(dirname(__DIR__).'/Common/Head.php'); ?>
        <link rel="stylesheet" type="text/css" href="../Public/css/login.css"">
     </head>`
    <body>
    <div class="container">
        <?php include(dirname(__DIR__).'/Common/Navbar.php'); ?>
    </div>
    <div class="container content pt-2">
        <form method="POST" action="?page=login"> <!-- CHECK IF TICKETS IN SESSION, NO-PROFILE, YES-PAY -->
            <div class="form-row">
                <div class="form-group col-md-4 offset-md-4">
                    <label for="inputEmail4">Username:</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Username">
                </div>
            </div>  
            <div class="form-row">  
                <div class="form-group col-md-4 offset-md-4">
                    <label for="inputPassword4">Password:</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <div class="form-group col-md-2 offset-md-5 px-0 pb-3">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
        </form>
    </div>




</html>