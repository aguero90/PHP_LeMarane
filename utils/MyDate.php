<?php

/**
 * Description of MyDate
 *
 * @author alex
 */
class MyDate {

    const SECOND_IN_MILLISECONDS = 1000;
    const MINUTE_IN_MILLISECONDS = 60000; // 60 * 1000
    const HOUR_IN_MILLISECONDS = 3600000; // 60 * 60 * 1000
    const DAY_IN_MILLISECONDS = 86400000; // 24 * 60 * 60 * 1000
    const PATTERN_DATE = "/(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}/"; // gg-mm-aaaa
    const PATTERN_DATE_AMERICAN = "/[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])/"; // aaaa-mm-gg
    const PATTERN_TIME = "/(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}/"; // HH:MM:SS
    const PATTERN_DATE_TIME = "/(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4} (0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}/"; // gg-mm-aaaa HH:MM:SS
    const PATTERN_DATE_TIME_AMERICAN = "/[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01]) (0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}/"; // aaaa-mm-gg HH:MM:SS

    private $year;
    private $month;
    private $weekOfYear;
    private $dayOfYear;
    private $dayOfMonth;
    private $dayOfWeek;
    private $hour;
    private $minute;
    private $second;
    private $daysInThisMonth;
    private $timestamp;
    private $timezoneName;
    private $timezoneTime;

    /**
     * how to use:
     *      - new MyDate() create a myDate object for now
     *      - new MyDate($timestamp) create a myDate object from the timestamp passed
     *      - new MyDate($stringDate) create a myDate object from the stringDate passed
     *
     * $stringDate può essere della forma:
     *      - "gg-mm-aaaa HH-MM-SS": giorno 01-31, mese 01-12, anno a 4 cifre,
     *                               ore 00-23, minuti 00-59, secondi 00-59
     *      - "aaaa-mm-gg HH-MM-SS"
     *      - "gg-mm-aaaa": giorno 01-31, mese 01-12, anno a 4 cifre.
     *                     In questo caso ore, minuti e secondi saranno a 0
     *      - "aaaa-mm-gg"
     *
     *
     * @param int|string $arg optional
     */
    public function __construct($arg = null) {

        if (MyUtils::isEmpty($arg)) {

            $this->constructorString(date("d-N-z-W-m-t-Y-H-i-s-U-e-P"));
        } elseif (is_int($arg)) {

            $this->constructorString(date("d-N-z-W-m-t-Y-H-i-s-U-e-P", $arg));
        } elseif (is_string($arg)) {

            if (preg_match(self::PATTERN_DATE_TIME, $arg)) {

                $date = date_create_from_format("d-m-Y H:i:s", $arg);
                $this->constructorString($date->format("d-N-z-W-m-t-Y-H-i-s-U-e-P"));
            } elseif (preg_match(self::PATTERN_DATE_TIME_AMERICAN, $arg)) {

                $date = date_create_from_format("Y-m-d H:i:s", $arg);
                $this->constructorString($date->format("d-N-z-W-m-t-Y-H-i-s-U-e-P"));
            } elseif (preg_match(self::PATTERN_DATE, $arg)) {

                $date = date_create_from_format("d-m-Y H:i:s", $arg . " 00:00:00");
                $this->constructorString($date->format("d-N-z-W-m-t-Y-H-i-s-U-e-P"));
            } elseif (preg_match(self::PATTERN_DATE_AMERICAN, $arg)) {

                $date = date_create_from_format("Y-m-d H:i:s", $arg . " 00:00:00");
                $this->constructorString($date->format("d-N-z-W-m-t-Y-H-i-s-U-e-P"));
            } else {
                // passato un formato sbagliato;
                echo 'MyDate: hai passato il formato della stringa sbagliato';
            }
        } else {
            // passato un tipo sbagliato;
            echo 'MyDate: non hai passato nè un intero nè una stringa';
        }
    }

