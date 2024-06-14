<?php require('./partials/start.php'); ?>

<?php
// Initialisation des variables
$firstname = $lastname = $email = $adresse = $city = $ZIP = $country = '';
$firstNameError = $lastNameError = $emailError = $adresseError = $cityError = $zipError = $countryError = null;
$defaultMsg = 'Please complete all entries with valid information';

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {
    $firstname = checkInput('firstName', 'a first name', '/^[A-Za-z]+$/', "Please enter only letters in your first name");
    $lastname = checkInput('lastName', 'a last name', '/^[A-Za-z]+$/', "Please enter only letters in your last name");
    $email = checkInput('email', 'an email', "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", 'Please enter a valid email');
    $adresse = checkAdresse('adresse', 'an address');
    $city = checkInput('city', 'a city', '/^[A-Za-z\s]+$/', "Please enter only letters in the city");
    $ZIP = checkInput('ZIP', 'a ZIP code', '/^[0-9]+$/', "Please enter only numbers in your ZIP code");
    $country = checkInput('country', 'a country', '/^[A-Za-z\s]+$/', "Please enter only letters in your country");

    // Si pas d'erreurs, afficher le message de confirmation
    if (empty($firstNameError) && empty($lastNameError) && empty($emailError) && empty($adresseError) &&
        empty($cityError) && empty($zipError) && empty($countryError)) {
        echo '<div class="pop-upWindow">Thank you for your order!</div>';
        $firstname = $lastname = $email = $adresse = $city = $ZIP = $country = '';
    }
}

// Fonction de vérification d'entrée
function checkInput($input, $missingMsg, $format, $wrongMsg) {
    global ${$input . 'Error'};
    if (isset($_GET[$input])) {
        $content = trim($_GET[$input]);
        if (strlen($content) > 0) {
            if (preg_match($format, $content)) {
                return $content;
            } else {
                ${$input . 'Error'} = $wrongMsg;
            }
        } else {
            ${$input . 'Error'} = "Please fill in $missingMsg.";
        }
    } else {
        ${$input . 'Error'} = "Please fill in $missingMsg.";
    }
    return '';
}

// Fonction de vérification d'adresse (sans regex)
function checkAdresse($input, $missingMsg) {
    global ${$input . 'Error'};
    if (isset($_GET[$input])) {
        $content = trim($_GET[$input]);
        if (strlen($content) > 0) {
            return $content;
        } else {
            ${$input . 'Error'} = "Please fill in $missingMsg.";
        }
    } else {
        ${$input . 'Error'} = "Please fill in $missingMsg.";
    }
    return '';
}
?>

<main>
    <section class="shop__cart">
        <section id="cart"> <!-- Contenu généré en JS --> </section>
    </section>
    <form action="" method="GET">
        <label for="firstName">First name: </label>
        <input name="firstName" id="firstName" type="text" value="<?php echo htmlspecialchars($firstname); ?>">
        <span><?php echo $firstNameError; ?></span>
        <br>

        <label for="lastName">Last name: </label>
        <input name="lastName" id="lastName" type="text" value="<?php echo htmlspecialchars($lastname); ?>">
        <span><?php echo $lastNameError; ?></span>
        <br>

        <label for="email">Email: </label>
        <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
        <span><?php echo $emailError; ?></span>
        <br>

        <label for="adresse">Adresse:</label>
        <input name="adresse" id="adresse" type="text" value="<?php echo htmlspecialchars($adresse); ?>">
        <span><?php echo $adresseError; ?></span>
        <br>

        <label for="city">City:</label>
        <input name="city" id="city" type="text" value="<?php echo htmlspecialchars($city); ?>">
        <span><?php echo $cityError; ?></span>
        <br>

        <label for="ZIP">ZIP code:</label>
        <input name="ZIP" id="ZIP" type="number" value="<?php echo htmlspecialchars($ZIP); ?>">
        <span><?php echo $zipError; ?></span>
        <br>

        <label for="country">Country:</label>
        <input name="country" id="country" type="text" value="<?php echo htmlspecialchars($country); ?>">
        <span><?php echo $countryError; ?></span>
        <br>

        <button type="submit">Confirm command</button><br>
    </form>
</main>

<?php require('./partials/end.php'); ?>
