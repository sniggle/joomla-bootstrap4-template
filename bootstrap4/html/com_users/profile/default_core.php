<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<fieldset id="users-profile-core">
	<legend>
		<?php echo JText::_('COM_USERS_PROFILE_CORE_LEGEND'); ?>
	</legend>
        <div class="card">
            <div class="card-body">
                <dl class="row">
                        <dt class="col-md-4">
                                <?php echo JText::_('COM_USERS_PROFILE_NAME_LABEL'); ?>
                        </dt>
                        <dd class="col-md-8">
                                <?php echo $this->data->name; ?>
                        </dd>
                        <dt class="col-md-4">
                                <?php echo JText::_('COM_USERS_PROFILE_USERNAME_LABEL'); ?>
                        </dt>
                        <dd class="col-md-8">
                                <?php echo htmlspecialchars($this->data->username); ?>
                        </dd>
                        <dt class="col-md-4">
                                <?php echo JText::_('COM_USERS_PROFILE_REGISTERED_DATE_LABEL'); ?>
                        </dt>
                        <dd class="col-md-8">
                                <?php echo JHtml::_('date', $this->data->registerDate); ?>
                        </dd>
                        <dt class="col-md-4">
                                <?php echo JText::_('COM_USERS_PROFILE_LAST_VISITED_DATE_LABEL'); ?>
                        </dt>

                        <?php if ($this->data->lastvisitDate != '0000-00-00 00:00:00'){?>
                                <dd class="col-md-8">
                                        <?php echo JHtml::_('date', $this->data->lastvisitDate); ?>
                                </dd>
                        <?php }
                        else
                        {?>
                                <dd class="col-md-8">
                                        <?php echo JText::_('COM_USERS_PROFILE_NEVER_VISITED'); ?>
                                </dd>
                        <?php } ?>

                </dl>
            </div>
        </div>
</fieldset>
