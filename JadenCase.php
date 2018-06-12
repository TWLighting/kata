<?php

function toJadenCase($string) 
{
  $tolower=strtolower($string);  
  $words=explode(' ',$tolower);
  $result=array();
  foreach($words as $value){
  $result[]=ucfirst($value);
  }
  echo implode(" ",$result);
}

toJadenCase("How can mirrors be real if our eyes aren't real"); 
