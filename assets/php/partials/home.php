<main>

    <section id="title">
        <h2>SHOE THE RIGHT <span class="blue">ONE</span>.</h2>
        <section id="seeOurStore">See our store</section>
    </section>
    
    

    <section id="logo">
        <p id="nike">NIKE</p>
    </section>

    <div class="divSexy"></div>

    <h3 class="ourLastProducts"><span class="blue">Our</span> last products</h3>


    <?php   
    $productsJson = file_get_contents('../../data.json');
    $products = json_decode($productsJson, true);

    if (is_array($products)) {
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
            <section class="testimonialCard">
                <img class="portrait" src="assets/images/image-emily.jpg">
                <h3 class="testimonialName">Emily from xyz</h3>
                <p>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod accusantium at neque, quam corporis atque molestias vitae velit magnam dolor labore numquam sint eum doloribus. Porro, totam? Architecto, quasi? Corrupti."</p>
            </section>

            <section class="testimonialCard">
                <img class="portrait" src="assets/images/image-thomas.jpg">
                <h3 class="testimonialName">Thomas from corporate</h3>
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis molestias commodi molestiae quasi eius maxime corporis distinctio, tempore doloremque facere quaerat dolorum aliquid pariatur amet adipisci, qui repudiandae doloribus magni!"</p>
            </section>

            <section class="testimonialCard">
                <img class="portrait" src="assets/images/image-jennie.jpg">
                <h3 class="testimonialName">Jennie from Nike</h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod vitae nulla aut alias! Autem blanditiis, dignissimos reprehenderit, commodi aspernatur, iste tempora delectus consequuntur suscipit itaque magnam repellat nobis similique nemo."</p>
            </section>
        </article>

        
    </section>
    <div class="divSexy"></div>
</main>