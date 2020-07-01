<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Projet groupe PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Site des bogoss</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="index.php" method="POST">
                        <input type="submit" class="nav-link mx-3" name="page1"   value="page1" />
                    </form>
                </li>

                <li class="nav-item">
                    <form action="index.php" method="POST">
                        <input type="submit" class="nav-link mx-3"  name="page2"   value="page2" />
                    </form>
                </li>
                <li class="nav-item">
                    <form action="index.php" method="POST">
                        <input type="submit" class="nav-link mx-3"  name="page3" value="page3" />
                    </form>
                </li>
                <li class="nav-item">
                    <form action="index.php" method="POST">
                        <input type="submit" class="nav-link mx-3"  name="page4"  value="page4" />
                    </form>
                </li>
                </ul>
            </div>
        </nav>


        <?php
        $xml = simplexml_load_file("source.xml") or die("Error: Cannot create object");
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
    </body>
</html>