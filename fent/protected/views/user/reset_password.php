<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="none"></div>
<div class="row">
    <div class="centered ten columns">
        <h1 class="page-title">Reset Password</h1>
    </div>
</div>
<div class="row" >
    <form method="Post">      
        <div class="seven centered columns">          
            <div style="height:50px"></div>
            <?php echo CHtml::errorSummary($form); ?>      
            <div class="row">
                <div class="field">                
                    <?php echo CHtml::activePasswordField($form, 'password', array('class' => 'password input', 'placeholder' => 'New Password')); ?>
                </div>
            </div>
            <div class="row">
                <div class="field">            
                    <?php echo CHtml::activePasswordField($form, 'passwordConfirm', array('class' => 'password input', 'placeholder' => 'New Password Confirmation')); ?>
                </div>
            </div>
            <div style="height:50px"></div>            
            <div class="medium primary btn centered three columns"><?php echo CHtml::submitButton('Submit'); ?></div>                            
        </div>
    </form>
</div>
<div class="none"></div>
