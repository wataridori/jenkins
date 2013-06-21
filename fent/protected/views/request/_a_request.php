<div class="row">
    <div class="two columns">
        <?php echo $request->device->createViewLink(); ?>
        </p>
    </div>
    <div class="two columns" >
        <?php echo DateAndTime::returnTime($request->start_time); ?>
    </div>
    <div class="three columns" >
        <?php echo DateAndTime::returnTime($request->request_end_time); ?>
    </div>
    <div class="two columns">
        <?php 
            $expired = DateAndTime::getIntervalDays($request->request_end_time, $timestamp);
            if ($expired > 0){
               echo $expired;
            }
        ?>
    </div>
    <div class="two columns">
        <?php
            if ($expired < 0) {
               echo -1 * $expired;
            }
        ?>
    </div>
</div>
