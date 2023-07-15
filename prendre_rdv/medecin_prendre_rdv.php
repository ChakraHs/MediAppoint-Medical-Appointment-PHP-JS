<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="medcin-list">
            <div class="troix-card-medecin">
                <div class="un-medecin-card">
                    <div class="card-container">
                    <div class="card-medecin-header">
                        <div class="img-medecin"></div>
                        <div class="info-general">
                            <h4><?php echo $_SESSION["nomM"].' '.$_SESSION["prenomM"]; ?></h4>
                            <h5><?php echo $_SESSION["specialite"]; ?></h5>
                        </div>
                    </div>
                    <div class="card-medecin-infos">
                        <h5>
                        <?php echo '<h5><font style=" color: blue;">Centre: </font>'.$tupleb["nomc"].'
                                </h5>
                                <h5> <font style=" color: blue;">Ville: </font>'.$tupleb["ville"].'</h5>';
                        ?>
                        </h5>
                        <p>
                        </p>
                    </div>
                </div>
                </div>    
            </div>
        </div>
        
</body>
</html>