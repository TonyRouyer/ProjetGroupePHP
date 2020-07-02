<?php $xml = simplexml_load_file("source.xml") or die("Error: Cannot create object"); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>                
            <?php
                    if(isset($_POST['page1'])) {
                        echo $xml->page[0]->title;
                    } else if (isset($_POST['page2'])) {
                        echo $xml->page[1]->title;
                    } else if (isset($_POST['page3'])) {
                        echo $xml->page[2]->title;
                    }else if (isset($_POST['page4'])) {
                        echo $xml->page[3]->title;
                    }else {
                        echo $xml->page[0]->title;
                    }
                ?>
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand text-white ml-3" href="#">OCORDO</a>
            <img id="mario" src="assets/img/mario.gif"/>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="assets/img/bk.png"/></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="id1.html" method="POST">
                        <input type="submit" class="nav-link mx-auto my-2" name="page1"   value="<?= $xml->page[0]->menu; ?>" />
                    </form>
                </li>
                <li class="nav-item">
                    <form action="id2.html" method="POST">
                        <input type="submit" class="nav-link mx-auto my-2"  name="page2"   value="<?= $xml->page[1]->menu; ?>" />
                    </form>
                </li>
                <li class="nav-item">
                    <form action="id3.html" method="POST">
                        <input type="submit" class="nav-link mx-auto my-2"  name="page3" value="<?= $xml->page[2]->menu; ?>" />
                    </form>
                </li>
                <li class="nav-item">
                    <form action="id4.html" method="POST">
                        <input type="submit" class="nav-link mx-auto my-2"  name="page4"  value="<?= $xml->page[3]->menu; ?>" />
                    </form>
                </li>
                </ul>
            </div>
        </nav>
        <img id="wow" src="assets/img/wow.gif"/>
        <div class="container">
            <div class="row">
                <?php
                    if(isset($_POST['page1'])) {
                        echo $xml->page[0]->content;
                    } else if (isset($_POST['page2'])) {
                        echo $xml->page[1]->content;
                    } else if (isset($_POST['page3'])) {
                        echo $xml->page[2]->content;
                    }else if (isset($_POST['page4'])) {
                        echo $xml->page[3]->content;
                    }else {
                        echo $xml->page[0]->content;
                    }
                ?>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                    <img id="nyan" onclick="nyanAnim()" src="assets/img/nyancat.gif"/>
                        <p class="small">Un site by LesBogoss</p>
                    </div>
                    <div class="col-4">
                    <img id="kirby" src="assets/img/kirby.gif"/>
                        <ul id="github" class="link-footer">
                            <li><img src="assets/img/GitHub-Mark-32px.png" alt="githublogo" /><a href="https://github.com/TonyRouyer">Github Tony</a></li>
                            <li><img src="assets/img/GitHub-Mark-32px.png" alt="githublogo" /><a href="https://github.com/BakariF">Github Bakari</a></li>
                            <li><img src="assets/img/GitHub-Mark-32px.png" alt="githublogo" /><a href="https://github.com/MaximePag/">Github Maxime</a></li>
                            <li><img src="assets/img/GitHub-Mark-32px.png" alt="githublogo" /><a href="https://github.com/jeromeclauet">Github Jérome</a></li>
                        </ul>
                    </div>
                    <div class="col-2"><img id="kirby0" onclick="kirbyAnim()" src="assets/img/kirby0.png"/></div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>