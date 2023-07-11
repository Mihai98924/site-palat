<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Cercul de electronică | Palatul Copiilor Bistrița</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../css/style_general.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="box box3">
                <div class="grid1">
                    <div class="box11">
                        <?php
                            include '../../noutati.txt';
                        ?>
                    </div>
                </div>
            </div>
            <div class="box4">
                <div class="grid2">
                    <div class="box21 electronica_top"></div>
                    <div class="box22">
                        <h2>Cercul de electronică</h2>
                        <h3>PROFESOR: <strong>Nicoară Dorel</strong></h3>
<!--
                        <p>Oferă copiilor posibilitatea de a combina construcțiile Lego cu soft- ul, putînd construi, programa și controla roboți, bazîndu- se pe tehnologia roboticii din viața reală, oferind oportunitatea de a introduce copiii în tainele programării într- un mod practic, distractiv și interactiv. Copiii vor avea posibilitatea să construiască diferite tipuri de roboți și apoi să- i programeze, testeze și să modifice instrucțiunile într- o varietate de comportamente ale roboților pentru îndeplinirea diverselor activități, utilizînd motoare, senzori, unități de control și softul de programare cu o interfață accesibilă, ușor de utilizat.</p>
                        <p>Această activitate își propune ghidarea copiilor în rezolvarea diverselor probleme prin gândire creativă, logică și muncă în echipă, asimilînd cunoștințe și dezvoltînd abilități esențiale, procesul de învățare devenind distractiv, joaca transformindu- se în asimilare de cunoștințe noi.</p>
-->
                        <p>Cercul de electronică din cadrul Palatului Copiilor Bistriţa, vine în întâmpinarea elevilor pasionaţi de acest fascinant domeniu al tehnicii, de lumea fizicii, de universul informaţiei şi comunicaţiilor,  cu oferte extracuriculare interesante, mereu adaptate preferinţelor elevilor, şi chiar cerinţelor unei economii de piaţă atât de dinamice.</p>
                        <p>Cercul se doreşte formator al gândirii tehnice de vârf, prin însuşirea şi aplicarea în practică a unor noţiuni de bază, chiar din clasele gimnaziale.</p>
                        <p>Cunoştinţele teoretice, dar mai ales aplicaţiile practice vor viza:<strong> 1.Cunoaşterea componentelor electronice şi a aplicaţiilor acestora; 2. Structura şi mentenanţa sistemelor de calcul ; 3.Construcţia unor montaje din domeniul automatizării, aparaturii de măsură şi audio;  4. Experimente vizând sursele de energie neconvenţionale regenerabile; 5.Cunoaşterea şi înţelegerea fenomenelor fizice, a terminologiei, a conceptelor şi a metodelor specifice domeniului fizicii; 6. Dezvoltarea capacităţilor de analizǎ şi sinteză; 7. Formarea unei atitudini critice faţǎ de efectele ştiinţei asupra dezvoltǎrii tehnologice şi sociale; 8. Participarea elevilor cu rezultate merituoase, la fazele judeţene şi naţionale ale competiţiilor tehnice de profil.</strong></p>
                        <p>Frecventând  Cercul de electronică, elevii vor  putea pune în practică ideile ştiinţifice, se vor bucura, şi vor bucura apropiaţii cu montajele şi aparatele realizate de ei, şi de ce nu, se vor putea număra printre cei ce participă la competiţii de profil, sau vor putea pune prima cărămidă în viitoarea lor  profesie.</p>
                    </div>
                    <div class="box23 electronica_bottom"></div>
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