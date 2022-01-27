<?php
/*
Template name: Cube Concept Theme
*/
get_header();

?>


    <div class="services-img-background">
        <h2>Vous cherchez un professionnel pour vos travaux ? </h2>

        <a href="">
            <p>Contactez-nous</p>
        </a>
    </div>

    <div class="services-description">

        <h1>Cube Concept</h1>

        <p> Un sinistre ? Un projet ? Nous nous occuperons de tout, une seule personne de référence, confié nous votre
            projet ! De la démolition, au parachèvement. De l'installation électrique en passant par la domotique,
            jusqu'à la remise en conformité. Une nouvelle chaudière, une meilleure isolation, des conseils en vu d'une
            location ... </p>

        <a href="">
            <p class="services-link">Découvrez nos services</p>
        </a>
    </div>


    <div class="services-content">

        <div class="services-card">
            <?php echo demolition_image() ?>

            <div class="services-card-text">
                <p>Démolition et évacuation</p>
            </div>
        </div>
        <div class="services-card">
            <?php echo nettoyage_image() ?>

            <div class="services-card-text">
                <p>Nettoyage</p>
            </div>
        </div>
        <div class="services-card">
            <?php echo plafonnage_image() ?>

            <div class="services-card-text">
                <p>Plafonnage</p>
            </div>
        </div>
        <div class="services-card">
            <?php echo carrelage_image() ?>

            <div class="services-card-text">
                <p>Carrelage</p>
            </div>
        </div>
        <div class="services-card">
            <?php echo parachevement_image() ?>

            <div class="services-card-text">
                <p>Parachèvement</p>
            </div>
        </div>

        <div class="services-card">
            <?php echo cloisons_image() ?>

            <div class="services-card-text">
                <p>Cloisons et plafonds</p>
            </div>
        </div>

        <div class="services-card">
            <?php echo isolation_image() ?>

            <div class="services-card-text">
                <p>Isolation</p>
            </div>
        </div>

        <div class="services-card">
            <?php echo elec_image() ?>

            <div class="services-card-text">
                <p>électricité et éclairage</p>
            </div>
        </div>

        <div class="services-card">
            <?php echo domotique_image() ?>

            <div class="services-card-text">
                <p>Domotique</p>
            </div>
        </div>

        <div class="services-card">
            <?php echo pvc_image() ?>

            <div class="services-card-text">
                <p>Pose de châssis PVC et alu</p>
            </div>
        </div>

    </div>


<?php
get_footer() ?>