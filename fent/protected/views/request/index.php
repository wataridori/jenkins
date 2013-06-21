<script src='<?php echo Yii::app()->baseUrl; ?>/js/request_list.js'></script>  

<div class="row">
    <h2>All requests</h2>
</div>
<div class="row">
  <ul class="ten columns">
    <li class="field">
      <div class="picker">
        <select id="request_type_selecter">
          <option value="All">All Requests</option>
          <option value="Waiting">Being Considered Requests</option>
          <option value="Un-expired">Un-expired Requests</option>
          <option value="Expired">Expired Requests</option>
          <option value="Finished">Finished Requests</option>
          <option value="Rejected">Rejected Requests</option>
        </select>
      </div>
    </li>
  </ul>
</div>
<section class="sixteen colgrid">
    <div class="row">
        <div class="two columns">
            User
        </div>
        <div class="two columns">
            Device
        </div>
        <div class="two columns">
            Reason
        </div>
        <div class="two columns">
            Request start time
        </div>
        <div class="two columns">
            Request end time
        </div>
        <div class="two columns">
            Start time borrow
        </div>
        <div class="two columns">
            End time borrow
        </div>
        <div class="two columns">
            Status
        </div>
        <HR/>
    </div>
    
    <?php
        $timestamp = time();
        foreach ($requests as $request) {
            $this->renderPartial('/request/_view', array('request' => $request, 'timestamp' => $timestamp));
        }
    ?>
</section>
<div class="row">
    <?php
        if (isset($pages)) {
            $this->widget('CLinkPager', array(
                'pages' => $pages,
            )); 
        }
    ?>
</div>