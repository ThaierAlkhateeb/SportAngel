<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $activationToken
 * @property string $lastActivationRequest
 * @property integer $lostPasswordRequest
 * @property integer $active
 * @property string $signUpDate
 * @property string $lastSignIn
 *
 * The followings are the available model relations:
 * @property UserRole[] $userRoles
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, signUpDate', 'required'),
                        array('password','length', 'min'=>8),
			array('lostPasswordRequest, active', 'numerical', 'integerOnly'=>true),
			array('username, email', 'length', 'max'=>150),
                        array('email', 'email'),
			array('password, activationToken', 'length', 'max'=>255),
			array('lastActivationRequest', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, email, activationToken, lastActivationRequest, lostPasswordRequest, active, signUpDate, lastSignIn', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'activationToken' => 'Activation Token',
			'lastActivationRequest' => 'Last Activation Request',
			'lostPasswordRequest' => 'Lost Password Request',
			'active' => 'Active',
			'signUpDate' => 'Sign Up Date',
			'lastSignIn' => 'Last Sign In',
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
		$criteria->compare('username',$this->username,true);
		
		$criteria->compare('email',$this->email,true);
		$criteria->compare('activationToken',$this->activationToken,true);
		$criteria->compare('lastActivationRequest',$this->lastActivationRequest,true);
		$criteria->compare('lostPasswordRequest',$this->lostPasswordRequest);
		$criteria->compare('active',$this->active);
		$criteria->compare('signUpDate',$this->signUpDate,true);
		$criteria->compare('lastSignIn',$this->lastSignIn,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        static public function generateHash($plainText, $salt = null)
	{
            if ($salt === null){
                $salt = substr(md5(uniqid(rand(), true)), 0, 25);
            }else{
                $salt = substr($salt, 0, 25);
            }
            return $salt . sha1($salt . $plainText);
	}
}
