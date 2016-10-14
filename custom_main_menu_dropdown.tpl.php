<?php

/**
 * @file
 * tpl file for theming a single menu dropdown link
 *
 * Available variables:
 * - $link: The href for the link
 * - $title: Title to be displayed for the link
 * - $content: The content inside the dropdown
 * - $mlid: The unique id of the menu
 */
?>

<li class="dropdown bigger-dd" id="menu-<?php print $mlid ?>">
  <a id="label-<?php print $mlid ?>" class="ddx" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
    <?php print $title ?><span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="label-<?php print $mlid ?>">
   <li>
    <button href="javascript:void();" onclick="jQuery('.dropdown.open').removeClass('open');" class="close pull-right" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="container">
      <?php print $content ?>
    </div>
    </li>
  </ul>
</li>
