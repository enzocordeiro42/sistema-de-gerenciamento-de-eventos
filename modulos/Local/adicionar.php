<html>
    <head>
        <title>æ</title>
        <meta charset="UTF-8">
        <meta name="author" content="enzocordeiro42">
    </head>
    <body>
        <form action="adicionar.php" method="POST">
            rua: <input type="text" name="rua"><br />
            <label for="ncasa1">numero</label>
            <select name="ncasa1" id="ncasa1">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            <select name="ncasa2" id="ncasa2">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            <select name="ncasa3" id="ncasa3">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select><br />
            <input type="submit" value="enviar">
        </form>
        <?php
            echo "rua: ". $_POST["rua"]. " ";
            echo "numero: ". $_POST["ncasa1"], $_POST["ncasa2"], $_POST[ncasa3];
        ?>
    </body>
</html>