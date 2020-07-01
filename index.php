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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand text-white" href="#">OCORDO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="id1.html" method="POST">
                        <input type="submit" class="nav-link mx-3" name="page1"   value="Index" />
                    </form>
                </li>

                <li class="nav-item">
                    <form action="id2.html" method="POST">
                        <input type="submit" class="nav-link mx-3"  name="page2"   value="Qui somme nous ?" />
                    </form>
                </li>
                <li class="nav-item">
                    <form action="id3.html" method="POST">
                        <input type="submit" class="nav-link mx-3"  name="page3" value="Avis" />
                    </form>
                </li>
                <li class="nav-item">
                    <form action="id4.html" method="POST">
                        <input type="submit" class="nav-link mx-3"  name="page4"  value="Contact" />
                    </form>
                </li>
                </ul>
            </div>
        </nav>

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
                        <p class="small">Un site by LesBogoss</p>
                    </div>
                    <div class="col-6">
                        <ul class="link-footer">
                            <li><img src="assets/img/GitHub-Mark-32px.png" alt="githublogo"> <a href="https://github.com/TonyRouyer">Github Tony</a></li>
                            <li><img src="assets/img/GitHub-Mark-32px.png" alt="githublogo"> <a href="https://github.com/BakariF">Github Bakari</a></li>
                            <li><img src="assets/img/GitHub-Mark-32px.png" alt="githublogo"> <a href="https://github.com/MaximePag/">Github Maxime</a></li>
                            <li><img src="assets/img/GitHub-Mark-32px.png" alt="githublogo"> <a href="https://github.com/jeromeclauet">Github Jérome</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </footer>


    </body>
</html>