<!DOCTYPE html>
<html lang="en" data-theme="light">

    <head>

        <title>AZ-Store</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!--<link rel="icon" type="svg" href="assets/images/icons/calendar-todo-line.svg">-->
        
    </head>
    <body>
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
                $firstname = $_GET['firstName'];
                $lastname = $_GET['lastName'];
                $email = $_GET['email'];
                $adresse = $_GET['adresse'];
                $city = $_GET['city'];
                $ZIP = $_GET['ZIP'];
                $country = $_GET['country'];
                if ((isset()) && (isset()) && (isset()) && (isset()) &&
                (isset()) && (isset()) && validEmail(isset())){
                    
                }
                
                function validatetextForm(){

                }
                function validEmail($emailToCheck) {
                    $valid = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";
                    return ($emailToCheck == $valid);
                }
                
             ?>
        </main>
        <?php require('./partials/footer.php') ?>
    </body>
</html>