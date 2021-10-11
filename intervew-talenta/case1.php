<?php
/** Case 1 : Count weekdays in date range*/
  /** Note : 
   * $date1 = first date in range
   * $date2 = last date in range 
   * $search = day u want to count, use either day name [Mon, Tue, Wed, Thu, Fri, Sat, Sun] or [1, 2, 3, 4, 5, 6, 0]
   * 0 = sunday, 6 = saturday
   * */
  function countWeekday($date1, $date2, $search){
      /** Set date params to Ymd format */
        $date_s = date('Y-m-d', strtotime($date1));
        $date_e = date('Y-m-d', strtotime($date2));
        $weekDay = 0;
        $day = array();

      /** Loop from date1 to date2 */
        while(strtotime($date_s) <= strtotime($date_e)){
            /** User w if, $search is [1, 2, 3, 4, 5, 6, 0] */
            if(in_array(date('w', strtotime($date_s)), $search)){
                $weekDay++;

                /** Return total date each day */
                $day[date('w', strtotime($date_s))] = $day[date('w', strtotime($date_s))] + 1;
            }

            /** User D if, $search is [Mon, Tue, Wed, Thu, Fri, Sat, Sun] */
            // if(in_array(date('D', strtotime($date_s)), $search)){
            //     $weekDay++;

                /** Return total date each day */
                // $day[date('w', strtotime($date_s))] = $day[date('w', strtotime($date_s))] + 1;
            // }
            $date_s = date('Y-m-d', strtotime('+1 days', strtotime($date_s)));
        }

        return $weekDay;
  }
  
  $twd = countWeekday('2021-01-01', '2021-01-25', [1, 2, 3, 4, 5]);
  print("<pre>".print_r($twd, true)."</pre>");