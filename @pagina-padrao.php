<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="HandheldFriendly" content="true">
        <meta name="description" content="Descrição teste">
        <title>Página inicial</title>
        <link type="image/png" rel="icon" href="imagens/identidadeVisual/logo-icon.png">
        <!--DEFAULT LINKS-->
        <?php
        require_once "@link-standard-requires.php";
        ?>
        <!--END DEFAULT LINKS-->
        <!--PAGE CSS-->
        <style></style>
        <!--END PAGE CSS-->
        <!--PAGE JS-->
        <script>
            $(document).ready(function(){
                console.log("Página inicializada");
            });
        </script>
        <!--END PAGE JS-->
    </head>
    <body>
        <!--REQUIRES PADRAO-->
        <?php
        require_once "@link-body-scripts.php";
        require_once "@include-header-principal.php";
        /*PAGE CUSTONS*/
        echo "<div class='main-content'>";

        echo "</div>";
            /*END PAGE CUSTONS*/
        require_once "@include-footer-principal.php";
        ?>
        <!--END REQUIRES PADRAO-->
    </body>
</html>
