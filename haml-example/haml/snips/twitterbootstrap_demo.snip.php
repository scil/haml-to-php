<?php
if(version_compare(PHP_VERSION, '5.3', '<'))
{
    return 'callable snips are defined by closure, requireing php 5.3 ;  you can use Variable functions instead';
}

/*
 * example: (fluid="1" grid="4 -4 4")
 * url: http://twitter.github.com/bootstrap/scaffolding.html#fluidGridSystem
 */
$grid=function($a)
{
    $gridclass=isset($a['fluid'])?'row-fluid':'row';
    $grids=array(".$gridclass.show-grid\n");
    $offset=false;
    foreach (explode(' ',$a['grid']) as $v) {
        if($v[0]==='-') {
            $offset=$v[1];
            continue;
        }
        if($offset){
            $grids[]="  .span$v.offset$offset\n    @@@\n";
            $offset=false;
        }else{
            $grids[]="  .span$v\n    @@@\n";
        }
    }
    return implode('', $grids);


}

?>
