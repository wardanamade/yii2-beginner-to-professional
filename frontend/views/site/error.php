<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

preg_match('#\((.*?)\)#',$name,$match);
$code = substr($match[1],1);
$msg = strtolower((trim($name,'(',true)));

if($code == 404){
    echo '<img src="https://learn.getgrav.org/user/pages/11.troubleshooting/01.page-not-found/error-404.png">';
}elseif($code == 403){
    echo '<img src="http://cdn3.wpbeginner.com/wp-content/uploads/2016/03/403forbiddenerror.jpg">';
}else{
    echo '<img src="https://www.computerhope.com/jargon/num/501.jpg">';
}

?>

