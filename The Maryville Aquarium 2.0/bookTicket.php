<?php

   $option = isset($GET['visit-show']) ? $GET['visit-show'] : false;
   if ($option) {
      echo htmlentities($GET['visit-show'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     exit; 
   }
//$visitshow = $GET['visit-show'];
//$showDate = $GET['selectedDate'];
//$showTime = $GET['visitTime'];
//$adults = $GET['visit-adults'];
//$childs = $GET['visit-children'];
//$old = $GET['visit-elder'];

echo $showName;
?>