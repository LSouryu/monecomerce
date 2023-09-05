<?php
require('./inc/init.inc.php');
//pour le debut
var_dump(RACINE_SITE);
echo '<br>';
echo session_status();

//notre accueil
echo '<h2>Notre futur page d\'accueil pour notre boutique</h2>';

?>

<img src="<?php echo RACINE_SITE; ?>/inc/img/bleu.jpg" alt="test image">
