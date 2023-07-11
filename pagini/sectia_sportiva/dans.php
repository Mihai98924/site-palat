<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Dans modern | Palatul Copiilor Bistrița</title>
        <meta charset="utf-8">
        <link href="../../css/style_general.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../imagini/icon.png" rel="shortcut icon" type="image/png" sizes="32x32">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="grid">
            <div class="box box1">
                <h1><a href="../../index.php">Palatul Copiilor Bistrița</a></h1>
            </div>
            <div class="box2">
                <a class="menu-trigger" id="menu-trigger" onclick="toggleClass()"><img src="../../imagini/icons8-menu-2.svgg"></a>
                    <?php
                        include("meniu.txt");
                    ?>
            </div>
            <div class="box box3">
                <div class="grid1">
                    <div class="box11">
                        <?php
                            include("../../noutati.txt");
                        ?>
                    </div>
                </div>
            </div>
            <div class="box4">
                <div class="grid2">
                    <div class="box21 dans_top"></div>
                    <div class="box22">
                        <h2>Cercul de dans modern</h2>
                        <h3 id="motto">MOTTO:<q> </q> - </h3>
                        <h3>PROFESOR: Morar Zina</h3>
                        <p>La cercul de dans modern graţia, fantezia şi costumele ingenioase completează dansul şi aduc bucurie copiilor şi părinţilor. În spatele momentelor artistice stă însă multă muncă, ambiţie şi perseverenţă.</p>
                        <p>Începând din acest an, pe langă DANS MODERN, oferta educațională a cercului include și două grupe de : GIMNASTICĂ RITMICĂ și GIMNASTICĂ AEROBICĂ,  ce asigură o dezvoltare armonioasă a copiilor având rol benefic în întărirea musculaturii, dezvoltării ritmului și a orientării în spațiu, socializare, creșterea capacității motrice precum și creșterea capacității de efort și multe altele, toate în concordanță și specific categoriilor de vârstă.</p>
                        <p>//rosu</p>
                    </div>
                    <div class="box23 dans_bottom"></div>
                </div>
            </div>
            <div class="box5">
                <p>&copy; Palatul Copiilor Bistrița 2018</p>
            </div>
        </div>
        <button onclick="topFunction()" id="top" title="Du-te sus!"><i class="material-icons">get_app</i></button>
        <script>
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("top").style.display = "block";
                } else {
                 document.getElementById("top").style.display = "block";
                }
            }
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
            function toggleClass() {
                var element = document.getElementById('header-menu');
                element.classList.toggle('show-menu');
            }
        </script>
    </body>
</html>