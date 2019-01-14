<?php
  $countries = array ("cr", "de", "us");
  $num_elements = count ($countries);
  for($idx = 0; $idx < $num_elements; ++$idx) 
  {
      echo ("$countries[$idx]    ");
      if ($countries[$idx] == "cr") 
          unset ($countries[$idx]);
  }
  echo "<br><br>";
  for($idx = 0; $idx < $num_elements; ++$idx) 
      echo("$countries[$idx]   ");
?>
