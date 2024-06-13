<main>

    <section id="title">
        <h2>SHOE THE RIGHT <span class="blue">ONE</span>.</h2>
        <section id="seeOurStore">See our store</section>
    </section>
    
    

    <section id="logo">
        <p id="nike">NIKE</p>
    </section>

    <div class="divSexy"></div>

    <h3><span class="blue">Our</span> last products</h3>


    <?php   
    $productsJson = file_get_contents('../../data.json');
    $products = json_decode($productsJson, true);

    if (is_array($products)) {
        // Prenez les 4 derniers éléments du tableau
        $lastFourProducts = array_slice($products, -4);

        foreach ($lastFourProducts as $product) {
            echo '
                <div class="shop__card">
                    <img src="' . $product['image_url'] . '" alt="' . $product['product'] . '">
                    <div class="card__details">
                        <div class="card__details--name">
                            <p class="detail__name">' . $product['product'] . '</p>
                            <p class="detail__price">' . $product['price'] . '€</p>
                        </div>
                        <button class="card__btnAdd">Add to cart</button>
                    </div>
                </div>
                ';
        }
    } else {
        echo 'Erreur: le fichier JSON ne contient pas un tableau valide.';
    }
    ?>

    <section id="bestQuality">
        <div id="logo2"></div>

        <h2>WE PROVIDE YOU THE <span class="blue">BEST</span> QUALITY.</h2>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, beatae. Libero mollitia sequi blanditiis culpa voluptatem hic voluptatibus odio doloribus incidunt, dolores nihil necessitatibus, delectus explicabo. Maxime dicta nobis sint.</p>

        <article id="testimonials">

        </article>
    </section>
    

    <div id="divSexy"></div>
</main>