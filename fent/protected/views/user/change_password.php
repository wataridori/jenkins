<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="none"></div>
<div class="row">
    <div class="centered ten columns">
        <h1 class="page-title">Change Password</h1>
    </div>
</div>
<div class="row" >
    <form method="Post">      
        <div class="eight centered columns">
            <div style="height:50px"></div>
            <?php if (Yii::app()->user->hasFlash('fail')): ?>
              <div class="danger alert">
                  <?php echo Yii::app()->user->getFlash('fail'); ?>
              </div>
            <?php endif; ?>
            <?php echo CHtml::errorSummary($form); ?>      
            <div class="row">
                <div class="field">                
                    <?php echo CHtml::activePasswordField($form, 'oldPass', array('class' => 'password input', 'placeholder' => 'Old Password')); ?>
                </div>
            </div>
            <div class="row">
                <div class="field">                
                    <?php echo CHtml::activePasswordField($form, 'newPass', array('class' => 'password input', 'placeholder' => 'New Password')); ?>
                </div>
            </div>
            <div class="row">
                <div class="field">            
                    <?php echo CHtml::activePasswordField($form, 'passConfirm', array('class' => 'password input', 'placeholder' => 'New Password Confirmation')); ?>
                </div>
            </div>
            <div style="height:50px"></div>            
            <div class="medium primary btn centered three columns"><?php echo CHtml::submitButton('Submit'); ?></div>                            
        </div>
    </form>
</div>
<div class="none"></div>
