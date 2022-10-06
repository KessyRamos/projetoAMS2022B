<?php
    $pN = (float)$_POST['txtNota1'];
    $sN = (float)$_POST['txtNota2'];
    $tN = (float)$_POST['txtNota3'];
    $media = ($pN + $sN + $tN) / 3;
    $situacao = "";
    if ($media >= 7)
    {
        $situacao = "Aprovado";
    }else{
        $situacao = "Reprovado";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Média</title>
</head>

<body>
    <div class="container">
        <h1>Média</h1>

        <form action="media.php" method="post">

            <label for="tPrimeiraN">
                Primeira Nota:
            </label>
            <br>
            <input type="text" name="txtNota1" id="tPrimeiraN" size="20" maxlength="2" readonly value="<?php echo $pN?>">
            <br><br>

            <label for="tSegundaN">
                Segunda Nota: 
            </label>
            <br>
            <input type="text" name="txtNota2" id="tSegundaN" size="20" maxlength="2" readonly value="<?php echo $sN?>">
            <br><br>

            <label for="tTerceiraN">
                Terceira Nota: 
            </label>
            <br>
            <input type="text" name="txtNota3" id="tTerceiraN" size="20" maxlength="2" readonly value="<?php echo $tN?>">
            <br><br>

            <label for="tMedia">
                Média: 
            </label>
            <br>
            <input type="text" name="txtMedia" id="tMedia" size="20" maxlength="4" readonly value="<?php echo $media?>">
            <br><br>

            <label for="tSituacao">
                Situação: 
            </label>
            <br>
            <input type="text" name="txtSituacao" id="tSituacao" size="20" maxlength="20" readonly value="<?php echo $situacao?>">
            <br><br>
            //Maju
        </form>           
    </div>
</body>
</html>
