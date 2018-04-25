<?php


// Lets do some initial install related stuff
if (file_exists(dirname(__FILE__)."/install.php")) {
    printmg( pstr(__FILE__,__LINE__,__FUNCTION__) . "DEBUG => Found install file for ".basename(dirname(__FILE__))." plugin.", 1);
    include(dirname(__FILE__)."/install.php");
} else {

// Place initial popupwindow content here if this plugin uses one.


}

?>
