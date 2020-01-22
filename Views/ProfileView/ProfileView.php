<!DOCTYPE html>
<!-- TODO Repair form broblem (not fully streached), add icons, implement php foreach -->
<html lang="pl">
    <head>
        <title>Title Page</title>
        <!-- <script type='text/javascript' src="../Public/js/Board.css"></script> -->
        <?php include(dirname(__DIR__).'/Common/Head.php'); ?>
        <link rel="stylesheet" type="text/css" href="../Public/css/profile.css"">
     </head>
    <body>
    <div class="container">
        <?php include(dirname(__DIR__).'/Common/Navbar.php'); ?>
    </div>
    <div class="container content">
        <div class="row py-2">
            <div class="col-12 colored">
                <h1 class="text-center">Twój profil</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-md-1">
                <img src="../Public/imgs/photoPlaceholder.jpg" alt="photo" class="img-fluid hw200">  
            </div>
            <div class="col-8 mt-2 form">
                <div column="row">
                    <div class="col-5 offset-md-2 end-line">
                        Imię nazwisko
                    </div>
                </div>
                <div column="row">
                    <div class="col-5 offset-md-2 pt-2 end-line">
                            Email: email@email.com 
                    </div>   
                </div>
                <div column="row">
                    <div class="col-5 offset-md-2 pt-2 end-line">
                            T: 123 123 123
                    </div>  
                </div>
                <div column="row">
                    <div class="col offset-md-2 pt-2">
                        <button type="button" class="btn btn-primary">Zmień hasło</button>
                        <button type="button" class="btn btn-primary">Zmień Email</button>
                    </div>   
                </div>
            </div>
        </div>
        <div class="row mt-4 mx-5 TableHead">
            <div class="col">
                <p class="text-center">Twoje bilety</p>
            </div>
        </div>
        <div class="row text mx-5 px-5 "> <!-- for each -->
            <div class="col-3 full-line">
                <img src="../Public/imgs/poezja.jpg" alt="photo" class="img-fluid h150">  
            </div>
            <div class="col-8 content full-line">
                <p class="text-justify my-auto">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
            </div>
            <div class="col-1 content full-line py-5">
                <button type="button" class="btn-block btn-warning">\/</button>
            </div>
        </div>
    </div>
    </body>
</html>