<!DOCTYPE html>
<!-- TODO Repair form broblem (not fully streached), add icons, implement php foreach -->
<html lang="pl">
    <head>
        <title>Wybierz Bilety</title>
        <link rel="stylesheet" type="text/css" href="../Public/css/ticket.css"">
        <!-- <script type='text/javascript' src="../Public/js/Board.css"></script> -->
        <?php include(dirname(__DIR__).'/Common/Head.php'); ?>
     </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-12 colored mb-2">
                <img src="../Public/imgs/People.svg">
                <span id="logo" class="align-middle">CITYH</span>
            </div>
        </div>
        <?php include(dirname(__DIR__).'/Common/Navbar.php'); ?>
    </div>
    <div class="container content">
        <div class="row py-2">
            <div class="col-12 colored">
                <h1 class="text-center">PODSUMOWANIE</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 colored">
                <img src="../Public/imgs/linked.png" class="img-fluid w-100 maxh600 px-5" alt="MainTickets"> <!-- DATABASE GET IMG -->
            </div>
        </div>
        <div class="row mx-4 py-1 TableHead">
            <div class="col">
                <p class="text-center">Tura</p>
            </div>
            <div class="col">
                <p class="text-center">Typ</p>
            </div>
            <div class="col">
                <p class="text-center">Cena</p>
            </div>
            <div class="col">
                <p class="text-center">Ilość</p>
            </div>
        </div>
        <form>
            <div class="row mx-4 py-1 text">
                <div class="col">
                    <p class="text-center">1</p><!-- float-right -->
                </div>
                <div class="col">
                    <p class="text-center">Ulgowy</p>
                </div>
                <div class="col">
                    <p class="text-center">100zł</p>
                </div>
                <div class="col">
                    <p class="text-center">
                        <input type="number" name="quantity" min="1" max="10">
                    </p>
                </div>
            </div>
            <div class="row mx-4 py-1 text end-line">
                <div class="col">
                    <p class="text-center">1</p>
                </div>
                <div class="col">
                    <p class="text-center">Normalny</p>
                </div>
                <div class="col">
                    <p class="text-center">100zł</p>
                </div>
                <div class="col">
                    <p class="text-center">
                        <input type="number" name="quantity" min="1" max="10">
                    </p>
                </div>
            </div>
            <div class="row mx-4 py-1 text">
                <div class="col">
                    <p class="text-center">1</p><!-- float-right -->
                </div>
                <div class="col">
                    <p class="text-center">Ulgowy</p>
                </div>
                <div class="col">
                    <p class="text-center">100zł</p>
                </div>
                <div class="col">
                    <p class="text-center">
                        <input type="number" name="quantity" min="1" max="10">
                    </p>
                </div>
            </div>
            <div class="row mx-4 py-1 text end-line">
                <div class="col">
                    <p class="text-center">1</p>
                </div>
                <div class="col">
                    <p class="text-center">Normalny</p>
                </div>
                <div class="col">
                    <p class="text-center">100zł</p>
                </div>
                <div class="col">
                    <p class="text-center">
                        <input type="number" name="quantity" min="1" max="10">
                    </p>
                </div>
            </div>
            <div class="row mx-4 py-1 text">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block px-5">-></button>
                </div>
            </div>
        </form>
    </div>
    </body>
</html>
