<?php
class ViewLinkBehavior extends CBehavior
{
    public $display_attribute = 'id';
    public $view_model = null;
    
    public function createViewLink($text = null, $htmlOptions = null)
    {
        $owner = $this->getOwner();        
        if (!$text) {
            $text = $owner->{$this->display_attribute};        
        }
        if ($this->view_model) {
            $controller = $owner->{$this->view_model}->tableName().'/view';
            $id = $owner->{$this->view_model}->id;            
        } else {
            $controller = $owner->tableName().'/view';
            $id = $owner->id;
        }
        return CHtml::link($text, 
            Yii::app()->createUrl($controller, array('id' => $id)), $htmlOptions);
    }
}
?>
