/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */

(function($)
{
	$(document).ready(function()
	{
            $('.control-group').addClass('form-group');
            $('.control-group input[type=text]').addClass('form-control');
            $('.control-group input[type=email]').addClass('form-control');
            $('.control-group input[type=password]').addClass('form-control');
            $('.control-group input[type=search]').addClass('form-control');
            $('.control-group input[type=url]').addClass('form-control');
            $('.control-group input[type=tel]').addClass('form-control');
            $('.control-group input[type=number]').addClass('form-control');
            $('.control-group input[type=date]').addClass('form-control');
            $('.control-group input[type=datetime-local]').addClass('form-control');
            $('.control-group input[type=month]').addClass('form-control');
            $('.control-group input[type=week]').addClass('form-control');
            $('.control-group input[type=time]').addClass('form-control');
            $('.control-group input[type=color]').addClass('form-control');
            $('.control-group select').addClass('form-control');
            $('.control-group textarea').addClass('form-control');
            $('.control-group input[type=file]').addClass('form-control-file');
            //$('.control-group input[type=radio]').addClass('form-check-input'); //Would require reformatting of html-structure
            $('.control-group input[type=checkbox]').addClass('form-check-input');
            
            $('.form-group input[type=text]').addClass('form-control');
            $('.form-group input[type=email]').addClass('form-control');
            $('.form-group input[type=password]').addClass('form-control');
            $('.form-group input[type=search]').addClass('form-control');
            $('.form-group input[type=url]').addClass('form-control');
            $('.form-group input[type=tel]').addClass('form-control');
            $('.form-group input[type=number]').addClass('form-control');
            $('.form-group input[type=date]').addClass('form-control');
            $('.form-group input[type=datetime-local]').addClass('form-control');
            $('.form-group input[type=month]').addClass('form-control');
            $('.form-group input[type=week]').addClass('form-control');
            $('.form-group input[type=time]').addClass('form-control');
            $('.form-group input[type=color]').addClass('form-control');
            $('.form-group select').addClass('form-control');
            $('.form-group textarea').addClass('form-control');
            $('.form-group input[type=file]').addClass('form-control-file');
            $('.form-check input[type=checkbox]').addClass('form-check-input');
            //Contact form
            $('.form-inline select').addClass('form-control form-control-sm');
            // Support for bootstrap 4 markup also in custom UI elements, which are designed for Bootstrap 2. 
            $('table').addClass('table');
            $('.label').addClass('badge');
            $('.label-warning').addClass('badge-warning');
            //$('*[rel=tooltip]').tooltip()
      })
})(jQuery);
