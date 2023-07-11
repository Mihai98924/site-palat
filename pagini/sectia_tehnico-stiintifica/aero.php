<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Aeromodele | Palatul Copiilor Bistrița</title>
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
                    <div class="box21 aero_top"></div>
                    <div class="box22">
                        <h2>Cercul Aeromodele/Lego:</h2>
                        <h3>PROFESOR: <strong>Făgărășan Ioan</strong></h3>
                        <p><strong>AEROMODELE</strong> – aeromodelismul constituie forma cea mai simplă și posibilă de introducere a copiilor și elevilor în domeniul aviației, aceștia având posibilitatea, prin intermediul acestui gen de activitate, să ia contact direct cu legile și particularitățile zborului, cu tehnica construirii aparatelor de zbor. Prin specificul activității sale, aeromodelismul trezește dragostea și pasiunea pentru știință și tehnică a copiilor și elevilor.</p>
                        <p>În formarea specialistului de mâine, rolul activității este centrat pe cultivarea creativității, inventivității, răbdării și lucrului în echipă a elevilor, de ridicarea nivelului de cunoaștere tehnico-științifică. Exemplele însuflețitoare pe care viața lui Traian Vuia, Aurel Vlaicu, Henri Coandă le oferă, valorificate cu pricepere, vin să stimuleze și să susțină interesul și pasiunea membrilor cercului pentru activitatea creatoare pe care o desfășoară.</p>//2 grupe
                        <p><strong>Lego</strong> – reprezintă mai mult decât un joc, devenind un concept educațional ce face obiectul studiilor de cercetare comportamentală și de tehnici de învățare. Cu ajutorul seturilor Lego se predau în anumite școli și grădinițe, diverse materii, de la geografie la educație civică, de asemenea manualele de pedagogie din toată lumea includ tehnici de predare, folosind celebrul joc de construcție. </p>
                        <p>Prin implicarea activă în jocul de construcție, mai ales a unei grupe de copii, este stimulată dezvoltarea personală, socio-emoțională, prin activitățile de explorare, chestionare, gîndire, comunicare, dezvoltînd abilități de lucru în echipă, de înțelegere a diferențelor între oameni, realizindu-se platforma psihologică de relaționare cu ceilalți, construită pe respect solicitat și oferit.</p>//6 grupe
                    </div>
                    <div class="box23 aero_bottom"></div>
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