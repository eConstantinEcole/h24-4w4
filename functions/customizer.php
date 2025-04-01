<?php
if ( ! function_exists( 'add_action' ) ) {
    exit;
}
///////////////////////////l'auteur
function theme_31w_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
  'title' => __('Section Hero', 'theme_31w'),
  'priority' => 30,
));

$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Constantin Schmouker', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'text',
));


// Adresse e-mail
$wp_customize->add_setting('hero_email', array(
  'default' => 'info@cmaisonneuve.qc.ca',
  'sanitize_callback' => 'sanitize_email',
));

$wp_customize->add_control('hero_email', array(
  'label' => __('Adresse e-mail', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'email',
));


//////////////////////////////////Image en background de la zone hero
$wp_customize->add_setting('hero_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
  'label' => __('Image en arrière plan', 'theme_31w'),
  'section' => 'hero_section',
)));



// Couleur
$wp_customize->add_setting('hero_couleur', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
  'label' => __('Couleur du texte', 'theme_31w'),
  'section' => 'hero_section',
)));

////////////////////////////////Couleur footer

$wp_customize->add_setting('hero_footer', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));



// ///////////////////////////FOOTER
$wp_customize->add_section('footer_section', array(
  'title' => __('Section Footer', 'theme_31w'),
  'priority' => 30,
));

/////////////////////Auteur footer
$wp_customize->add_setting('footer_auteur', array(
  'default' => __('Constantin Schmouker', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('footer_auteur', array(
  'label' => __('Auteur', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'text',
));

///////////////////////////Adresse Footer
$wp_customize->add_setting('footer_adresse', array(
  'default' => __('3800 R. Sherbrooke E', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('footer_adresse', array(
  'label' => __('Adresse', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'text',
));

/////////////////////Courriel footer

$wp_customize->add_setting('footer_courriel', array(
  'default' => 'info@maisonneuve.qc.ca',
  'sanitize_callback' => 'sanitize_email'
));

$wp_customize->add_control('footer_courriel', array(
  'label' => __('Adresse e-mail', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'email',
));

///////////////////Téléphone footer
$wp_customize->add_setting('footer_telephone', array(
  'default' => '514-254-7131',
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_telephone', array(
  'label' => __('Téléphone', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'text',
));

/////////////////////Mission

$wp_customize->add_setting('footer_mission', array(
  'default' => __('Mission du club de voyage', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_mission', array(
  'label' => __('Mission', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'textarea',
));







}

add_action('customize_register', 'theme_31w_customize_register');

function tp1_customize_register($wp_customize) {
    // Section 404
    $wp_customize->add_section('404_section', array(
        'title' => __('Page 404', 'tp1'),
        'priority' => 30,
    ));

    // Titre 404
    $wp_customize->add_setting('404_titre', array(
        'default' => 'Erreur 404 : Page introuvable',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('404_titre', array(
        'label' => __('Titre de la page 404', 'tp1'),
        'section' => '404_section',
        'type' => 'text',
    ));

    // Image de fond 404
    $wp_customize->add_setting('404_image_fond', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '404_image_fond', array(
        'label' => __('Image de fond pour la page 404', 'tp1'),
        'section' => '404_section',
        'settings' => '404_image_fond',
    )));

    // Description 404
    $wp_customize->add_setting('404_description', array(
        'default' => 'Désolé, la page que vous recherchez est introuvable.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('404_description', array(
        'label' => __('Description de la page 404', 'tp1'),
        'section' => '404_section',
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'tp1_customize_register');
?>