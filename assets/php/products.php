<?php require('./partials/start.php') ?>

    <main>
        <?php require('./partials/popup.php') ?>
        <?php   
        $productsJson = file_get_contents('../../data.json');
        $products = json_decode($productsJson, true);
        foreach ($products as $product) {
            echo '
                <div class="shop__card">
                    <img src="' . $product['image_url'] . '" alt="' . $product['product'] . '">
                    <div class="card__details">
                        <div class="card__details--name" id="'.$product['id'].'">
                            <p class="detail__name">' . $product['product'] . '</p>
                            <p class="detail__price">' . $product['price'] . '€</p>
                        </div>
                        <button class="card__btnAdd">Add to cart</button>
                    </div>
                </div>
                ';
        }
        ?>
    </main>

<?php require('./partials/end.php') ?>