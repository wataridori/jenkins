<?php
/* @var $this ProfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Profiles',
);
?>

<div class="row">
    <h2>Profiles</h2>
    <?php if (Yii::app()->user->isAdmin) { ?>
        <div class="medium pretty primary btn">
            <?php echo CHtml::button('Create profile', array('submit' => array('profile/create'))); ?>
        </div>
    <?php } ?>

    <?php if(Yii::app()->user->hasFlash('sucessful')): ?>
        <div class="success alert">
            <?php echo Yii::app()->user->getFlash('sucessful'); ?>
        </div>
    <?php endif; ?>
    <HR>
    <?php
    for ($i = 0; $i < sizeof($profiles); $i += 2) {
        echo '<div class="row">';
        echo '<div class="six columns">';
        $this->renderPartial('_view', array('data' => $profiles[$i]));
        echo '</div>';
        echo '<div class="six columns">';
        if (isset($profiles[$i+1])){
            $this->renderPartial('_view', array('data' => $profiles[$i+1]));
        }
        echo '</div></div>';
        echo '</br>';
    };
    ?>
</div>
<div class="row">
    <?php $this->widget('CLinkPager', array(
        'pages' => $pages,
    )); ?>
</div>
