<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Pictură / Desen | Palatul Copiilor Bistrița</title>
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
                    <div class="box21 desen_top"></div>
                    <div class="box22">
                        <h2>Cercul de pictură-desen</h2>
                        <h3 id="motto">MOTTO: <q>Fiecare copil este un artist. Problema este cum să rămână și după ce va crește.</q> - Pablo Picasso</h3>
                        <h3>PROFESOR: dr. <strong>Morar Diana</strong></h3>
                        <p><strong>PREZENTAREA CERCULUI:</strong> Activitățile de la cercul de Pictură-Desen au în vedere dezvoltarea creativitătți copiilor, deprinderea de tehnici artistice noi și orientarea acestora spre   a-și defini o arie proprie de exprimare. Prin tematica abordată se încearcă dobândirea  de cunoștințe artistice utile dezvoltării culturale a copiilor și a implicării lor în cadrul acestui tip de acțiuni ale comunității.</p>
                        <p><strong>GRUPE:</strong> Copiii care doresc să participe la acest cerc se pot inscrie la una dintre cele <strong>3 grupe de începători</strong>, <strong>4 de avansați</strong> și <strong>una de performanță</strong>. Pentru grupele de începători tematica dorește să acopere o arie cât mai mare a exprimării artistice cu notțuni despre culoare, compoziții, studii după natură. Grupele de avansați  au tematici diferite pentru fiecare în parte, astfel: <em>Pictură pe sticlă</em>, <em>Pictură pe lemn</em>, <em>Pictură-Desen</em> și <em>Artă texlită</em>. Pentru fiecare dintre aceste specializări se are în vedere dezvolarea limbajului plastic în  exprimarea artistică în specificul fiecarei tehnici în parte. La <strong>grupa de performanță</strong> se încercă definirea și încurajarea direcților artistice personale ale elevilor și familiarizarea cu manifestări ale  artei contemporane mondiale.</p>
                        <p>De asemenea se va incuraja spiritul de initiativă și cel competitiv prin susținerea de proiecte expoziționale personale ale elevilor și participarea la concursuri de profil.</p>
                        <h3>Vă aștept la Pictură!</h3>
                    </div>
                    <div class="box23 desen_bottom"></div>
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