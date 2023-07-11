<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Palatul Copiilor Bistrița</title>
        <meta charset="utf-8">
        <link href="css/style_index.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="imagini/icon.png" rel="shortcut icon" type="image/png" sizes="32x32">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="grid">
            <div class="box box1">
                <h1><a href="index.php">Palatul Copiilor Bistrița</a></h1>
            </div>
            <div class="box2">
                <a class="menu-trigger" id="menu-trigger" onclick="toggleClass()"><img src="imagini/icons8-menu-2.svg"></a>
                    <?php
                        include("meniu.txt");
                    ?>
            </div>
            <div class="box box3">
                <div class="grid1">
                    <div class="box11">
                        <?php
                            include("noutati.txt");
                        ?>
                    </div>
                </div>
            </div>
            <div class="box box4">
<!--
                <p><a href="pagini/inscriere.php">inscriere</a></p>
                <p><a href="pagini/sectia_tehnico-stiintifica/kituri.php">kituri info</a></p>
                <p><a href="pagini/galerie.php">galerie</a></p>
                <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeHfda4GbHLFKrRiZYcL1Py8pg1SoyCgkCmY0schAw7q0cuKQ/viewform">formular</a></p>
                <p><a href="pagini/management/management.php">management</a></p>
-->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus aliquet purus, et scelerisque elit laoreet id. Ut a felis eget elit finibus elementum vel a dui. Aliquam bibendum tempor tincidunt. Sed at nibh ex. Vestibulum luctus mauris turpis, quis auctor lacus tincidunt eu. Pellentesque eget ipsum magna. Morbi facilisis varius massa at congue. Pellentesque a libero eu nibh sagittis lobortis. Nunc placerat, urna quis facilisis consequat, urna augue venenatis nunc, sed finibus lectus nisl vel dui. Mauris ultricies interdum dui, rhoncus tincidunt massa luctus sit amet. Curabitur tincidunt interdum quam at feugiat. Nunc blandit dolor nulla, a suscipit erat laoreet eget. Duis id varius quam.<br>

Curabitur quis viverra libero, eu egestas nulla. Nam ac pharetra turpis. Sed id sem porta, dictum felis et, bibendum nibh. In id mattis odio. Sed ac nisi quis mi vulputate molestie. Nullam id laoreet nibh. Quisque at eros ut mauris hendrerit ornare. Nulla luctus diam id nunc molestie dictum. Aenean nec urna urna.<br>

Aenean euismod odio leo, nec aliquet arcu eleifend vitae. Etiam nisl ipsum, ornare a fermentum ac, tempor non arcu. Ut molestie hendrerit elementum. Donec nisl nisl, finibus eget commodo euismod, pellentesque eget ipsum. Sed congue mattis ante. Morbi posuere odio a purus efficitur, porta lobortis mi tristique. Sed gravida nisi vel imperdiet lacinia. Proin vel consectetur nulla. Suspendisse porttitor ligula a risus sagittis viverra. Praesent non porta libero, eget dictum arcu. Aliquam sed urna faucibus, porttitor quam eu, bibendum urna. Donec tempor quam eu arcu aliquam bibendum. Quisque velit eros, bibendum ac laoreet sed, auctor commodo odio. Vestibulum mattis est eros.<br>

Vivamus auctor purus quis gravida iaculis. Nullam a elit ac eros blandit ullamcorper. Praesent id nisi ac metus condimentum ornare. Suspendisse vulputate leo nec faucibus feugiat. Aliquam cursus lorem ut tellus sagittis suscipit. Vestibulum sed orci varius, consectetur lectus quis, aliquam augue. Integer nec velit at augue maximus accumsan non in nibh. Suspendisse potenti. Nullam fringilla quis quam malesuada sollicitudin. Ut bibendum nec diam eu tristique.<br>

