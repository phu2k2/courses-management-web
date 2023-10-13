<?php

if (!function_exists('formatNumberToShort')) {

    /**
     * @return string
     */
    function formatNumberToShort(int $number): string
    {
        if ($number < 1000) {
            return (string)$number;
        } elseif ($number < 1000000) {
            return number_format($number / 1000, 1) . 'k';
        }

        return number_format($number / 1000000, 1) . 'M';
    }
}
