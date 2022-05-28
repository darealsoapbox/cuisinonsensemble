<?php include_once('header.php'); ?>

<main class="container">
    <section class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2 class="titre">Recettes</h2>
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

        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2 class="titre">Ajoutez votre recette</h2>
        </div>
    </section>
</main>

<?php include_once('footer.php'); ?>