<?php

if(!isset($_SESSION)){
  session_start();
}

function replace_values_in_post($replace_values, $str_new, $str_array){
  foreach($str_array as $post_var => $post_val){
    $_POST[$post_var] = str_replace($replace_values, $str_new, $post_val);
  }
}
//$replace_values_arr = array("'","\"");
//replace_values_in_post($replace_values_arr,"`",$_POST);

function print_lak($arr){
  if(!is_array($arr)){
    echo "NOT AN ARRAY";
    return 0;
  }
  echo "<br>";
  foreach($arr as $child => $val) {
    if(!is_array($val)){
      echo "<b>$child</b> = $val <br>";
    }
    else{
      echo "<b>$child = {</b><div style='padding-left:1em;'>";
      print_lak($val);
      echo "</div><b>}</b><br>";
    }
  }
  echo "<br>";
}


?>
