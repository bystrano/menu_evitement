<?php
/**
 * Plugin Menu d&#039;évitement
 * (c) 2013 Michel Bystranowski
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('inc/config');

ecrire_config('menu_evitement',
              array('lien_vers_menu_admin' => 'oui',
                    'structure'            => array(
                                                    0 => array(
                                                               'cible' => 'contenu',
                                                               'titre' => 'Aller au contenu',
                                                               ),
                                                    1 => array(
                                                               'cible' => 'extra',
                                                               'titre' => 'Aller au menu droite',
                                                               ),
                                                    ),
                    ));

?>