<?php
function dosql($action,$sql){
  # assuming you have setup a link to your database entitled $link
  # action = 1 run this query
  # action = 0 don't run, just return sql statement
 
  $start = getmtime();
 
  if($action==1){
    $result = mysql_query($sql);
    $affectedrows = "[".mysql_affected_rows($link)."]";
  }
  return "[".number_format((getmtime()-$start),3)."][$action]: $sql\n";
  mysql_free_result($result);
}
?>