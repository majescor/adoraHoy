<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cancion.css?v=2">
    <title>Desde mi interior</title>
</head>
<body>
   

<div class="cancion_wrapper">

    <?php
        $fp = fopen("canciones/desde_mi_interior.txt", "r");
        while (!feof($fp)){
            
            $linea = fgets($fp);
            
                echo '<div class="renglon">';
                echo ($linea)."<br/>";
                echo ' </div>';
                }
                    


        fclose($fp);

    ?>
    

</div>
    
</body>
</html>

