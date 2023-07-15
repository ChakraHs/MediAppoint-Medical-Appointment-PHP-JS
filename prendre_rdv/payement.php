<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="payement" id="payement">
                    <h3>Je paye</h3>
                    <div class="container-payement-form">
                    <?php
                            if($_SESSION['champ-empty-p'] == 'ok'){
                                echo '<h5 class="red-titre"> Tous les champs doivent être remplis </h5>';
                            }
                    ?>
        <div class="first-row">
            <div class="owner">
                <h4>Propriétaire (Nom et prenom)</h4>
                <div class="input-field">
                    <input type="text" name="pr">
                </div>
            </div>
            <div class="cvv">
                <h4>CVV</h4>
                <div class="input-field">
                    <input type="password" name="cvv">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h4>Numéro de la carte</h4>
                <div class="input-field">
                    <input type="text" name="ncarte">
                </div>
            </div>
        </div>
        <div class="third-row">
            <h4>Date d'experation</h4>
            <div class="selection">
                <div class="date">
                    <select name="month" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="year" id="years">
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="img/mc.png" alt="">
                    <img src="img/vi.png" alt="">
                    <img src="img/pp.png" alt="">
                </div>
            </div>    
        </div>
    </div>
                    </div>
</body>
</html>