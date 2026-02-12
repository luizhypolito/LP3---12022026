<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 02</title>
</head>
<body>
    <h1>LP3 Aula 02</h1>

    <?php
    $xuxu = 8;
    echo "$xuxu <br>";
    echo '$xuxu <br>';
    echo 4 . "<br>";
    echo $xuxu;

    ?>

    <h3>Lista</h3>

    <ul>
        
        <?php 
            if($xuxu % 2 == 0){
                $resp = "Par";
            } else{
                $resp = "Impar";
            }
        ?>

        <li>Resposta <?php echo $resp; ?></li>

        <?php if($xuxu % 2 == 0) { ?>
            <li>A variável é Impar</li>
        <?php } else { ?>
            <li>A variável é Impar</li>
        <?php } ?>
                

    

        
        
    </ul>
    
</body>
</html>