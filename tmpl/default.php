<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_outsmartfacebook
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
$conv_friends = ($fb_friendsface) ? "true" : "false";
$conv_smallh = $fb_smallh ? "true":"false";
$conv_adapt = $fb_adapt ? "true":"false";
$conv_hidecover = $fb_hidecover ? "true":"false";
$conv_tabs = implode(",", $fb_tabs);


$document->addScript(JURI::base() . 'modules/mod_outsmartfacebook/assets/outsmartfacebook.min.js');
?>
<?php if($fb_showposts) : ?>
<div class="outsmartfacebook" >
    <div class="fb-page" data-href="<?php echo $fb_url; ?>" data-tabs="<?php echo $conv_tabs; ?>" data-width="<?php echo $fb_width; ?>" data-height="<?php echo $fb_height; ?>" data-small-header="<?php echo $conv_smallh; ?>" data-adapt-container-width="<?php echo $conv_adapt; ?>" data-hide-cover="<?php echo $conv_hidecover; ?>" data-show-facepile="<?php echo $conv_friends; ?>">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="<?php echo $fb_url; ?>">
                <a href="<?php echo $fb_url; ?>"></a>
            </blockquote>
        </div>
    </div>
</div>
<?php else : ?>
<div class="fb-page" 
  data-href="<?php echo $fb_url; ?>"
  data-width="380" 
  data-hide-cover="false"
  data-show-facepile="false" 
  data-show-posts="false"></div>
<?php endif; 