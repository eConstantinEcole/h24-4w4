<footer id="footer">
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
              <h1>Nous contacter</h1>
                <div class="piedpage__s1__adresse__coord">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere porro veniam vitae, tempore corporis omnis nam </p>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>

            <!-- -----------MISSION DU CLUB----------- -->
             <div class="piedpage__s1__description">
                <h1>La mission de notre club</h1>
            
                <p>Le but de notre club est de permettre à tous les passionnés de la nature de se retrouver et de partager leur passion.</p>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>
    </div>
</footer>
<?php wp_footer() ?>