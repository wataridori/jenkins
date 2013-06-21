<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="none"></div>
<div class="row">
    <div class="centered ten columns">
        <h1 class="page-title">Password Recovery</h1>
    </div>
</div>

<div class="row">
    <form method="Post">
       <div class="seven centered columns">           
         <div style="height:50px"></div>
         <?php if(Yii::app()->user->hasFlash('sucessful')): ?>
            <div class="success alert">
                <?php echo Yii::app()->user->getFlash('sucessful'); ?>
            </div>
         <?php endif; ?>
         <?php if(Yii::app()->user->hasFlash('fail')): ?>
            <div class="danger alert">
                <?php echo Yii::app()->user->getFlash('fail'); ?>
            </div>
         <?php endif; ?>
          <div class="field">
            <?php echo CHtml::textField('ForgetPasswordForm[arg]', null, array('class'=>'text input','placeholder'=>'Username or Email or Employee code')); ?>
          </div>
          <div style="height:50px"></div>
          <div class="medium primary btn centered three columns"><?php echo CHtml::submitButton('Submit'); ?></div>
       </div>
    </form>
</div>
<div style="height:150px"></div>