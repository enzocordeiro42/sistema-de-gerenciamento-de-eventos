<html>
    <head>
        <title>æ</title>
        <meta charset="UTF-8">
        <meta name="author" content="enzocordeiro42">
    </head>
    <body>
        <form action="adicionar.php" method="POST">
          nome: <input type="text" name="nome"><br />
          <label for="trabalho">trabalho: </label>
          <select name="trabalho" id="trabalho">
            <option value="ger">gerenciamento</option>
            <option value="ilu">iluminação</option>
            <option value="pub">publicidade</option>
            <option value="alfa">alto falantes</option>
            <option value="patrocinios">patrocinios</option>
          </select> <br />
          <input type="submit" value="enviar">
        </form>
        <?php
            echo "nome: ". $_POST["nome"]. " ";
            echo "trabalho: ". $_POST["trabalho"]. " ";
        ?>
    </body>
</html>