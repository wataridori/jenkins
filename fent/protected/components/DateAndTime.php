<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

class DateAndTime
{
    public static function returnTime($timestamp, $format = null) {
        if ($timestamp == null) {
            return 'No time given';
        }
        if ($format == null) {
            $format = 'd/m/Y';
        }
        return date($format, $timestamp);
    }
    
    public static function getIntervalDays($request_end_time, $timestamp) {
        if ($request_end_time == null) {
            return null;
        } else {
            $date1 = new DateTime(DateAndTime::returnTime($request_end_time, 'Y/m/d'));
            $date2 = new DateTime(DateAndTime::returnTime($timestamp, 'Y/m/d'));
            $interval = date_diff($date1, $date2);
            if ($request_end_time >= $timestamp) {
                return $interval->days;
            } else {
                return -1 * $interval->days;
            }
        }
    }
}
?>
