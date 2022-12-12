/*jshint esversion: 6 */
import './bootstrap';
import flatpickr from "flatpickr";
import { Spanish } from "flatpickr/dist/l10n/es.js"


flatpickr("#myDate", {
    "locale": Spanish,
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minuteIncrement: 30, //XD
    time_24hr: true,
    weekNumbers: true,
});