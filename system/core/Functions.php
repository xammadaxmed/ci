<?php

function dd($var,$info=false)
{
    $method="print_r";
    if($info)
    {
       $method="var_dump";
    }
    echo '<pre style="background-color: black; color:green; height:auto;">';
    $method($var);
    echo "</pre>";
    die();
}
