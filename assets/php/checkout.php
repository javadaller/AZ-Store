<?php require('./partials/start.php') ?>
    <main>

        
        <form action="" method="GET">
            <label for="firstName">first name: </label>
            <input name="firstName" id="firstName" type="text" value=<?php $firstname; ?>>
            <label for="lastName">last name: </label>
            <input name="lastName" id="lastName" type="text" value=<?php $lastname; ?>>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" value=<?php $email; ?>>
            <label for="adresse">adresse :</label>
            <input name="adresse" id="adresse" type="text" value=<?php $adresse; ?>> 
            <label for="city">city :</label>
            <input name="city" id="city" type="text" value=<?php $city; ?>> 
            <label for="ZIP">ZIP code :</label>
            <input name="ZIP" id="ZIP" type="number" value=<?php $ZIP; ?>> 
            <label for="country">country :</label>
            <input name="country" id="country" type="text" value=<?php $country; ?>> 
            <button type="submit">confirm command</button><br>
        </form>
        <?php
            $defaultMsg = 'Please complete all entries with valid information';
            $emptyInput = null;
            $firstname = checkInput('firstName', 'a first name', '/^[A-Za-z]+$/', "please enter only letter in your first name");
            $lastname = checkInput('lastName', 'a last name', '/^[A-Za-z]+$/', "please enter only letter in your last name");
            $email = checkInput('email', ' an email', "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", 'please enter a valid email');
            $adresse = checkAdresse('adresse', 'an adresse');
            $city = checkInput('city', 'a city', '/^[A-Za-z]+$/', "please enter only letter in the city");
            $ZIP = checkInput('ZIP', 'a ZIP code', '/^[0-9]+$/', "please enter only number in your ZIP code");
            $country = checkInput('country', 'a country', '/^[A-Za-z]+$/', "please enter only letter in your country");
            

            if ($emptyInput == null){
                echo '<div class="pop-upWindow">Thank you for your order!</div>';
                $firstname = null;
                $lastname = null;
                $email = null;
                $adresse = null;
                $city = null;
                $ZIP = null;
                $country = null;
            }else{
                echo "<div>$emptyInput</div>";
            }

            function checkInput($input, $missingMsg, $format, $wrongMsg){
                if (isset($_GET[$input])){
                    $content = trim($_GET[$input]);
                    if (strlen($content) > 0 && $format == $content){
                        return $content;
                    }else{
                        global $emptyInput;
                        global $defaultMsg;
                        if ($emptyInput == null){
                            $emptyInput = $wrongMsg;
                        }else{
                            $emptyInput = $defaultMsg;
                        }
                    }
                }else{
                    global $emptyInput;
                    global $defaultMsg;
                    if ($emptyInput == null){
                        $emptyInput = 'please fill in a ' . $missingMsg;
                    }else{
                        $emptyInput = $defaultMsg;
                    }
                }

                return null;
            }

            function checkAdresse($input, $missingMsg){
                if (isset($_GET[$input])){
                    $content = trim($_GET[$input]);
                    if (strlen($content) > 0){
                        return $content;
                    }
                }else{
                    global $emptyInput;
                    global $defaultMsg;
                    if ($emptyInput == null){
                        $emptyInput = 'please fill in a ' . $missingMsg;
                    }else{
                        $emptyInput = $defaultMsg;
                    }
                }
                return null;
            }
    
        ?>
        
    </main>
<?php require('./partials/end.php') ?>
