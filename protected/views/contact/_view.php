<?php
/* @var $this ContactsController */
/* @var $data Contacts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstName')); ?>:</b>
	<?php echo CHtml::encode($data->firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastName')); ?>:</b>
	<?php echo CHtml::encode($data->lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyName')); ?>:</b>
	<?php echo CHtml::encode($data->companyName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephoneNumber')); ?>:</b>
	<?php echo CHtml::encode($data->telephoneNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faxNumber')); ?>:</b>
	<?php echo CHtml::encode($data->faxNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipCode')); ?>:</b>
	<?php echo CHtml::encode($data->zipCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('courier')); ?>:</b>
	<?php echo CHtml::encode($data->courier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expressAccount')); ?>:</b>
	<?php echo CHtml::encode($data->expressAccount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catalogueRequest')); ?>:</b>
	<?php echo CHtml::encode($data->catalogueRequest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requestItemNo')); ?>:</b>
	<?php echo CHtml::encode($data->requestItemNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	*/ ?>

</div>