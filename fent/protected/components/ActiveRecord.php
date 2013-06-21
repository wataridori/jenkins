<?php

class ActiveRecord extends CActiveRecord
{
    public function beforeSave() {
        if ($this->isNewRecord || !$this->created_at) {
            $this->created_at = time();        
        }
        $this->updated_at = time();
        return parent::beforeSave();
    }
}
?>
