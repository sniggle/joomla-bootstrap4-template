<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.bootstrap4
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$user = JFactory::getUser();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option = $app->input->getCmd('option', '');
$view = $app->input->getCmd('view', '');
$layout = $app->input->getCmd('layout', '');
$task = $app->input->getCmd('task', '');
$itemid = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if ($task == "edit" || $layout == "form") {
    $fullWidth = 1;
} else {
    $fullWidth = 0;
}

// Adjusting content width
if ($this->countModules('sidebar-left') && $this->countModules('sidebar-right')) {
    $span = "col-md-6";
} elseif ($this->countModules('sidebar-left') && !$this->countModules('sidebar-right')) {
    $span = "col-md-9";
} elseif (!$this->countModules('sidebar-left') && $this->countModules('sidebar-right')) {
    $span = "col-md-9";
} else {
    $span = "col-md-12";
}

// Local files or CDN assets loading
if ($this->params->get('local_files') == 1) {
    // Add Stylesheets
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css');
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/font-awesome.min.css');
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');

	// Add scripts
	JHtml::_('jquery.framework');
	$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/popper.min.js');
	$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.min.js');
	$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');
}

// Remove Bootstrap JS
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
//if ($this->params->get('jbootstrap') == 1) {unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);}

// Remove J! JQuery if CDN assets are enabled
if ($this->params->get('local_files') == 0) {
	unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
}

// Remove Other Scripts
if ($this->params->get('jall') == 1) {$this->_script = $this->_scripts = array();}
if ($this->params->get('jcaption') == 1) {unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);}
if ($this->params->get('jjquery') == 1) {unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);}
if ($this->params->get('jjquery_migrate') == 1) {unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);}
if ($this->params->get('jjquery_noconflict') == 1) {unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);}

// Remove Joomla Generator Tag
if ($this->params->get('jmetagenerator') == 0) {
	$doc->setGenerator('');
}

// Check for a custom CSS file
JHtml::_('stylesheet', 'custom.css', array('version' => 'auto', 'relative' => true));

// Check for a custom js file
JHtml::_('script', 'custom.js', array('version' => 'auto', 'relative' => true));