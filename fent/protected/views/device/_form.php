<?php
/* @var $this DeviceController */
/* @var $model Device */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'device-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>


        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <div class="field">
                <?php echo $form->labelEx($model,'name'); ?>
                <?php echo $form->textField($model,'name',array('class' => 'text input', 'placeholder' => 'Name')); ?>
                <?php echo $form->error($model,'name'); ?>
            </div>
        </div>

        <div class="row">
            <div class="field">
                <?php echo $form->labelEx($model,'description'); ?>
                <?php echo $form->textArea($model,'description',array('class' => 'textarea input', 'placeholder' => 'Description')); ?>
                <?php echo $form->error($model,'description'); ?>
            </div>
        </div>

        <div class="row">
            <div class="field">
                <?php echo $form->labelEx($model,'serial'); ?>
                <?php echo $form->textField($model,'serial',array('class' => 'text input', 'placeholder' => 'Serial')); ?>
                <?php echo $form->error($model,'serial'); ?>
            </div>
        </div>

        <div class="row">
            <div class="field">
                <?php echo $form->labelEx($model,'status'); ?>
                <?php echo '<div class="picker">'; ?>
                <?php echo CHtml::activeDropDownList($model,'status',array('free' => 'free', 'busy' => 'busy')); ?>
                <?php echo '</div>'; ?>
                <?php echo $form->error($model,'status'); ?>
            </div>
        </div>

        <div class="row">
            <div class="field">
                <?php
                    echo $form->labelEx($model,'category_id');
                    echo '<div class="picker">';
                    $categories = Category::model()->findAll();
                    $list = CHtml::listData($categories, 'id', 'name');
                    echo CHtml::activeDropDownList($model, 'category_id', $list);
                    echo '</div>';
                    echo $form->error($model,'category_id');
                ?>
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
        
        <div class="row buttons">
                <?php
                    echo "<div class='medium primary btn'>";
                    echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');
                    echo '</div>';
                ?>
        </div>
        
<?php $this->endWidget(); ?>

</div><!-- form -->