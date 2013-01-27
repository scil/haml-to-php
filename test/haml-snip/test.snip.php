<?php
if(version_compare(PHP_VERSION, '5.3', '<'))
{
    return 'callable snips are defined by closure, requireing php 5.3 ;  you can use Variable functions instead';
}

$hello=<<<SNIP
#head
  .c1
    hello
SNIP;

$hello1=<<<SNIP
#head
  @@@
  .c1
    hello
SNIP;

$hello2=<<<SNIP
#head
  @@@
  .c1
    hello
    @@@
SNIP;
  
$name=<<<SNIP
#head
  @@@pl1
  .c1
    hello
    @@@pl2
SNIP;
  
$mix=<<<SNIP
#head
  @@@
  .c1
    hello
    @@@pl2
  @@@
SNIP;
  
$snip= <<<SNIP
%div#head
  hello world!
  @@@
  @@@name2
  @@@name1
  @@@
SNIP;

$hellocall=function($arg){
    $name=isset($arg['name'])?$arg['name']:'wl';
    $age=isset($arg['age'])?$arg['age']:'18';
    return <<<SNIP
.person#$name
  .name $name
  .age $age
SNIP;
};

$hellocall1=function($arg){
    $name=isset($arg['name'])?$arg['name']:'wl';
    $age=isset($arg['age'])?$arg['age']:'18';
    return <<<SNIP
.person#$name
  .name $name
  .age $age
@@@
SNIP;
};

?>