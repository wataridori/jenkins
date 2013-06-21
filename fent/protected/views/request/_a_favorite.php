<div class="seven columns push_one">
        <p style="display: inline-block; float: left"><?php echo CHtml::label('Name', null); ?>:
        <?php echo CHtml:: link($favorite->device->name, Yii::app()->createUrl('device/view', array('id' => $favorite->device->id))); ?>
        </p>
</div>