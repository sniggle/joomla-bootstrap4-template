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
			$('.form-check input[type=checkbox]').addClass('form-check-input');
            //Contact form
            $('.form-group input').addClass('form-control');
            $('.form-group textarea').addClass('form-control');
			$('.form-inline select').addClass('form-control form-control-sm');
            // Support for bootstrap 4 markup also in custom UI elements, which are designed for Bootstrap 2. 
            $('table').addClass('table');
            $('.label').addClass('badge');
            $('.label-warning').addClass('badge-warning');
            $('.login input').addClass('form-control');
            //$('*[rel=tooltip]').tooltip()

            // Turn radios into btn-group
		//$('.radio.btn-group label').addClass('btn');
	//	$(".btn-group label:not(.active)").click(function()
		//{
	//		var label = $(this);
	//		var input = $('#' + label.attr('for'));
//
	//		if (!input.prop('checked')) {
	//			label.closest('.btn-group').find("label").removeClass('active btn-success btn-danger btn-primary');
	//			if (input.val() == '') {
	//				label.addClass('active btn-primary');
	////			} else if (input.val() == 0) {
	//				label.addClass('active btn-danger');
	//			} else {
	//				label.addClass('active btn-success');
	//			}
	//			input.prop('checked', true);
	//		}
	//	});
	//	$(".btn-group input[checked=checked]").each(function()
	//	{
	//		if ($(this).val() == '') {
	//			$("label[for=" + $(this).attr('id') + "]").addClass('active btn-primary');
	//		} else if ($(this).val() == 0) {
	//			$("label[for=" + $(this).attr('id') + "]").addClass('active btn-danger');
	//		} else {
	//			$("label[for=" + $(this).attr('id') + "]").addClass('active btn-success');
	//		}
	//	});
	})
})(jQuery);
