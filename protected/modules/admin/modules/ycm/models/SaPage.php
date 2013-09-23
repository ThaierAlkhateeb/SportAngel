<?php

/**
 * This is the model class for table "sa_page".
 *
 * The followings are the available columns in table 'sa_page':
 * @property integer $id
 * @property string $title_en
 * @property string $titile_ar
 * @property string $desc_en
 * @property string $desc_ar
 * @property string $img
 */
class SaPage extends CActiveRecord
{
	
        
       public $adminNames=array('Pages  / الصفحات ','page','pages');
       
    	public function tableName()
	{
		return 'sa_page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title_en, title_ar', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('title_en, title_ar, img', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_en, title_ar, desc_en, desc_ar, img', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title_en' => 'Title En',
			'title_ar' => 'Title Ar',
			'desc_en' => 'Desc En',
			'desc_ar' => 'Desc Ar',
			'img' => 'Img',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('title_ar',$this->title_ar,true);
		$criteria->compare('desc_en',$this->desc_en,true);
		$criteria->compare('desc_ar',$this->desc_ar,true);
		$criteria->compare('img',$this->img,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
      
        public function attributeWidgets()
            {
                return array(
                    array('img','image'),
                   // array('desc_en','textArea'),

                );
            }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SaPage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
      public function adminSearch()
    {
         return array(
                'columns'=>array(
                    'title_en',
                    'title_ar',),
            );
    }
}
