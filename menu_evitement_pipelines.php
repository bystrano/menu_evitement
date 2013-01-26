<?php
/**
 * Plugin Menu d&#039;évitement
 * (c) 2013 Michel Bystranowski
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function menu_evitement_affichage_final ($html) {

  $html = preg_replace('/(<body[^>]*>)/', '$1' . recuperer_fond('inclure/menu'), $html);

  return $html;
}

?>