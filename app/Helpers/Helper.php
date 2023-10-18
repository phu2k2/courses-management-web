<?php

use Carbon\Carbon;

if (!function_exists('convert_to_short_form')) {

    /**
     * @param int $number
     * @return string
     */
    function convert_to_short_form(int $number): string
    {
        if ($number < 1000) {
            return (string)$number;
        } elseif ($number < 1000000) {
            return number_format($number / 1000, 1) . 'k';
        }

        return number_format($number / 1000000, 1) . 'M';
    }
}

if (!function_exists('format_time_difference')) {

    /**
     * @param Carbon $datetime
     *
     * @return string
     */
    function format_time_difference(Carbon $datetime)
    {
        return $datetime->diffForHumans();
    }
}
