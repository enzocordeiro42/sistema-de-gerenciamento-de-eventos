<html>
    <head>
        <title>æ</title>
        <meta charset="UTF-8">
        <meta name="author" content="enzocordeiro42">
    </head>
    <body>
        <form action="adicionar.php" method="POST">
            <label for="equipamento">equipamento: </label>
            <select name="equipamento" id="equipamento">
               <option value="luzpalco">luz de palco</option>
               <option value="fritadeira">fritadeira eletrica</option>
               <option value="som">equipamento de som</option>
               <option value="fumaça">maquina de fumaça</option>
               <option value="espelhos">bola de espelhos</option>
            </select><br />
            <input type="submit" value="enviar">
        </form>
        <?php
            echo "equipamento: ". $_POST["equipamento"]. " ";
            if($_POST["equipamento"] == "luzpalco"){
                echo "preço: 350";
            }elseif($_POST["equipamento"] == "fritadeira"){
                echo "preço: 550";
            }elseif($_POST["equipamento"] == "som"){
                echo "preço: 250";
            }elseif($_POST["equipamento"] == "fumaça"){
                echo "preço: 210";
            }elseif($_POST["equipamento"] == "espelhos"){
                echo "preço: 160";
            }
        ?>
    </body>
</html>