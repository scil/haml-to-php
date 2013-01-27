<?php

require_once(dirname(__FILE__).'/../haml/Haml.php');

define('BASE',dirname(__FILE__));

define('HAML_DIR',BASE.'/haml');
define('HAML_TEMLPATE_CACHE',BASE.'/template-cache');
@mkdir(HAML_TEMLPATE_CACHE, 0777, true);

//define('SNIP_FILES',__DIR__ . '/../test/haml-snip/data.php');
define('SNIP_FILES',implode(';',array(
    HAML_DIR . '/snips/twitterbootstrap.snip.php',
    HAML_DIR . '/snips/twitterbootstrap_demo.snip.php',
    )));
define('HAML_SNIP_CACHE',HAML_TEMLPATE_CACHE);

// create caching haml object
$haml = new HamlFileCache(HAML_DIR, HAML_TEMLPATE_CACHE);

// update cache on each request - usually you want to switch it off
$haml->forceUpdate = true;
// somewhat more pretty HTML - usually you want to switch it off
$haml->options['ugly'] = false;


// xdebug prevents segfaults (caused by stack overflows)
// by introducing a function call depths.
// default is 100 which is not enough for HAML-TO-PHP
@ini_set('xdebug.max_nesting_level','600');

// the data passed to the .haml file. extract() is being used to put keys in scope
$g = array('title' => "You're welcome to modify this HAML sample and play with it"
,'age'=>31
,'name'=>'ivy'
);

try {
    // run the template. Parsing, translating to PHP and writing cache file is done
    // automatically
    //echo $haml->haml('main.haml', $g);
   echo $haml->haml('snip.haml', $g);
} catch (Exception $e) {
  echo "crap! exception: ".$e->getMessage();
  flush();
  throw $e;
}
