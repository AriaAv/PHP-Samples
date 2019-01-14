<?
  $arr = array(3,2,6,9,4,6);
  do {
     $k = key ($arr);
     $val = current ($arr);
     echo ("Element $k equals $val<BR>\n");
  }while (next($arr));
?>
