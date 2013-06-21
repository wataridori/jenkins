<?php
/* @var $this DeviceController */
/* @var $model Device */


?>
<script src='<?php echo Yii::app()->baseUrl; ?>/js/jquery-ui.js'></script>  
<script src='<?php echo Yii::app()->baseUrl; ?>/js/device.js'></script>  

<div class="row centered">
    <h1><?php echo $device->name; ?></h1>
    <div class="row">
        <div class="eight columns image photo">
            <?php
                $this->beginWidget('Galleria');
                foreach ($device->getAllImages() as $image) {
                    echo CHtml::image($image);
                }
                $this->endWidget();
            ?>
        </div>
        <div class="four columns">
            <p><?php echo 'Status: '.$device->status; ?></p>
            <?php                                                 
                $request = $device->accepted_request;
                if ($request != null) {
                    echo '<p>Being borrowed by: '.$request->user->createViewLink().'</p>';
                    echo '<p>Expected end time: '.$request->createViewLink(DateAndTime::returnTime($request->request_end_time)).'</p>';
                }                
            ?>
            <p><?php echo 'Serial: '.$device->serial; ?></p>
            <p><?php echo 'Description: '.$device->description; ?></p>    
            <p><?php echo 'Add: '.$device->created_at; ?></p>
            <p><?php echo 'Update: '.$device->updated_at; ?></p>
            <p><?php echo 'Category: '.$device->category->createViewLink(); ?></p>
            <?php
                if ($liked) {
                    echo '<div class="small danger btn">';
                    echo CHtml::button('Unlike', array('id' => 'like-button'));
                    echo '</div>';
                } else {
                    echo '<div class="small primary btn">';
                    echo CHtml::button('Like', array('id' => 'like-button'));
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</div>

<div class="row">
<?php
    if (Yii::app()->user->isAdmin) {
        $this->widget('xupload.XUpload', array(
            'url' => Yii::app( )->createUrl('/device/uploadImage', array('id' => $device->id)),        
            'model' => $imageModel,        
            'htmlOptions' => array('id'=>'somemodel-form'),
            'attribute' => 'file',
            'multiple' => true,        
            )    
        );
    }
?>
</div>

<div class="row">
    <div class="six columns">

    </div></div>

<div class="row">
    <div class="medium info btn">
        <?php echo CHtml::button('Show being considered requests', array('id' => 'being_considered_requests_button')); ?>
    </div>
</div>

<div class="row" id ="being_considered_requests" hidden="hidden">
<?php
    foreach ($device->being_considered_requests as $request) {
        echo '<div class="row">';
        echo '<p>';                        
        echo $request->user->createViewLink();
        echo ' sent a request to borrow this device';
        if ($request->request_start_time != null) {
            echo ' from '.DateAndTime::returnTime($request->request_start_time);
        }
        if ($request->request_end_time != null) {
            echo ' to '.DateAndTime::returnTime($request->request_end_time);
        }
        echo '. Request created at '.DateAndTime::returnTime($request->created_at);
        echo ' '.$request->createViewLink('View more');    
        echo '</div>';
    }
?>
</div>

<div class="row">
    <fieldset class="ten centered columns" id="request_form" request_existed="<?php echo $existed; ?>">
        <legend>Borrow Request</legend>    
        <div class="field seven columns">        
            <?php echo CHtml::textArea('reason', null, array('id' => 'reason-textarea',
                'placeholder' => 'Enter your reason here', 'rows' => 4, 'device_id' => $device->id)); ?>
        </div>   
        <div class="field four columns"> 
            <?php echo CHtml::textField('from', null, array('id' => 'from', 
                'placeholder' => 'From', 'readonly' => 'readonly')); ?>        
        </div>
        <div class="field four columns"> 
            <?php echo CHtml::textField('to', null, array('id' => 'to', 
                'placeholder' => 'To', 'readonly' => 'readonly')); ?>        
        </div>
        <div class="small primary btn two columns">
            <?php echo CHtml::button('Send request', array('id' => 'request-button'));?>
        </div>
    </fieldset>
</div>

<div class="modal" id="modal-success">
    <div class="content">
      <a class="close switch" gumby-trigger="|#modal-success"><i class="icon-cancel" /></i></a>
      <div class="row">
        <div class="ten columns centered center-text">
          <h2>Successful </h2>
          <p>You have successfully create new request!</p>
          <p>Please wait until it is accepted by admin!</p>
          <p class="btn primary medium"><a href="#" class="switch" gumby-trigger="|#modal-success">Close</a></p>
        </div>
      </div>
    </div>
 </div>

<div class="modal" id="modal-fail">
    <div class="content">
      <a class="close switch" gumby-trigger="|#modal-fail"><i class="icon-cancel" /></i></a>
      <div class="row">
        <div class="ten columns centered center-text">
          <h2>Fail</h2>
          <p>Your request can not be created!</p>          
          <p class="btn primary medium"><a href="#" class="switch" gumby-trigger="|#modal-fail">Close</a></p>
        </div>
      </div>
    </div>
 </div>