Sed feugiat pellentesque erat, ac semper ante rhoncus quis. Aenean lobortis arcu eget diam consequat consectetur. Integer cursus lacinia mattis. Pellentesque porta bibendum euismod. Sed maximus mauris nisi, ultrices commodo diam finibus eget. Proin volutpat neque at est placerat luctus. Nullam gravida, lorem in consectetur gravida, urna est lacinia lacus, in cursus mauris nibh sed erat. Vivamus in eros in est mollis ultrices. Cras urna metus, pretium sit amet finibus eget, porta eu purus. Aenean venenatis malesuada est. Ut posuere enim pulvinar, euismod ante id, dictum purus. Praesent eros justo, lacinia quis mi at, maximus varius dolor. Phasellus sollicitudin velit est.</p>
                <img src="imagini/index.jpg" style="float:left;width:400px;padding-right:10px;"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus aliquet purus, et scelerisque elit laoreet id. Ut a felis eget elit finibus elementum vel a dui. Aliquam bibendum tempor tincidunt. Sed at nibh ex. Vestibulum luctus mauris turpis, quis auctor lacus tincidunt eu. Pellentesque eget ipsum magna. Morbi facilisis varius massa at congue. Pellentesque a libero eu nibh sagittis lobortis. Nunc placerat, urna quis facilisis consequat, urna augue venenatis nunc, sed finibus lectus nisl vel dui. Mauris ultricies interdum dui, rhoncus tincidunt massa luctus sit amet. Curabitur tincidunt interdum quam at feugiat. Nunc blandit dolor nulla, a suscipit erat laoreet eget. Duis id varius quam.<br>

Curabitur quis viverra libero, eu egestas nulla. Nam ac pharetra turpis. Sed id sem porta, dictum felis et, bibendum nibh. In id mattis odio. Sed ac nisi quis mi vulputate molestie. Nullam id laoreet nibh. Quisque at eros ut mauris hendrerit ornare. Nulla luctus diam id nunc molestie dictum. Aenean nec urna urna.<br>

Aenean euismod odio leo, nec aliquet arcu eleifend vitae. Etiam nisl ipsum, ornare a fermentum ac, tempor non arcu. Ut molestie hendrerit elementum. Donec nisl nisl, finibus eget commodo euismod, pellentesque eget ipsum. Sed congue mattis ante. Morbi posuere odio a purus efficitur, porta lobortis mi tristique. Sed gravida nisi vel imperdiet lacinia. Proin vel consectetur nulla. Suspendisse porttitor ligula a risus sagittis viverra. Praesent non porta libero, eget dictum arcu. Aliquam sed urna faucibus, porttitor quam eu, bibendum urna. Donec tempor quam eu arcu aliquam bibendum. Quisque velit eros, bibendum ac laoreet sed, auctor commodo odio. Vestibulum mattis est eros.<br>

Vivamus auctor purus quis gravida iaculis. Nullam a elit ac eros blandit ullamcorper. Praesent id nisi ac metus condimentum ornare. Suspendisse vulputate leo nec faucibus feugiat. Aliquam cursus lorem ut tellus sagittis suscipit. Vestibulum sed orci varius, consectetur lectus quis, aliquam augue. Integer nec velit at augue maximus accumsan non in nibh. Suspendisse potenti. Nullam fringilla quis quam malesuada sollicitudin. Ut bibendum nec diam eu tristique.<br>

Sed feugiat pellentesque erat, ac semper ante rhoncus quis. Aenean lobortis arcu eget diam consequat consectetur. Integer cursus lacinia mattis. Pellentesque porta bibendum euismod. Sed maximus mauris nisi, ultrices commodo diam finibus eget. Proin volutpat neque at est placerat luctus. Nullam gravida, lorem in consectetur gravida, urna est lacinia lacus, in cursus mauris nibh sed erat. Vivamus in eros in est mollis ultrices. Cras urna metus, pretium sit amet finibus eget, porta eu purus. Aenean venenatis malesuada est. Ut posuere enim pulvinar, euismod ante id, dictum purus. Praesent eros justo, lacinia quis mi at, maximus varius dolor. Phasellus sollicitudin velit est.</p>
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