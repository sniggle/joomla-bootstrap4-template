<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
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

// Add JavaScript Frameworks
JHtml::_('jquery.framework');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
            <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" type="text/css" />
            <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/font-awesome.min.css" type="text/css" />
            <?php if ($app->get('debug_lang', '0') == '1' || $app->get('debug', '0') == '1') : ?>
                <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css" />
            <?php endif; ?>
            <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
            <!--[if lt IE 9]>
                    <script src="<?php echo $this->baseurl; ?>/media/jui/js/html5.js"></script>
            <![endif]-->
    </head>

    <body class="site <?php
    echo $option
    . ' view-' . $view
    . ($layout ? ' layout-' . $layout : ' no-layout')
    . ($task ? ' task-' . $task : ' no-task')
    . ($itemid ? ' itemid-' . $itemid : '')
    . ($params->get('fluidContainer') ? ' fluid' : '');
    ?>">

        <header class="navbar navbar-static-top navbar-light bg-faded" role="banner">
            <a class="navbar-brand" href="<?php echo $this->baseurl; ?>/"><?php echo $sitename; ?></a>
        </header>
        <div class="body">
            <div class="content">
                <div class="jumbotron jumbotron-fluid bg-primary">
                    <div class="container">
                        <h1><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>
                    </div>
                </div>
                <div class="container<?php echo ($params->get('fluidContainer') ? '-fluid' : ''); ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
                            <p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
                            <ul>
                                <li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
                                <li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
                                <li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
                                <li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-xs-center">
                            <div class="display-1"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                            <?php if (JModuleHelper::getModule('search')) : ?>
                                <p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
                                <p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
                                <?php echo $doc->getBuffer('module', 'search'); ?>
                            <?php endif; ?>
                            <p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
                            <p><a href="<?php echo $this->baseurl; ?>/" class="btn btn-primary"><span class="fa fa-home"></span> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr />
                            <p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
                            <blockquote>
                                <span class="badge badge-danger"><?php echo $this->error->getCode(); ?></span> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?>
                            </blockquote>
                            <?php if ($this->debug) : ?>
                                <?php echo $this->renderBacktrace(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer bg-faded text-muted" role="contentinfo">
            <hr />
            <div class="container<?php echo ($params->get('fluidContainer') ? '-fluid' : ''); ?>">
                <div class="row">
                    <div class="col-xs-6"><p>
                            &copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <p class="text-xs-right">
                            <a href="#top" id="back-top">
                                <i class="fa fa-arrow-up"></i> <?php echo JText::_('TPL_BOOTSTRAP4_BACKTOTOP'); ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <?php echo $doc->getBuffer('modules', 'debug', array('style' => 'none')); ?>
    </body>
</html>
