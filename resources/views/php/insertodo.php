<?php 
use App\todolist;
$champ = "variable get : ".$_GET["data"];
echo $champ;
todolist::where('user_id',$user_id)->update(array('champ'=>$champ));

