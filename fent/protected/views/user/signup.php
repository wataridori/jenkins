<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div style="height:50px"></div>
<div class="row">
    <div class="centered ten columns">
        <h1 class="page-title">Sign Up</h1>
    </div>
</div>

<div class="none"></div>

<div class="row">
    <div class="centered seven columns" style="color: blue; font-size: 1.3em">      
      <form method='post'> 
          <?php echo CHtml::errorSummary($form); ?>    
          <div class="row">
              <div class="field">
                  <?php echo CHtml::activeTextField($form, 'username', array('class' => 'text input', 'placeholder' => 'Username')); ?>
              </div>
          </div> 
          <div class="row">
              <div class="field">
                  <?php echo CHtml::activePasswordField($form, 'password', array('class' => 'password input', 'placeholder' => 'Password')); ?>
              </div>
          </div>
          <div class="row">
              <div class="field">
                  <?php echo CHtml::activePasswordField($form, 'passwordConfirm', array('class' => 'password input', 'placeholder' => 'Password Confirmation')); ?>
              </div>
          </div>
          <div style="height:50px"></div>          
          <div class="medium primary btn centered three columns"><?php echo CHtml::submitButton('Sign Up'); ?></div>
      </form>
    </div>
</div>

<div style="height:120px"></div>
