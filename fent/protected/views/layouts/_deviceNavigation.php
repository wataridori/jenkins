
<div class="navbar" gumby-fixed="top" id="nav1">
    <!-- Toggle for mobile navigation, targeting the <ul> -->
    <a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
    <ul class="row">
        <li><?php echo CHtml::link('Home', Yii::app()->homeUrl); ?></li>
        <li><?php echo CHtml::link('Introduction', '#'); ?></li>
        <li><?php echo CHtml::link('Support', '#' ); ?></li>
        <li>
            <?php echo CHtml::link('Devices', Yii::app()->createUrl('device/index' )); ?>
            <div class="dropdown">
                <ul>
                    <li><?php echo CHtml::link('Mac', Yii::app()->createUrl('/category/view', array('id' => 1))); ?></li>
                    <li><?php echo CHtml::link('Dell', Yii::app()->createUrl('/category/view', array('id' => 2))); ?></li>
                    <li><?php echo CHtml::link('Ipad', Yii::app()->createUrl('/category/view', array('id' => 3))); ?></li>
                    <li><?php echo CHtml::link('Other Devices', '#' ); ?></li>
                </ul>
            </div>
        </li>
        <li>
            <?php 
                if (Yii::app()->user->isAdmin){
                    echo CHtml::link('User', Yii::app()->createUrl('profile/index' )) ; 
                }
            ?>
        </li>
        <li>
            <?php
                if (Yii::app()->user->isAdmin){
                    echo CHtml::link('All Requests', Yii::app()->createUrl('request/index'));
                }
            ?>
        </li>
        <li>
            <?php echo CHtml::link(Yii::app()->user->username, '#'); ?>
            <div class="dropdown">
                <ul>
                    <?php if (!Yii::app()->user->isAdmin) { ?>
                    <li><?php echo CHtml::link('Favorite', Yii::app()->createUrl('user/favorite') ); ?></li>
                    <li><?php echo CHtml::link('History', Yii::app()->createUrl('user/history' ) ); }?></li>
                    <li><?php echo CHtml::link('Profile', Yii::app()->createUrl('profile/view', array('id' => Yii::app()->user->profileId))); ?></li>
                    <li><?php echo CHtml::link('Change password', Yii::app()->createUrl('user/changepassword' ) ); ?></li>
                </ul>
            </div>
        </li>
        <li><?php echo CHtml::link('Logout', array('user/signout')); ?></li>
        <li class='field'>
            <?php echo CHtml::textField(null, null, array('class'=>'search input','placeholder'=>'Search')); ?>
        </li> 
    </ul>
</div>