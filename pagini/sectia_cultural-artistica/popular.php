<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Dans popular | Palatul Copiilor Bistrița</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/style_general.css" rel="stylesheet" type="text/css">
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
                    <div class="box21 popular_top"></div>
                    <div class="box22">
                        <h2>Cercul de dansuri populare</h2>
                        <h3 id="motto">MOTTO:<q> </q> - </h3>
                        <h3>PROFESOR: Pușcaș Teodor</h3>
                        <p>Identitatea unui popor, este cunoscută prin tradiţia populară. Una din formele de manifestare a acesteia este <strong>Dansul popular</strong>. Cunoaşterea tradiţiilor este o datorie de onoare.</p>
                        <p>Dansul este una din cele mai vechi arte ale omenirii, naşterea şi dezvoltarea lui fiind strâns legate de dezvoltarea societăţii umane şi a culturii acesteia. Dansul popular românesc este o manifestare artistică colectivă,care se exprimă direct,în mod natural şi original. El exprimă în forme variate viaţa socială a poporului şi se caracterizează printr-o bogăţie nesfârşită de mişcări izvorâte din miile de jocuri existente printr-o mare varietate de stiluri proprii.</p>
                        <p>Elementele de dans popular sunt mijloace cu ajutorul cărora se dezvoltă la copii: spiritul de echipă,voinţa,dăruirea,perseverenţa,dragostea de frumos,dragostea faţă de arta poporului român,faţa de creatorii ei.</p>
                        <p>Activitatea de dans popular vizează lărgirea orizontului de cunoaştere, prin asigurarea accesului nemijlocit la valorile culturii şi civilizaţiei naţionale şi universale.</p>
                        <p>La cercul de dansuri populare, din cadrul Palatului Copiilor Bistrița activează elevi de la diferite şcoli şi licee din municipiul Bistriţa şi împrejurimi, cu vârste între 6 – 18 ani.</p>
                    </div>
                    <div class="box23 popular_bottom"></div>
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