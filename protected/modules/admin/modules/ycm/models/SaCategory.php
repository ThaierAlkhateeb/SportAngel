<?php

/**
 * This is the model class for table "sa_category".
 *
 * The followings are the available columns in table 'sa_category':
 * @property integer $id
 * @property string $title_en
 * @property string $title_ar
 * @property integer $season_id
 * @property string $img
 *
 * The followings are the available model relations:
 * @property SaSeason[] $saSeasons
 */
class SaCategory extends CActiveRecord
{
        private $title;
     public $adminNames=array('Categories / التصنيفات','category','categories');
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sa_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title_en, title_ar, season_id, img', 'required'),
			array('season_id', 'numerical', 'integerOnly'=>true),
			array('title_en, title_ar', 'length', 'max'=>255),
			array('img', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_en, title_ar, season_id, img', 'safe', 'on'=>'search'),
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
			'saSeasons' => array(self::MANY_MANY, 'SaSeason', 'sa_product(season_id, category_id)'),
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
			'season_id' => 'Season',
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
		$criteria->compare('season_id',$this->season_id);
		$criteria->compare('img',$this->img,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function attributeWidgets()
        {
            return array(
                array('img','image'),
              //  array('','wysiwyg'),
            );
        }
        
        public function getTitle()
        {
            return $this->title_en .' - '. $this->title_ar;
        }
           
         public function season_idChoices()
        {
            return CHtml::listData(SaSeason::model()->findAll(),'id','title');
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
                        'name'=>'season_id',
                        'value'=>'$data->season_id',
                        'filter'=>SaCategory::model()->season_idChoices()),
                    ),
                    
            );
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SaCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
