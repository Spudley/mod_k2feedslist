<?php
/**
 * @package  mod_k2feedslist
 *
 * @copyright   Copyright (C) 2016 Simon Champion.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::register('K2HelperRoute', JPATH_ROOT.'/components/com_k2/helpers/route.php');

$k2cats = $params->get('k2cats');

$app  = JFactory::getApplication();
$db = JFactory::getDBO();

$dbcats = array_map(function($a) use($db) {return $db->quote($a);}, $k2cats);

$query = $db->getQuery(true);
$query->select($db->quoteName(['id','name','alias']))
      ->from($db->quoteName('#__k2_categories'))
      ->where($db->quoteName('id')." IN (".implode(',',$dbcats).")")
      ->where($db->quoteName('published')." = 1")
      ->order($db->quoteName('ordering').'ASC');
$db->setQuery($query);
$feedList = $db->loadAssocList();

foreach ($feedList as $rec=>$cat) {
    $link = urldecode(K2HelperRoute::getCategoryRoute($cat['id'].':'.urlencode($cat['alias'])));
    $feedList[$rec]['link'] = JRoute::_($link."&format=feed");
}

require JModuleHelper::getLayoutPath('mod_k2feedslist', 'default');
