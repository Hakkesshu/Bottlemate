<?php
/* @var $this ContactsController */
/* @var $model Contacts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'companyName'); ?>
		<?php echo $form->textField($model,'companyName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'companyName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephoneNumber'); ?>
		<?php echo $form->textField($model,'telephoneNumber',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'telephoneNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faxNumber'); ?>
		<?php echo $form->textField($model,'faxNumber',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'faxNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zipCode'); ?>
		<?php echo $form->textField($model,'zipCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'zipCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'courier'); ?>
		<?php echo $form->textField($model,'courier',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'courier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expressAccount'); ?>
		<?php echo $form->textField($model,'expressAccount',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'expressAccount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catalogueRequest'); ?>
		<?php echo $form->textField($model,'catalogueRequest',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'catalogueRequest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requestItemNo'); ?>
		<?php echo $form->textArea($model,'requestItemNo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'requestItemNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->