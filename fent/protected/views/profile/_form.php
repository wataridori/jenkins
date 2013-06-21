<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'profile-form',
	'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>
        <div class="row">
            <p class="note">Fields with <span class="required">*</span> are required.</p>
        </div>

    <div class="none"></div>
            
	<div class="row">
        <?php echo $form->errorSummary($model); ?>
        <div class="five columns">
            <div class="field">
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email',array('maxlength' => 45, 'class' => 'text input', 'placeholder' => 'example@example.com')); ?>
                <?php echo $form->error($model,'email'); ?>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="four columns">
            <div class="field">
                <?php echo $form->labelEx($model,'name'); ?>
                <?php echo $form->textField($model,'name',array('maxlength' => 255, 'class' => 'text input', 'placeholder' => 'Name of employee')) ?>
                <?php echo $form->error($model,'name'); ?>
            </div>
        </div>
	</div>

	<div class="row">
        <div class="three columns">
            <div class="field">
                <?php echo $form->labelEx($model,'phone'); ?>
                <?php echo $form->textField($model,'phone', array('class' => 'text input', 'placeholder' => '000000000')); ?>
                <?php echo $form->error($model,'phone'); ?>
            </div>
        </div>
	</div>

	<div class="row">
        <div class="five columns">
            <div class="field">
                <?php echo $form->labelEx($model,'address'); ?>
                <?php echo $form->textArea($model,'address',array('rows' => 4, 'class' => 'input textarea')); ?>
                <?php echo $form->error($model,'address'); ?>
            </div>
        </div>
	</div>

	<div class="row">
        <div class="two columns">
            <div class="field">
                <?php echo $form->labelEx($model,'employee_code'); ?>
                <?php echo $form->textField($model,'employee_code',array('maxlength' => 20,'class' => 'text input', 'placeholder' => 'ABCDEF')); ?>
                <?php echo $form->error($model,'employee_code'); ?>
            </div>
        </div>
	</div>

	<div class="row">
        <div class="four columns">
            <div class="field">
                <?php echo $form->labelEx($model,'position'); ?>
                <?php echo $form->textField($model,'position',array('maxlength' => 45, 'class' => 'text input')); ?>
                <?php echo $form->error($model,'position'); ?>
            </div>
        </div>
	</div>

	<div class="row">
        <div class="three columns">
            <div class="field">
                <?php echo $form->labelEx($model,'date_of_birth'); ?>
                <?php echo $form->textField($model,'date_of_birth', array('class' => 'text input', 'placeholder' => 'DD/MM/YYYY')); ?>
                <?php echo $form->error($model,'date_of_birth'); ?>
            </div>
        </div>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'image'); ?>
        <?php echo CHtml::activeFileField($model, 'image'); ?>
        <?php echo $form->error($model,'image'); ?>
    </div>
    <?php if(!$model->isNewRecord){ ?>
        <div class="row">
            <div class="four columns image photo">
                <?php echo CHtml::image($model->getMainImage());} ?>
            </div>    
        </div>
    
	<div class="row">
            <span class="medium pretty primary btn">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </span>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->