<?php

class Project extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'post_category';
    }

    public function rules()
    {
        return array(
            array('post_id, category_id', 'required'),
            array('post_id, category_id', 'numerical', 'integerOnly'=>true),
            array('post_id, category_id', 'safe', 'on'=>'search'),
        );
    }
    public function attributeLabels()
    {
        return array(
            'post_id' => 'Season',
            'category_id' => 'Category',
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

        $criteria=new CDbCriteria;

        $criteria->compare('post_id',$this->post_id);
        $criteria->compare('category_id',$this->category_id);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>20,
            ),
        ));
    }
}
