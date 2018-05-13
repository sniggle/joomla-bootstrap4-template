<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
?>
<div class="login<?php echo $this->pageclass_sfx?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	</div>
	<?php endif; ?>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	<div class="login-description">
	<?php endif; ?>

		<?php if ($this->params->get('logindescription_show') == 1) : ?>
			<?php echo $this->params->get('login_description'); ?>
		<?php endif; ?>

		<?php if (($this->params->get('login_image') != '')) :?>
			<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image" alt="<?php echo JText::_('COM_USERS_LOGIN_IMAGE_ALT')?>"/>
		<?php endif; ?>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	</div>
	<?php endif; ?>

	<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-validate form-horizontal card">

		<div class="card-body">
			<?php foreach ($this->form->getFieldset('credentials') as $field) : ?>
				<?php if (!$field->hidden) : ?>
					<div class="form-group">
						<?php echo $field->label; ?>
						<?php echo $field->input; ?>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>

			<?php if ($this->tfa): ?>
				<div class="form-group">
					<?php echo $this->form->getField('secretkey')->label; ?>
					<?php echo $this->form->getField('secretkey')->input; ?>
				</div>
			<?php endif; ?>

			<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
			<div  class="form-group form-check">
				<input id="remember" type="checkbox" name="remember" class="inputbox form-check-input" value="yes"/>
				<label for="remember" class="form-check-label"><?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME') ?></label>
			</div>
			<?php endif; ?>

			<div class="form-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-sign-in"></i> 
						<?php echo JText::_('JLOGIN'); ?>
					</button>
				</div>
			</div>

			<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
			<?php echo JHtml::_('form.token'); ?>
		</div>
	</form>
</div>
<div class="login">
	<ul class="nav nav-pills nav-fill">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
			<?php echo JText::_('COM_USERS_LOGIN_RESET'); ?></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
			<?php echo JText::_('COM_USERS_LOGIN_REMIND'); ?></a>
		</li>
		<?php
		$usersConfig = JComponentHelper::getParams('com_users');
		if ($usersConfig->get('allowUserRegistration')) : ?>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
				<?php echo JText::_('COM_USERS_LOGIN_REGISTER'); ?></a>
		</li>
		<?php endif; ?>
	</ul>
</div>
