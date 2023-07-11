<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Teatru | Palatul Copiilor Bistrița</title>
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
                    <div class="box21 teatru_top"></div>
                    <div class="box22">
                        <h2>Cercul de teatru</h2>
                        <h3 id="motto">MOTTO: <q>La teatru se învață bunul gust, conversaţia frumoasă, raporturile dintre oameni, costumul, găteala, ţinuta şi mişcarea. Atât ar fi de ajuns, însă şcoala teatrului e mult mai vastă. Educaţia prin artă dă adevărului întreaga frumuseţe şi în acelaşi timp ascute şi mintea.</q> - George Vraca</h3>
                        <h3>PROFESOR: Orban-Sima Antonia</h3>
                        <p>Comunicarea are o mulţime de înțelesuri, de scopuri şi cam tot atâtea metode de exprimare şi de manifestare. <q>Comunicarea înseamnă putere. Cei care îi stăpânesc modul de utilizare pot schimba modul în care percep lumea şi modul în care sunt ei înşişi percepuţi de lume</q> (Anthoni Robbins).</p>
                        <p>Adolescenţilor zilelor noastre le lipseşte curajul de a se exprima liber, în mod natural, pentru că nu au încredere în potenţialul lor, lucru datorat faptului că nu se cunosc pe ei înşişi. O componentă importantă în educaţie este descoperirea de sine, deoarece prin natura noastră suntem fiinţe sociale care comunică, înainte de toate, prin limbaj. Mulţi tineri găsesc cu dificultate modalitatea de a se exprima coerent, firesc şi în conformitate cu situaţia în care se află. Arta şi jocul sunt două modalităţi pe cât de plăcute, pe atât de complexe, prin care aceştia se pot descoperi şi pot deveni conştienţi  de potenţialul lor.</p>
                        <p>Procesul de creaţie presupune desfăşurarea unei activităţi de investigaţie şi metamorfoză. În arta dramatică, prin cercetare, intuiţie şi analiză, copilul/adolescentul descoperă personajul cerut de text, îl cunoaşte, îl înţelege, se identifică cu gândurile, sentimentele şi acţiunile lui, îşi reflectă realitatea în imagini, folosind limbajul formelor umane. Prin mijloace artistice învaţă să comunice şi să se comunice eficient, să-şi controleze emoţiile şi să-şi depășească inhibiţiile, învaţă să decodeze mesajele subliminale, să interpreteze şi să folosească mesajele nonverbale, ajungând în cele din urmă să se exprime în public fără reţineri şi cu uşurinţă. Arta dramatică presupune o comunicare complexă, fiindcă include atât comunicarea verbală cât şi comunicarea nonverbală şi paraverbală.</p>
                        <p>Trupa de teatru <strong>HELIOS</strong> ii asteapta pe toti copiii si adolescentii care, din curiozitate sau poate din pasiune,  doresc sa experimenteze emotiile scenei.</p>
                    </div>
                    <div class="box23 teatru_bottom"></div>
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