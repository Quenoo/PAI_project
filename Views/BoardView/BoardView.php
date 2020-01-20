<!DOCTYPE html>
<!-- TODO Repair form broblem (not fully streached), add icons, implement php foreach -->
<html lang="">
    <head>
        <title>Title Page</title>
        <link rel="stylesheet" type="text/css" href="../Public/css/board.css"">
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
        <div class="row content py-2">
            <div class="col-12 colored"><h1 class="text-center">Witaj w Polskim Centrum Wydarzeń!</h1></div>
        </div>
        <form method="POST" class='mb-0'> <!--action="?page=login" -->
            <div class="form-row content">
                <div class="col-3">
                    <input type="text" class="form-control" placeholder="Nazwa wydarzenia/słowa kluczowe" name="EventName">
                </div>
                <div class="col-3">
                    <input type="date" class="form-control" placeholder="Data" name="EventDate">
                </div>
                <div class="col-3">
                    <select class="custom-select" id="inlineFormCustomSelect" name="EventType">
                        <option hidden>Typ wydarzenia</option>
                        <option value="1">Koncert</option>
                        <option value="2">Spektakl</option>
                        <option value="3">Impreza</option>
                    </select>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary btn-block">-></button>  <!--name="BoardSearch" -->
                </div>
            </div>
        </form>
            <!-- <div class="col-4 colored">Pole Wyszukiwania 1</div>
            <div class="col-3 colored">Pole Wyszukiwania 2</div>
            <div class="col-3 colored">Pole Wyszukiwania 3</div>
            <div class="col-2 colored">Strzałka</div> -->
                <!-- for each -->
        <div class="row content pt-3">
            <div class="col colored pr-0 pl-2">
                <img src="../Public/imgs/noc.jpg" class="img-responsive wd100" alt="Image">
            </div>
            <div class="col colored text mr-2">
                <h1>Nazwa wydarzenia</h1>
                <p>
                    <span class="text-left">lokacja</span>
                    <span class="float-right">TAG TAG TAG</span>
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, magnam! Quasi deserunt aperiam, aliquam ex magnam officiis voluptate animi quas fuga nisi cumque, odit incidunt hic odio cupiditate? Quia, totam!
                </p>
                <p>
                    <span class="text-left">IG TW FB WEB</span>
                    <span class="float-right"><a href="?page=tickets&param2=WydarzenieID">BILETY</a></span>
                </p>
            </div>
        </div>
        <div class="row content pt-3">
            <div class="col colored pr-0 pl-2">
                <img src="../Public/imgs/banan.jpg" class="img-responsive wd100" alt="Image">
            </div>
            <div class="col colored text mr-2">
                <h1>Nazwa wydarzenia</h1>
                <p>
                    <span class="text-left">lokacja</span>
                    <span class="float-right">TAG TAG TAG</span>
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, magnam! Quasi deserunt aperiam, aliquam ex magnam officiis voluptate animi quas fuga nisi cumque, odit incidunt hic odio cupiditate? Quia, totam!
                </p>
                <p>
                    <span class="text-left">IG TW FB WEB</span>
                    <span class="float-right">BILETY</span>
                </p>
            </div>
        </div>
        <div class="row content pt-3">
            <div class="col colored pr-0 pl-2">
                <img src="../Public/imgs/radio.jpg" class="img-responsive wd100" alt="Image">
            </div>
            <div class="col colored text mr-2">
                <h1>Nazwa wydarzenia</h1>
                <p>
                    <span class="text-left">lokacja</span>
                    <span class="float-right">TAG TAG TAG</span>
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, magnam! Quasi deserunt aperiam, aliquam ex magnam officiis voluptate animi quas fuga nisi cumque, odit incidunt hic odio cupiditate? Quia, totam!
                </p>
                <p>
                    <span class="text-left">IG TW FB WEB</span>
                    <span class="float-right">BILETY</span>
                </p>
            </div>
        </div>
    </body>
</html>
