<?php 
namespace UgurKorkmaz\Zelty\Tools;

use DateTime;

class Time
{
    public static function minutesToHours(int $minutes): array
    {
        $date = new DateTime("today midnight +$minutes minutes");
        return [
            'hours' => $date->format('H'),
            'minutes' => $date->format('i')
        ];
    }
    public static function allMinutesToHours(array $minutes)
    {
        $date = $minutes;
        foreach ($date as $key => $value) {
            foreach ($value as $key2 => $value2) {
                $date[$key][$key2][0] = Time::minutesToHours($value2[0]);
                $date[$key][$key2][1] = Time::minutesToHours($value2[1]);
            }
        }
        return $date;
    }
}