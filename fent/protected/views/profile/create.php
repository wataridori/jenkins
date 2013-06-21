<?php
/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs = array(
	'Profiles' => array('index'),
	'Create',
);
?>

<div class="row"><h2>Create Profile</h2></div>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>