<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_ezpages.php for Winchester 2015-06-20 15:49:16Z webchills $
 */
 
  $pointer = zen_image(DIR_WS_TEMPLATE_IMAGES . 'bc_ezpages.gif');
  // uncomment next line to add 1 space between image & text
  // $pointer .= '&nbsp;';

  $content = "";
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">';
  $content  .= "\n" . '<ul style="margin: 0; padding: 0; list-style-type: none;">' . "\n";
  for ($i=1, $n=sizeof($var_linksList); $i<=$n; $i++) { 
    $content .= '<li><div class="betterEzpages"><a href="' . $var_linksList[$i]['link'] . '">' . $pointer . $var_linksList[$i]['name'] . '</a></div></li>' . "\n" ;
  } // end FOR loop
  $content  .= '</ul>' . "\n";
  $content .= '</div>';
?>