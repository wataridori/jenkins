<div class="row">
<?php
/* @var $this HomeController */

$this->breadcrumbs=array(
	'Home',
);
?>
    
<h3>List current borrowing devices </h3>
<div class="row">
    <div class="two columns"> <h5>Device</h5> </div>
    <div class="two columns"> <h5>Start time</h5> </div>
    <div class="three columns"> <h5>Request end time</h5> </div>
    <div class="two columns"> <h5>Time left</h5> </div>
    <div class="two columns"> <h5>Time expired</h5> </div>
    <HR/>
</div>
<?php 
   foreach ($requests as $request) {
       $this->renderPartial('/request/_a_request', array('request' => $request, 'timestamp' => $timestamp));
   }
   echo '</br>';
   echo '</br>';
?>

<h3>List newest devices</h3>
<?php
    $this->renderPartial('/device/_list_device',array('devices' => $devices, 'columns' => 2));
?>
</div>