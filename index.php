<?php include_once('header.php'); ?>

<main class="container">
    <section class="bloc-1 d-grid">
        <div class="recettes p-2">
            <h2 class="titre text-center">Recettes</h2>
            <div class="d-flex">
                <div class="col-lg-6 col-md-6 col-sm-12 d-block">
                    <ul class="menu">
                        <li>
                            <a id="bouton_toutes_les_recettes" href="recettes.php">Toutes les recettes</a>
                        </li>
                        <li>
                            <a id="bouton_entrees" href="recettes.php?categorie=entrees">Entrées</a>
                        </li>
                        <li>
                            <a id="bouton_plats" href="recettes.php?categorie=plats">Plats</a>
                        </li>
                        <li>
                            <a id="bouton_desserts" href="recettes.php?categorie=desserts">Desserts</a>
                        </li>
                        <li>
                            <a id="bouton_boissons" href="recettes.php?categorie=boissons">Boissons</a>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-md-block col-lg-6 col-md-6">
                    <img id="photo_cuisine" src="/images/cuisine.jpg" width="100%" height="100%">
                </div>
            </div>
        </div>

        <div class="p-2">
            <h2 class="titre text-center">Proposez votre recette</h2>
            <ol>
                <li>Remplissez la liste des ingrédients</li>
                <li>Remplissez la liste des étapes</li>
                <li>Ajoutez une vidéo (facultatif)</li>
                <li>Ajoutez une photo (facultatif)</li>
                <li>Validez !</li>
            </ol>
            <a href="/proposer-recette.php">Proposez votre recette ici</a>
        </div>
    </section>
</main>

<?php include_once('footer.php'); ?>