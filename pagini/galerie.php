<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Palatul Copiilor Bistrița</title>
        <meta charset="utf-8">
        <link href="../css/style_galerie.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../imagini/icon.png" rel="shortcut icon" type="image/png" sizes="32x32">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="grid">
            <div class="box box1">
                <h1><a href="../index.php">Palatul Copiilor Bistrița</a></h1>
            </div>
            <div class="box2">
                <a class="menu-trigger" id="menu-trigger" onclick="toggleClass()"><img src="imagini/icons8-menu-2.svg"></a>
                    <?php
                        include("meniu.txt");
                    ?>
            </div>
            <div class="box3 galereya" id="gallery" style="display:block;">
                <div class="galereya-top">
                    <ul class="galereya-cats">
                        <li class="galereya-cats-item"><span>Toate</span></li>
                        <li class="galereya-cats-item"><span>ABC-ul limbii germane</span></li>
                        <li class="galereya-cats-item"><span>Aeromodele/LEGO</span></li>
                        <li class="galereya-cats-item"><span>Agrobiologie</span></li>
                        <li class="galereya-cats-item"><span>Arta aranjării florilor</span></li>
                        <li class="galereya-cats-item"><span>Creație literară/Teatru</span></li>
                        <li class="galereya-cats-item"><span>Dans modern</span></li>
                        <li class="galereya-cats-item"><span>Dansuri populare</span></li>
                        <li class="galereya-cats-item"><span>Electronică</span></li>
                        <li class="galereya-cats-item"><span>Engleza interactivă</span></li>
                        <li class="galereya-cats-item"><span>GO</span></li>
                        <li class="galereya-cats-item"><span>Informatică</span></li>
                        <li class="galereya-cats-item"><span>Italiana creativă</span></li>
                        <li class="galereya-cats-item"><span>Navomodele</span></li>
                        <li class="galereya-cats-item"><span>Pictură/Desen</span></li>
                        <li class="galereya-cats-item"><span>Teatru</span></li>
                        <li class="galereya-cats-item"><span>Tenis de masă</span></li>
                        <li class="galereya-cats-item"><span>Turismul explorator prin viață</span></li>
                    </ul>
                </div>
                <div class="galereya-grid" style="width:100%;">
                    <div class="galereya-cell visible" data-index="0" data-visibleindex="0" style="top: 0px; left: 0px; display: block;">
                        <img src="../imagini/galerie/desen/desen1.jpg" class="galereya-cell-img">
                        <div class="galereya-cell-desc">
                            <div class="galereya-cell-desc-title"></div>
                            <div class="galereya-cell-desc-text">Desen</div>
                        </div>
                        <div class="galereya-cell-overlay">
                        </div>
                    </div>
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