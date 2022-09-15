<?php
    // echo "hello!";

    if(!function_exists('printResult'))
    {
        function printResult($result)
        {
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
    }

    if(!function_exists('timeFormatting'))
    {
        function timeFormatting($format,$date)
        {
            $format = date($format, strtotime($date));
            return $format;
        }
    }