<?php
/* @var $this DeviceController */
/* @var $model Device */
?>
<div class="row centered">

<h1>Update Device <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>