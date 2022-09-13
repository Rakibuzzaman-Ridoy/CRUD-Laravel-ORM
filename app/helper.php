<?php 
    //echo "hello";

    if(!function_exists('printResult'))
    {
        function printResult($data)
        {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }

    // if(!function_exists("dateFormatting"))
    // {
    //     function dateFormatting($format, $date)
    //     {
    //         $format = date($format, strtotime($date));
    //         return $format;
    //     }
    // }

   if(!function_exists("dateFormatting"))
   {
    function dateFormatting($format, $date)
    {
        $formatting = date($format, strtotime($date));
        return $formatting;
    }
   }