    private function constructorString($date) {

        // otteniamo un array di stringhe dividendo la stringa di partenza
        // in base al separatore "-"
        $dateArray = explode("-", $date);

        $this->dayOfMonth = $dateArray[0]; // d: giorno del mese, da 01 a 31
        $this->dayOfWeek = $dateArray[1]; // N: giorno della settimana, da 1 (lunedì) a 7 (domenica)
        $this->dayOfYear = $dateArray[2]; // z: giorno dell'anno, da 0 a 365

        $this->weekOfYear = $dateArray[3]; // W: settimana dell'anno, ad esempio 42 = la 42sima settimana dell'anno

        $this->month = $dateArray[4]; // m: da 01 (gennaio) a 12 (dicembre)

        $this->daysInThisMonth = $dateArray[5]; // t: numero dei giorni nel mese della data

        $this->year = $dateArray[6]; // Y: anno a 4 cifre

        $this->hour = $dateArray[7]; // H: ora nel formato di 24 ore, da 00 a 23

        $this->minute = $dateArray[8]; // i: minuti, da 00 a 59

        $this->second = $dateArray[9]; // s: secondi, da 00 a 59

        $this->timestamp = $dateArray[10]; // U: il timestamp della data

        $this->timezoneName = $dateArray[11]; // e: la timezone
        $this->timezoneTime = $dateArray[12]; // P: ore e minuti di differenza dal meridiano di Greenwich, ad esempio +02:00
    }

    public function getYear() {
        return $this->year;
    }

    public function getMonth() {
        return $this->month;
    }

    public function getWeekOfYear() {
        return $this->weekOfYear;
    }

    public function getDayOfYear() {
        return $this->dayOfYear;
    }

    public function getDayOfMonth() {
        return $this->dayOfMonth;
    }

    public function getDayOfWeek() {
        return $this->dayOfWeek;
    }

    public function getHour() {
        return $this->hour;
    }

    public function getMinute() {
        return $this->minute;
    }

    public function getSecond() {
        return $this->second;
    }

    public function getDaysInThisMonth() {
        return $this->daysInThisMonth;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }

    public function getTimezoneName() {
        return $this->timezoneName;
    }

    public function getTimezoneTime() {
        return $this->timezoneTime;
    }

    public function setYear($year) {
        $this->year = $year;
        return $this;
    }

    public function setMonth($month) {
        $this->month = $month;
        return $this;
    }

    public function setWeekOfYear($weekOfYear) {
        $this->weekOfYear = $weekOfYear;
        return $this;
    }

    public function setDayOfYear($dayOfYear) {
        $this->dayOfYear = $dayOfYear;
        return $this;
    }

    public function setDayOfMonth($dayOfMonth) {
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    public function setDayOfWeek($dayOfWeek) {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    public function setHour($hour) {
        $this->hour = $hour;
        return $this;
    }

    public function setMinute($minute) {
        $this->minute = $minute;
        return $this;
    }

    public function setSecond($second) {
        $this->second = $second;
        return $this;
    }

    public function setDaysInThisMonth($daysInThisMonth) {
        $this->daysInThisMonth = $daysInThisMonth;
        return $this;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function setTimezoneName($timezoneName) {
        $this->timezoneName = $timezoneName;
        return $this;
    }

    public function setTimezoneTime($timezoneTime) {
        $this->timezoneTime = $timezoneTime;
        return $this;
    }

    public function toString() {
        $result = "";

        $result .= $this->dayOfMonth;
        $result .= "-";
        $result .= $this->month;
        $result .= "-";
        $result .= $this->year;
        $result .= " ";
        $result .= $this->hour;
        $result .= ":";
        $result .= $this->minute;
        $result .= ":";
        $result .= $this->second;

        return $result;
    }

    public function toStringForDB() {
        $result = "";

        $result .= $this->year;
        $result .= "-";
        $result .= $this->month;
        $result .= "-";
        $result .= $this->dayOfMonth;
        $result .= " ";
        $result .= $this->hour;
        $result .= ":";
        $result .= $this->minute;
        $result .= ":";
        $result .= $this->second;

        return $result;
    }

}
