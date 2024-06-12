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

    <header>
        
    </header>

    <main>

        <?php   
        $productsJson = file_get_contents('../../data.json');
        $products = json_decode($productsJson, true);
        foreach ($products as $product) {
            echo '
                <div class="shop__card">
                    <img src="' . $product['image_url'] . '" alt="' . $product['product'] . '">
                    <div class="card__details">
                        <button>Add to cart</button>
                        <div class="card__details--name">
                            <p class="detail__name">' . $product['product'] . '</p>
                            <p class="detail__price">' . $product['price'] . '€</p>
                        </div>
                    </div>
                </div>
                ';
        }
        ?>


        
    </main>

    <?php require('./partials/footer.php') ?>

</body>

<script type="module" src="assets/js/main.js"></script>

</html>