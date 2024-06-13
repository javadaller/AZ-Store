<?php require('./partials/start.php') ?>
    <main>
        <form action="" method="GET">
            <label for="firstName">first name: </label><br>
            <input name="firstName" id="firstName" type="text"><br><br>
            <label for="lastName">last name: </label><br>
            <input name="lastName" id="lastName" type="text"><br><br>
            <label for="email">Email: </label><br>
            <input type="text" name="email" id="email">
            <label for="adresse">adresse :</label>
            <input name="adresse" id="adresse" type="text"> 
            <label for="city">city :</label>
            <input name="city" id="city" type="text"> 
            <label for="ZIP">ZIP code :</label>
            <input name="ZIP" id="ZIP" type="number"> 
            <label for="country">country :</label>
            <input name="country" id="country" type="text"> 
            <button type="submit">confirm command</button><br>
        </form>
        <?php
            $firstname = cleanInput('firstName', '');
            $lastname = cleanInput('lastName', '');
            $email = cleanInput('email', '');
            $adresse = cleanInput('adresse', '');
            $city = cleanInput('city', '');
            $ZIP = cleanInput('ZIP', '');
            $country = cleanInput('country', '');

            if (isset($firstname) && isset($lastname) && isset($email) && validEmail($email) && isset($adresse) && isset($city) && isset($ZIP) && isset($country)){
                echo '<div class="pop-upWindow">Thank you for your order!</div>';
                $firstname = null;
                $lastname = null;
                $email = null;
                $adresse = null;
                $city = null;
                $ZIP = null;
                $country = null;
            }else{
                echo '<div>Please enter all entries corectly</div>';
            }

            
                
            function cleanInput($input, $errorMessage){
                if (isset($_GET[$input])){
                    $content = trim($_GET[$input]);
                    if (strlen($content) > 0){
                        return $content;
                    }
                }
                echo $errorMessage;   
                return null;
            }
            function validEmail($emailToCheck) {
                $valid = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";
                return ($emailToCheck == $valid);
            }
            
        ?>
        
    </main>
<?php require('./partials/end.php') ?>
