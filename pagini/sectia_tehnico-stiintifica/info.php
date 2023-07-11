<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Cercul de informatică | Palatul Copiilor Bistrița</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../imagini/icon.png" rel="shortcut icon" type="image/png" sizes="32x32">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../../css/style_general.css" rel="stylesheet" type="text/css">
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
                    <div class="box21 info_top"></div>
                    <div class="box22">
                        <h2>Cercul de informatică</h2>
                        <h3 id="motto">MOTTO: <q>Tehnologia este arta de a transforma știința în ceva practic.</q> - Marcio Barrios</h3>
                        <h3>PROFESOR: Istrate Iulia</h3>
                        <p>Pentru că totul în lumea reală se învârte în jurul informaţiei. întotdeauna are de câştigat cel care e mai bine informat. În secolul nostru calculatoarele au pătruns în majoritatea domeniilor de activitate deci, pentru a face faţă, este necesară o bună cunoaştere a lor.</p>
                        <p>Cercul de informatică structurat pe trei nivele: <strong>începători</strong>, <strong>avansaţi</strong> şi <strong>performanţă</strong> îşi propune iniţierea elevilor începători în domeniul informaticii completarea cunoştinţelor şi îmbunătăţirea performanţelor copiilor din grupele avansaţi şi performanţă.</p>
                        <p><strong>GRUPE:</strong> <strong>Grupele de inițiere</strong> vor studia componentele calculatorului, sistemul de operare Windows, editorul grafic Paint, utilizarea internetului, editorul de texte Microsoft Word și crearea de prezentări cu Microsoft PowerPoint. <strong>Grupele avansate</strong> vor studia algoritmi de programare precum C++, programarea în HTML, prelucrarea imaginilor și WebDesign.</p>
                    </div>
                    <div class="box23 info_bottom"></div>
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