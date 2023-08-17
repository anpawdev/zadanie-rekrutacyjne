<?php

// allow using SVG
add_filter('mime_types', 'cc_adding_mime_types_support', 99);

function cc_adding_mime_types_support($mimes)
{

  if (!defined('ALLOW_UNFILTERED_UPLOADS')) {
    define('ALLOW_UNFILTERED_UPLOADS', true);
  }
  $mimes['svg']  = 'image/svg+xml';


  return $mimes;
}


// disable some scripts while on the localhost
function ct_is_staging(){
  if($_SERVER['HTTP_HOST'] == 'localhost'){
    return true;
  }
  return false;
}