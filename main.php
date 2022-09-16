<?php

/*
 * Complete the 'dayOfProgrammer' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts INTEGER year as parameter.
 */

function dayOfProgrammer($year) {
//  January has 31 days,
//  February ==> its 29 in leap years and 28 in all other years,
//  March has 31 days,
//  April has 30 days, 
//  May has 31 days,
//  June has 30 days,
//  July has 31 days,
//  August has 31 days.


//  Day of the Programmer was 256th day of the year
//  Sum of all months without February = 215
    const $day= 256 - 215;
   
// 13 ==> the days diffrence between Julian and Gregorian as the next day after January 31st was February 14th.
    const $diffrence = 13;

// if date out of range from 1700 to 2700
    if(1700 > $year || $year > 2700){
        return false;
    }
      
// if date in range from 1700 to 2700

    if(1700<= $year && $year <=1917){
        // its Julian calendar system

        //  In the Julian calendar, leap years are divisible by 4
        if($year % 4  == 0){
           return $day - 29 .".09.".$year;
        }else{
            return $day - 28 .".09.".$year;
        }
        
    }elseif(1919<= $year && $year <= 2700){
        // its Gregorian calendar system
         
        // in the Gregorian calendar, leap years are either of the following:
        // Divisible by 400.
        // Divisible by 4 and not divisible by 100

        if($year % 400  == 0 || ($year % 4 == 0 && $year % 100 != 0)){
           return $day - 29 .".09.".$year;
        }else{
            return $day - 28 .".09.".$year;
           
        }
        
    }else{
        // The transition from the Julian to Gregorian calendar system occurred in 1918
         
        

        if($year % 400  == 0 || ($year % 4 == 0 && $year % 100 != 0)){
            return ($day - 29) + $diffrence .".09.".$year;
        }else{
            return ($day - 28) + $diffrence .".09.".$year;
        }
    }
    

}


 ?>