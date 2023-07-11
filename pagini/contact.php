<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Contact | Palatul Copiilor Bistrița</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style_contact.css" rel="stylesheet" type="text/css">
        <link href="../imagini/icon.png" rel="shortcut icon" type="image/png" sizes="32x32">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="grid">
            <div class="box box1">
                <h1><a href="../index.php">Palatul Copiilor Bistrița</a></h1>
            </div>
            <div class="box2">
                <a class="menu-trigger" id="menu-trigger" onclick="toggleClass()"><img src="../imagini/icons8-menu-2.svg"></a>
                    <?php
                        include("meniu.txt");
                    ?>
            </div>
            <div class="box3">
                <div class="grid1">
                    <div class="box11 1box"><br><br>
                        <!--descriere -->
                        <p>Palatul Copiilor Bistrița</p>
                        <p>Strada Florilor nr 3-5, Bistrița, etajul II</p>
                        <p>Telefon: 0263 211 682</p>
                        <p>Email: palatulcopiilorbn@yahoo.com</p>
                        <p>Mijloace de transport în comun: <a href="../documente/STATIA%20NR%209%20LAMA2.pdf">stația 9</a> și <a href="../documente/STATIA%20NR%2015%20LAMA.pdf">stația 15</a></p>
                    </div>
                    <div class="box12 1box" id="map"><!--harta -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12688.680747297598!2d24.48540278815954!3d47.136443165177376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x69f90e2589522a5c!2sPalatul+Copiilor!5e0!3m2!1sro!2sro!4v1529427396872" frameborder="0" style="border:0;width:100%;height:100%" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="box4">
                <div class="social">
                            <a class="fa fa1 fa-facebook" href="https://www.facebook.com/Palatul-Copiilor-Bistrita-316445421761319/" target="_blank"></a>
                            <a class="fa fa1 fa-yahoo" href="mailto:palatulcopiilorbn@yahoo.com" target="_blank"></a>
                            <a class="fa fa1 fa-twitter" target="_blank"></a>
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