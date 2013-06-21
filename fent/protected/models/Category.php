<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $id
 * @property string $name
 * @property integer $updated_at
 * @property integer $created_at
 */
class Category extends ActiveRecord 
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Category the static model class
     */
    public static function model($className = __CLASS__) 
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() 
    {
        return 'category';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() 
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('updated_at, created_at', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 45),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, updated_at, created_at', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() 
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            "devices"=>array(self::HAS_MANY, 'Device', 'category_id')
        );
    }
    
    public function behaviors()
    {
        return array(            
            'ViewLinkBehavior' => array(
                'class' => 'application.components.ViewLinkBehavior',     
                'display_attribute' => 'name'
            )
        );
    }
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() 
    {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() 
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('updated_at', $this->updated_at);
        $criteria->compare('created_at', $this->created_at);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}