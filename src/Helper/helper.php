<?php

use Anuzpandey\LaravelNepaliDate\LaravelNepaliDate;
use Carbon\Carbon;

if (!function_exists('toNepaliDate')) {
    /**
     * The function converts a given date to the Nepali date format
     * @param string|Carbon $date <p>The date parameter is a string that represents the date in the English calendar format.</p>
     * @param string|null $format <p>The format parameter is used to specify the desired format of the Nepali date.</p>
     * @param string $locale <p>The "locale" parameter is used to specify the language and region. Supported languages are <i>en</i> and <i>np</i></p>
     * @return string <p>Nepali date converted from the given English Date.</p>
     */
    function toNepaliDate(string|Carbon $date, ?string $format = 'Y-m-d', string $locale = 'en'): string
    {
        return LaravelNepaliDate::from($date)
            ->toNepaliDate($format, $locale);
    }
}

if (!function_exists('toEnglishDate')) {
    /**
     * The function converts a given date to the English date format
     * @param $date <p>The date parameter is a string that represents the date in the Nepali calendar format.</p>
     * @param string $format <p>The format parameter is used to specify the desired format of the English date.</p>
     * @param string $locale <p>The "locale" parameter is used to specify the language and region. Supported languages are <i>en</i> and <i>np</i></p>
     * @return string <p>English date converted from the given Nepali Date.</p>
     */
    function toEnglishDate(string|Carbon $date, string $format = 'Y-m-d', string $locale = 'en'): string
    {
        return LaravelNepaliDate::from($date)
            ->toEnglishDate($format, $locale);
    }
}
