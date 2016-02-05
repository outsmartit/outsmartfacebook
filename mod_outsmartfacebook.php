<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_outsmartfacebook
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$fb_url = $params->get('fb_url');
$fb_showposts = $params->get('fb_showposts');
$fb_width = $params->get('fb_width');
$fb_adapt = $params->get('fb_adapt');
$fb_height = $params->get('fb_height');
$fb_smallh = $params->get('fb_smallheader');
$fb_hidecover = $params->get('fb_hidecover');
$fb_friendsface = $params->get('fb_friendsface');
$fb_tabs = $params->get('fb_tabs');

require JModuleHelper::getLayoutPath('mod_outsmartfacebook', 'default');
