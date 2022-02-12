<?php
namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Html;

class SmallBody extends Widget
{
    public $body;
    public $count = 20;

    public function init()
    {
        parent::init();
        $mini = explode(" ", $this->body);
        if (count($mini) <= $this->count) {
            $this->body;
        } else {
            array_splice($mini, $this->count);
            $this->body = implode(" ", $mini) . '...';
        }
    }

    public function run()
    {
        return Html::decode($this->body, $this->count);
    }
}