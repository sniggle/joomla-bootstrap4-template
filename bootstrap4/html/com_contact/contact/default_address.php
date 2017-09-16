<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>
<dl class="contact-address dl-horizontal" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	<?php if (($this->params->get('address_check') > 0) &&
		($this->contact->address || $this->contact->suburb  || $this->contact->state || $this->contact->country || $this->contact->postcode)) : ?>
		<div class="row">
		<?php if ($this->params->get('address_check') > 0) : ?>
			<dt class="col-sm-3 text-sm-right">
				<span class="<?php echo $this->params->get('marker_class'); ?> fa fa-home" >
					<?php //echo $this->params->get('marker_address'); ?>
				</span>
			</dt>
		<?php endif; ?>

		<?php if ($this->contact->address && $this->params->get('show_street_address')) : ?>
			<dd class="col-sm-9">
				<span class="contact-street" itemprop="streetAddress">
					<?php echo nl2br($this->contact->address) . '<br />'; ?>
				</span>
			</dd>
		<?php endif; ?>

		<?php if ($this->contact->suburb && $this->params->get('show_suburb')) : ?>
			<dd class="col-sm-9 ml-auto">
				<span class="contact-suburb" itemprop="addressLocality">
					<?php echo $this->contact->suburb . '<br />'; ?>
				</span>
			</dd>
		<?php endif; ?>
		<?php if ($this->contact->state && $this->params->get('show_state')) : ?>
			<dd class="col-sm-9 ml-auto">
				<span class="contact-state" itemprop="addressRegion">
					<?php echo $this->contact->state . '<br />'; ?>
				</span>
			</dd>
		<?php endif; ?>
		<?php if ($this->contact->postcode && $this->params->get('show_postcode')) : ?>
			<dd class="col-sm-9 ml-auto">
				<span class="contact-postcode" itemprop="postalCode">
					<?php echo $this->contact->postcode . '<br />'; ?>
				</span>
			</dd>
		<?php endif; ?>
		<?php if ($this->contact->country && $this->params->get('show_country')) : ?>
		<dd class="col-sm-9 ml-auto">
			<span class="contact-country" itemprop="addressCountry">
				<?php echo $this->contact->country . '<br />'; ?>
			</span>
		</dd>
		<?php endif; ?>
		</div>
	<?php endif; ?>

<?php if ($this->contact->email_to && $this->params->get('show_email')) : ?>
	<div class="row">
	<dt class="col-sm-3 text-sm-right">
		<span class="<?php echo $this->params->get('marker_class'); ?> fa fa-envelope" itemprop="email">
			<?php // echo nl2br($this->params->get('marker_email')); ?>
		</span>
	</dt>
	<dd class="col-sm-9">
		<span class="contact-emailto">
			<?php echo $this->contact->email_to; ?>
		</span>
	</dd>
	</div>
<?php endif; ?>

<?php if ($this->contact->telephone && $this->params->get('show_telephone')) : ?>
	<div class="row">
	<dt class="col-sm-3 text-sm-right">
		<span class="<?php echo $this->params->get('marker_class'); ?> fa fa-phone" >
			<?php //echo $this->params->get('marker_telephone'); ?>
		</span>
	</dt>
	<dd class="col-sm-9">
		<span class="contact-telephone" itemprop="telephone">
			<?php echo nl2br($this->contact->telephone); ?>
		</span>
	</dd>
	</div>
<?php endif; ?>
<?php if ($this->contact->fax && $this->params->get('show_fax')) : ?>
	<div class="row">
	<dt class="col-sm-3 text-sm-right">
		<span class="<?php echo $this->params->get('marker_class'); ?>">
			<?php echo $this->params->get('marker_fax'); ?>
		</span>
	</dt>
	<dd class="col-sm-9">
		<span class="contact-fax" itemprop="faxNumber">
		<?php echo nl2br($this->contact->fax); ?>
		</span>
	</dd>
	</div>
<?php endif; ?>
<?php if ($this->contact->mobile && $this->params->get('show_mobile')) :?>
	<div class="row">
	<dt class="col-sm-3 text-sm-right">
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo $this->params->get('marker_mobile'); ?>
		</span>
	</dt>
	<dd class="col-sm-9">
		<span class="contact-mobile" itemprop="telephone">
			<?php echo nl2br($this->contact->mobile); ?>
		</span>
	</dd>
	</div>
<?php endif; ?>
<?php if ($this->contact->webpage && $this->params->get('show_webpage')) : ?>
	<div class="row">
	<dt class="col-sm-3 text-sm-right">
		<span class="<?php echo $this->params->get('marker_class'); ?> fa fa-link" >
		</span>
	</dt>
	<dd class="col-sm-9">
		<span class="contact-webpage">
			<a href="<?php echo $this->contact->webpage; ?>" target="_blank" itemprop="url">
			<?php echo JStringPunycode::urlToUTF8($this->contact->webpage); ?></a>
		</span>
	</dd>
	</div>
<?php endif; ?>
</dl>
<?php
jimport( 'joomla.application.module.helper' );
$modules = JModuleHelper::getModules( 'contributors' );
if(count($modules) > 0) {
	$attribs['style'] = 'xhtml';?>
    <h3>Mitwirkungen</h3>
    <?php foreach($modules as $module) {
       echo JModuleHelper::renderModule( $module, $attribs );
    }
}

