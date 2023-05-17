<?php
$version = '1.0';

//enqueue stylesheet
wp_enqueue_style( 'the-techit-theme-tailwindcss', get_template_directory_uri().'/assets/css/tailwind.min.css', array(),$version  );
wp_enqueue_style( 'the-techit-theme-style', get_template_directory_uri().'/assets/css/style.min.css', array(),$version  );
wp_enqueue_style( 'the-techit-theme-font', 'https://fonts.googleapis.com/css?family=Nunito', array(),$version  );
