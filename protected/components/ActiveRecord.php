<?php

class ActiveRecord extends CActiveRecord {

    public function getUrl() {

        $controller = get_class($this);
        $controller [0] = strtolower($controller [0]);
        $params = array(
            'id'=>$this->id
        );
        
        if ($this->hasAttribute('title')) {
            $params ['title'] = $this->title;
        }
        return Yii::app()->urlManager->createUrl($controller . '/view', $params);
    }
}