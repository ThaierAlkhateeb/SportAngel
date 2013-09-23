<?php

/**
 * This is the model class for table "sa_product".
 *
 * The followings are the available columns in table 'sa_product':
 * @property integer $id
 * @property string $title_en
 * @property string $title_ar
 * @property string $desc_en
 * @property string $desc_ar
 * @property string $img
 * @property integer $category_id
 *
 * The followings are the available model relations:
 * @property SaCategory $category
 */
class SaProduct extends CActiveRecord
{
    
    
       public $adminNames=array('Products / المنتجات','product','products');
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sa_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title_en, title_ar, img, category_id', 'required'),
			array('category_id', 'numerical', 'integerOnly'=>true),
			array('title_en, title_ar, img', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_en, title_ar, desc_en, desc_ar, img, category_id', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'SaCategory', 'category_id'),
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
			'img' => 'Image',
			'category_id' => 'Category',
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
		$criteria->compare('category_id',$this->category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
         public function attributeWidgets()
    {
        return array(
            array('img','image'),
            array('category_id','dropDown'),
            
        );
    }
        public function category_idChoices()
        {
            return CHtml::listData(SaCategory::model()->findAll(),'id','title');
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SaProduct the static model class
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
                    'title_ar',
                   /* array(
                        'name'=>'img',
                        'type'=>'html',
                        'value'=>'(!empty($data->img))?CHtml::image($data->img):"no image"'
                    ),
                    * 
                    */
                    array(
                        'name'=>'category_id',
                        'value'=>'$data->category_id',
                        'filter'=>SaProduct::model()->category_idChoices()),
                    ),
                    
            );
        }
}
