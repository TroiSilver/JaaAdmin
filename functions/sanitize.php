<?php
//this will clean the incoming and outgoing request
function escape($string) {
  return htmlentities($string, ENT_QUOTES, 'UTF-8');
}
