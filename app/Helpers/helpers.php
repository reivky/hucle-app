<?php


use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */
if (!function_exists('hoursWorked')) {
    function hoursWorked($time_in, $time_out)
    {
        $start = Carbon::createFromFormat('H:i', $time_in);
        $end = Carbon::createFromFormat('H:i', $time_out);
        $hours = $start->diffInHours($end);
        $minutes = $start->diffInMinutes($end) - ($hours * 60);
        $filter = $minutes == 0 ? '' : $minutes . ' Menit';

        $difference = $hours . ' Jam ' . $filter;
        return $difference;
    }
}
