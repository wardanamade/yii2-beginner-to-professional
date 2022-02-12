<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

echo Url::previous('rem1');
echo '<br>';
echo Url::previous('rem2');


?>
<div class="site-about container">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
