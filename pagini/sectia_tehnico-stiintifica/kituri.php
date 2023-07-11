<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Programe | Palatul Copiilor Bistrița</title>
        <meta charset="utf-8">
        <link href="../../css/style_kituri.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <div class="box4">
                <div class="grid1">
                    <div class="table box11">
                        <div class="mij">
                            <p>Gimp versiunea 2.10.2 <a href="https://www.gimp.org" target="_blank">&darr;</a></p>
                            <p>Krita versiunea 4.0.4 <a href="https://krita.org/en/" target="_blank">&darr;</a></p>
                            <p>Notepad++ versiunea 7.5.6 32bit și 64bit <a href="https://notepad-plus-plus.org/download/v7.5.6.php" target="_blank">&darr;</a></p>
                            <p>Codeblocks versiunea 17.12 <a href="https://sourceforge.net/projects/codeblocks/files/Binaries/17.12/Windows/codeblocks-17.12mingw-setup.exe/download" target="_blank">&darr;</a></p>
                            <p>Brackets versiunea 1.13 <a href="https://github.com/adobe/brackets/releases" target="_blank">&darr;</a></p>
                            <p>Adobe Acrobat Reader DC versiunea 2018.011.20040 <a href="https://get.adobe.com/ro/reader/" target="_blank">&darr;</a></p>
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