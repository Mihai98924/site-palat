<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>GO | Palatul Copiilor Bistrița</title>
        <meta charset="utf-8">
        <link href="../../css/style_general.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../imagini/icon.png" rel="shortcut icon" type="image/png" sizes="32x32">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="grid">
            <div class="box box1">
                <h1><a href="../../index.php">Palatul Copiilor Bistrița</a></h1>
            </div>
            <div class="box2">
                <a class="menu-trigger" id="menu-trigger" onclick="toggleClass()"><img src="../../imagini/icons8-menu-2.svg"></a>
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
                    <div class="box21 go_top"></div>
                    <div class="box22">
                        <h2>Cercul de GO</h2>
                        <h3 id="motto">MOTTO:<q> </q> - </h3>
                        <h3>PROFESOR: Vîrtic Teodor</h3>
                        <p>Plasarea  unei piese pe tablă poate arăta explicit intenția de dezvoltare a propiilor piese, dar poate fi și o interogare subtilă referitoare la intențiile partenerului, și acesta poate răspunde promt, sau poate ignora pur și simplu mutarea adversarului, dacă decide că o mutare în altă zonă a tablei îi oferă un avantaj mai substanțial.</p>
                        <p>Jucătorii de Go sunt conștienți de numeroasele avantaje câștigate prin practicarea acestui joc, dar cu toții știm ce important este să alegi conștient si corect direcția, atunci cand ajungi la răscruce.</p>
                        <p>//rosu</p>
                    </div>
                    <div class="box23 go_bottom"></div>
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