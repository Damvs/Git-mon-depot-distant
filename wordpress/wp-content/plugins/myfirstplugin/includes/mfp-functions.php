<?php

/* Dans notre fonction, nous devons utiliser la fonction intégrée de WordPress add_menu_page()pour donner à notre menu un nom, 
un titre et décider qui est autorisé à le voir. Ensuite, nous lui disons ce qu’il faut afficher lorsque vous accédez à la page. 
Vous pouvez également donner au menu une icône et définir sa position dans le menu de navigation du panneau d’administration – 
ces deux options sont facultatives, donc nous les laisserons hors de ce tutoriel. 
L'icône courante par défaut sera affichée sur le lien vers notre page. 
Notre lien apparaîtra au bas du menu de navigation du panneau d'administration. 
Toutes ces informations sont entrées en tant que paramètres de add_menu_page()*/
/*
 * Add my new menu to the Admin Control Panel
 */

// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
add_action( 'admin_menu', 'mfp_Add_My_Admin_Link' );

// Add a new top level menu link to the ACP
function mfp_Add_My_Admin_Link()
{
    add_menu_page(
        'My First Page', // Title of the page
        'Mon plugin', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        // 'includes/mfp-first-acp-page.php' // cette ligne ne fonctionne pas, la suivante corrige le bug
        plugin_dir_path(__FILE__).'/mfp-first-acp-page.php' // The 'slug' - file to display when clicking the link  
    );
}