<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row centered">
    <h1><?php echo $category->name; ?></h1>
    <?php
        if (Yii::app()->user->isAdmin)
        {
            echo "<div class='medium primary btn'>";
            echo CHtml::button('Create', array('submit' => array('device/create')));
            echo '</div>';
        }
    ?>
    <?php $this->renderPartial('/device/_list_device', array('devices' => $devices, 'columns' => $columns)); ?>
    <?php $this->widget('CLinkPager', array(
        'pages' => $pages,
    )) ?>
</div>