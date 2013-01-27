<?php

@ini_set('xdebug.max_nesting_level','600');

define('SNIP_FILES',__DIR__ . '/test.snip.php');
define('HAML_SNIP_CACHE',__DIR__.'/snip-cache');
@mkdir(HAML_SNIP_CACHE, 0777, true);


define('HAML_TEST_DIR',dirname(__FILE__).'/../haml');
$jsondata=array(
  dirname(__FILE__).'/tests.json',
//  HAML_TEST_DIR.'/ruby-haml-3.0.24-tests.json',
//  HAML_TEST_DIR.'/extra-tests.json',
);

require_once HAML_TEST_DIR.'/test.php';
