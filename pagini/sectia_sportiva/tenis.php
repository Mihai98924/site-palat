<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Tenis de masă | Palatul Copiilor Bistrița</title>
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
                    <div class="box21 tenis_top"></div>
                    <div class="box22">
                        <h2>Cercul de tenis de masă</h2>
                        <h3 id="motto">MOTTO:<q> </q> - </h3>
                        <h3>PROFESOR: Deac Călin</h3>
                        <p>Activitatea din cadrul cercului de Tenis de masa de la Palatul Copiilor Bistrita are ca principal obiectiv sa formeze priceperi si deprinderi  specific e acestui domeniu, bazandu-se pe o programa scolara in vigoare, la nivelul grupelor scolare si posibilitatile materiale dotarii cercului.
                        <p>De asemenea prin participarea elevilor din diferite scoli gimnaziale-liceale si C.S.E.I. ale Mun. Bistrita si Jud.B-N. la cercul Tenis de masa de la Palatul Copiilor Bistrita ne propunem prin activitatea cercului sa stimulam dorinta de a practica acest sport atat de frumos si nobil din placere si dorinta de a fi mai sanatos din toate punctele de vedere psihic si fizic, iar elevii cu calitati fizice si intelectuale deosebite sa fie indrumati spre sportul de performanta sau activitati didactice la un nivel foarte ridicat.</p>
                        <p>Tenisul de masa se poate practica in orice anotimp din an, acest sport putand fi practicat fara o pregatire fizica prealabila atat individual cat si pe echipe valorificand pozitiv aptitudinile si inclinatiile elevilor dotati pentru acest sport, iar caracterul sau spectaculos il face sa fie foarte indragit de elevii care il practica.</p>
                        <p>Criteriile pe care sunt constituite grupele de la cerc sunt pe categorii de varsta si scolarizare, acestea fiind de la grupa 0, grupa mare, cls. I-IV, V-VIII, IX-XII si clase profesionale de meserii cat si elevi cu C.E.S. (cerinte educationale special) din cadrul C.S.E.I. (centre scolare educationale incluzive), din Mun.Bistrita si Jud.B-N.</p>
                        <p>Mentinerea elevilor inscrisi la cercul Tenis de masa se face prin promovarea in permanenta a elevilor in activitatea de baza sportiva Tenis de masa cat si in activitatile educative din cadrul Palatului Copiilor Bistrita – cocursuri, spectacole, excursii, intruniri, dezbateri tematice educative, drumetii, actiuni de socializare etc. 
                        </p>
                    </div>
                    <div class="box23 tenis_bottom"></div>
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