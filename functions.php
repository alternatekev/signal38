<?php
$libdir = '/src/lib/';
require get_template_directory() . $libdir . "theme-features.php";
require get_template_directory() . $libdir . "theme-widgets.php";
require get_template_directory() . $libdir . "theme-menu-item-custom-fields.php";

$theme = new ThemeFeatures();
