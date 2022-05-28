<?php include_once('header.php'); ?>

<main class="container bg-white">
    <section class="d-grid">
        <div class="p-2">
            <h2 class="titre text-center">Recettes</h2>
            <div class="d-flex">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul>
                        <li>
                            <a href="recettes.php">Toutes les recettes</a>
                        </li>
                        <li>
                            <a href="recettes.php?categorie=entree">Entrées</a>
                        </li>
                        <li href="recettes.php?categorie=plat">
                            <a href="recettes.php?categorie=plat">Plats</a>
                        </li>
                        <li href="recettes.php?categorie=dessert">
                            <a href="recettes.php?categorie=dessert">Desserts</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 d-sm-none d-md-block">
                    <img src="/images/logo.svg">
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