<?php

/**
 * This is the model class for table "sample".
 *
 * The followings are the available columns in table 'sample':
 * @property integer $id
 * @property integer $field0
 * @property integer $field1
 * @property integer $field2
 * @property integer $field3
 * @property string $field4
 * @property string $field5
 * @property string $field6
 * @property string $field7
 * @property string $field8
 * @property string $field9
 * @property string $field10
 * @property string $field11
 * @property string $field12
 * @property string $field13
 * @property integer $field14
 */
class Sample extends CActiveRecord
{
    /**
     * Admin variables (ycm module)
     */
    public $adminNames=array('Samples','sample','samples'); // admin interface, singular, plural
    public $downloadExcel=true; // Download Excel
    public $downloadMsCsv=true; // Download MS CSV
    public $downloadCsv=true; // Download CSV

    /**
     * Behaviors.
     * @return array
     */
    function behaviors() {
        return array(
            'file' => array(
                'class'=>'application.modules.ycm.behaviors.FileBehavior',
            ),
        );
    }

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Sample the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'sample';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('field4, field5, field6, field7', 'required'),
            array('field0, field1, field2, field3, field14', 'numerical', 'integerOnly'=>true),
            array('field4, field5', 'length', 'max'=>128),
            array('field8, field9, field13', 'length', 'max'=>64),
            array('field8, field9', 'unsafe'),
            array('field8', 'file', 'on'=>'insert', 'allowEmpty'=>true, 'types'=>'jpg,jpeg,gif,png', 'maxSize'=>1024*1024*6),
            array('field8', 'file', 'on'=>'update', 'allowEmpty'=>true, 'types'=>'jpg,jpeg,gif,png', 'maxSize'=>1024*1024*6),
            array('field9', 'file', 'on'=>'insert', 'allowEmpty'=>true, 'types'=>'jpg,jpeg,gif,png,gz,tar,zip,pdf,doc,docx,xls,xlsx,ppt,pptx,pps,ppsx', 'maxSize'=>1024*1024*6),
            array('field9', 'file', 'on'=>'update', 'allowEmpty'=>true, 'types'=>'jpg,jpeg,gif,png,gz,tar,zip,pdf,doc,docx,xls,xlsx,ppt,pptx,pps,ppsx', 'maxSize'=>1024*1024*6),
            array('field10, field11, field12', 'safe'),

            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, field0, field1, field2, field3, field4, field5, field6, field7, field8, field9, field10, field11, field12, field13, field14', 'safe', 'on'=>'search'),
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
            'field0' => 'Field 0',
            'field1' => 'Field 1',
            'field2' => 'Field 2',
            'field3' => 'Field 3',
            'field4' => 'Field 4',
            'field5' => 'Field 5',
            'field6' => 'Field 6',
            'field7' => 'Field 7',
            'field8' => 'Field 8',
            'field9' => 'Field 9',
            'field10' => 'Field 10',
            'field11' => 'Field 11',
            'field12' => 'Field 12',
            'field13' => 'Field 13',
            'field14' => 'Field 14',
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

        $criteria->compare('id',$this->id);
        $criteria->compare('field0',$this->field0);
        $criteria->compare('field1',$this->field1);
        $criteria->compare('field2',$this->field2);
        $criteria->compare('field3',$this->field3);
        $criteria->compare('field4',$this->field4,true);
        $criteria->compare('field5',$this->field5,true);
        $criteria->compare('field6',$this->field6,true);
        $criteria->compare('field7',$this->field7,true);
        $criteria->compare('field8',$this->field8,true);
        $criteria->compare('field9',$this->field9,true);
        $criteria->compare('field10',$this->field10,true);
        $criteria->compare('field11',$this->field11,true);
        $criteria->compare('field12',$this->field12,true);
        $criteria->compare('field13',$this->field13,true);
        $criteria->compare('field14',$this->field14);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Config for attribute widgets (ycm module)
     *
     * @return array
     */
    public function attributeWidgets()
    {
        return array(
            array('field0','chosen'),
            array('field1','chosenMultiple'),
            array('field2','dropDown'),
            array('field3','radioButton'),
            array('field4','textField'),
            array('field5','password'),
            array('field6','textArea'),
            array('field7','wysiwyg'),
            array('field8','image'),
            array('field9','file'),
            array('field10','date'),
            array('field11','time'),
            array('field12','datetime'),
            array('field13','disabled'),
            array('field14','boolean'),
        );
    }

    /**
     * Select choices for field0 (ycm module)
     *
     * @return array
     */
    public function field0Choices()
    {
        return array(
            '1'=>'First',
            '2'=>'Second',
            '3'=>'Third',
        );
    }

    /**
     * Select choices for field1 (ycm module)
     *
     * @return array
     */
    public function field1Choices()
    {
        return array(
            '1'=>'First',
            '2'=>'Second',
            '3'=>'Third',
        );
    }

    /**
     * Select choices for field2 (ycm module)
     *
     * @return array
     */
    public function field2Choices()
    {
        return array(
            '1'=>'First',
            '2'=>'Second',
            '3'=>'Third',
        );
    }

    /**
     * Select choices for field3 (ycm module)
     *
     * @return array
     */
    public function field3Choices()
    {
        return array(
            '1'=>'First',
            '2'=>'Second',
            '3'=>'Third',
        );
    }

    /**
     * Config for TbGridView class (ycm module)
     *
     * @return array
     */
    public function adminSearch()
    {
        return array(
            'columns'=>array(
                'field4',
                'id',
                array(
                    'name'=>'field0',
                    'value'=>'$data->field0',
                    'filter'=>Sample::model()->field0Choices(),
                ),
                array(
                    'name'=>'field3',
                    'value'=>'$data->field3',
                    'filter'=>Sample::model()->field3Choices(),
                ),
                array(
                    'name'=>'field14',
                    'value'=>'$data->field14==1 ? CHtml::encode("Yes") : CHtml::encode("No")',
                    'filter'=>array(1=>'Yes',0=>'No'),
                ),
                array(
                    'name' => 'field12',
                    'value' => 'date("d.m.Y H:i:s",strtotime($data->field12))',
                ),
            ),
        );
    }
}