<html>
    <head>
        <title>æ</title>
        <meta charset="UTF-8">
        <meta name="author" content="enzocordeiro42">
    </head>
    <body>
        <form action="adicionar.php" method="POST">
            <label for="evento">evento: </label>
            <select name="evento" id="evento">
                <option value="aniversario">aniversario</option>
                <option value="musica">show de musica</option>
                <option value="stup">stand-up</option>
                <option value="feira">feira</option>
                <option value="churrasco">festa de churrasco</option>
            </select><br />
            <input type="submit" value="enviar">
        </form>
        <?php
            echo "evento: ". $_POST["evento"]. " ";
        ?>
    </body>
</html>