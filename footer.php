<footer id="footer">
    <?php 
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_auteur = get_theme_mod('footer_auteur', 'Default Title');
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
    $footer_courriel = get_theme_mod('footer_courriel', 'Default Title');
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
    
    ?>
    <div class="piedpage global">
        <section class="piedpage__s1">

            <!-- ----------LIENS RAPIDES------------ -->
            <div class="piedpage__s1__externe">
              <h1>Menu</h1>
              <p>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe__menu"
                )); ?>
                </p>
            </div>

            <!-- ---------CONTACT------------- -->
            <div class="piedpage__s1__adresse">
              <h1>Coordonnées du club</h1>
                <p><?php echo $footer_auteur ?></p>
                <p><?php echo $footer_adresse ?></p>
                <p><?php echo $footer_courriel ?></p>
                <p><?php echo $footer_telephone ?></p>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>

            <!-- -----------MISSION DU CLUB----------- -->
             <div class="piedpage__s1__description">
                <h1>Mission du club de voyage</h1>
                <p><?php echo $footer_mission ?></p>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>
    </div>
</footer>
<?php wp_footer() ?>