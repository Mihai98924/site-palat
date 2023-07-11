<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Creație literară / Teatru | Palatul Copiilor Bistrița</title>
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
                    <div class="box21 literatura_top"></div>
                    <div class="box22">
                        <h2>Cercul de creație literară / teatru</h2>
                        <h3 id="motto">MOTTO: <q>Și-un secret de vrei să-ți zic:/ Bine-ar fi să rămâi mic,/ Căci, universul meu, știi,/ E făcut pentru copii!</q> – Ana Blandiana</h3>
                        <h3>PROFESOR: Nușfelean Ionela</h3>
                        <p><strong>PREZENTAREA CERCULUI:</strong> Cercul de teatru/ creație literară își propune să stimuleze creativitatea/ expresivitatea copiilor, prin diverse jocuri și experimente specifice, în vederea exprimării sensibilității, a dobândirii dezinvolturii/ spontaneității, pentru o integrare fastă în comunitate și în peisajul cultural.</p>
                        <p><strong>GRUPE:</strong> Activitățile sunt structurate pe grupe de începători, avansați, performanță: Teatru, Arta Scenei mici, Creație literară, Poezia Credinței și Jurnalism. La fiecare dintre acestea, elevul este solicitat să-și asume propriul statut expresiv în context cultural  sau să interpreteze un rol anume, empatizând cu personaje și, implicit, cu semeni. La Arta Scenei mici, elevii vor fi familiarizați cu câteva reguli necesare în Cucerirea Scenei. La Creație literară – vor învăța să-și exprime sensibilitatea creatoare. La Poezia Credinței, vor exersa rolul de voluntar literar, iar la Jurnalism,  vor recepta mișcările artistice ale Palatului și nu numai, diseminând în presă modele de bune practici. Scenariile imaginate își vor urma treptat, pe măsura performanței, drumul spre scenele/ revistele de profil, elevii fiind îndemnați să-și asume pasiunea cu responsabilitate. Până la urmă, consider că proiectele întreprinse în peisajul emoțional teatral/ literar se constituie în trepte ale artei de a fi.</p>
                        <p>Vă așteptăm să experimentăm cum se poate face chiar și „din aproape nimic”, prin talent și dăruire, ”aproape orice”!</p>
                    </div>
                    <div class="box23 literatura_bottom"></div>
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