<div class="ajouter-block" id="ajouter">

    

                    <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "empty") == true) {
                            echo "<p class='red'>Veuillez remplir tous les champs </p>";
                        }
                    ?>


        <form action="traitinscrimed.php" method="POST">
            <table class="table-ajouter-medecin">
                <tr>
                    <td>
                        <label>
                            Nom
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Prenom
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prenom" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Date de naissance
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dn" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Numéro d'ordre des médecins
                            <?php 
                                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if (strpos($fullUrl, "idexiste") == true) {
                                    echo "<p class='red'>Ce numero d'ordre existe deja</p>";
                                }
                            ?>
                        </label>
                    </td>
                    <td>
                        <input type="text" name="no" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Spécialité
                        </label>
                    </td>
                    <td>
                        <input type="text" name="sp" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Numéro de téléphone
                        </label>
                    </td>
                    <td>
                        <input type="text" name="numtel" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Horaires d'ouverture (XXh-XXh)
                        </label>
                    </td>
                    <td>
                        <input type="text" name="ho" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Adresse mail
                        </label>
                    </td>
                    <td>
                        <input type="email" name="mail" id="">
                    </td>
                </tr>
            </table>
            <button type="submit" class="ajouter-btn">Ajouter</button>
        </form>
    </div>