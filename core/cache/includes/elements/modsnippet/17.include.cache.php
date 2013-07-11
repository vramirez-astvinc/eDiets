<?php
function elements_modsnippet_17($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
/*
  * Switch
  *
  * Created by Uroš Likar
  * uros.likar@gmail.com
  * http://uros.likar.si
  *
  */
  
  if(empty($default)) $default = '';  
  $i = 1;  
  while(isset(${'c'.$i})){
    $case[$i] = trim(${'c'.$i});
    $do[$i] = trim(${'do'.$i});
    $i++;  
  }
  
  $key = array_search(trim($get),$case); 
  if(!empty($key)) $output = $do[$key]; else $output = $default;
    
  return $output;
}
