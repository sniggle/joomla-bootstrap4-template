<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.bootstrap4
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

include_once (JPATH_ROOT. '/templates/' . $this->template . '/helper.php');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php if ($this->params->get('local_files') == 0) { ?>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha256-eSi1q2PG6J7g7ib17yAaWMcrr5GrtohYChqibrV7PBE=" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
		<link rel="stylesheet" href="templates/bootstrap4/css/template.css">
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha256-E/V4cWE4qvAeO5MOhjtGtqDzPndRO1LBk8lJ/PR7CA4=" crossorigin="anonymous"></script>
		<script defer src="templates/bootstrap4/js/template.js"></script>
		
		<?php } ?>
		<jdoc:include type="head" />
        <?php if($this->params->get('favicon')) { ?>
            <link rel="shortcut icon" href="<?php echo JUri::root(true) . htmlspecialchars($this->params->get('favicon'), ENT_COMPAT, 'UTF-8'); ?>" />
        <?php } ?>
        <!--[if lt IE 9]>
                <script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="navbar navbar-expand-lg navbar-light bg-faded">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="<?php echo JURI::base(); ?>"><?php echo $app->get('sitename'); ?></a>
            <nav class="collapse navbar-collapse" id="navbarSupportedContent">
                <jdoc:include type="modules" name="navbar-1" style="none" />
                <jdoc:include type="modules" name="navbar-2" style="none" />
            </nav>
        </header>
        <main class="body">
            <div class="content">
                <div class="jumbotron jumbotron-fluid bg-primary text-white">
                    <div class="container<?php echo ($params->get('fluidContainer') ? '-fluid' : ''); ?>">
                        <?php if(JURI::base() == JURI::current()) { ?>
                            <h1><?php echo $app->get('sitename'); ?></h1>
                                <?php if ($this->params->get('sitedescription')) { ?>
                                    <p class="lead">
                                        <?php echo htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8'); ?>
                                    </p>
                                <?php }?>
                        <?php } else {?>
                            <h1><?php echo $this->getTitle();; ?></h1>
                        <?php } ?>
                    </div>
                </div>
                <div class="container<?php echo ($params->get('fluidContainer') ? '-fluid' : ''); ?>">
                    <jdoc:include type="modules" name="banner" style="xhtml" />
                    <?php if ($this->countModules('breadcrumbs')) : ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <?php if ($this->countModules('sidebar-left')) : ?>
                            <aside id="sidebar" class="col-md-3">
                                <div class="sidebar-nav">
                                    <jdoc:include type="modules" name="sidebar-left" style="xhtml" />
                                </div>
                            </aside>
                        <?php endif; ?>
                        <article id="content" role="main" class="<?php echo $span; ?>">
                            <jdoc:include type="modules" name="position-3" style="xhtml" />
                            <jdoc:include type="message" />
                            <jdoc:include type="component" />
                            <jdoc:include type="modules" name="position-2" style="none" />
                        </article>
                        <?php if ($this->countModules('sidebar-right')) : ?>
                            <aside id="aside" class="col-md-3">
                                <jdoc:include type="modules" name="sidebar-right" style="xhtml" />
                            </aside>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer bg-faded text-muted" role="contentinfo">
            <hr />
            <div class="container<?php echo ($params->get('fluidContainer') ? '-fluid' : ''); ?>">
                <div class="row">
                    <div class="col-sm-4"><p>
                            &copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
                        </p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <jdoc:include type="modules" name="footer" style="none" />
                        <p></p>
                    </div>
                    <div class="col-sm-4">
                        <p class="text-right">
                            <a href="#top" id="back-top">
                                <i class="fa fa-arrow-up"></i> <?php echo JText::_('TPL_BOOTSTRAP4_BACKTOTOP'); ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <jdoc:include type="modules" name="debug" style="none" />
    </body>
</html>
