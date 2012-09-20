<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property integer $ID
 * @property string $firstName
 * @property string $lastName
 * @property string $companyName
 * @property string $telephoneNumber
 * @property string $faxNumber
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zipCode
 * @property string $country
 * @property string $email
 * @property string $courier
 * @property string $expressAccount
 * @property string $catalogueRequest
 * @property string $requestItemNo
 * @property string $comment
 */
class Contact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contact the static model class
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
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstName, lastName, companyName, telephoneNumber, faxNumber, address, city, state, zipCode, country, email, courier, expressAccount, catalogueRequest, requestItemNo, comment', 'required'),
			array('firstName, lastName, companyName, address, city', 'length', 'max'=>50),
			array('telephoneNumber, faxNumber', 'length', 'max'=>14),
			array('state', 'length', 'max'=>20),
			array('zipCode, courier', 'length', 'max'=>10),
			array('country', 'length', 'max'=>25),
			array('email', 'length', 'max'=>100),
			array('expressAccount', 'length', 'max'=>30),
			array('catalogueRequest', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, firstName, lastName, companyName, telephoneNumber, faxNumber, address, city, state, zipCode, country, email, courier, expressAccount, catalogueRequest, requestItemNo, comment', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'companyName' => 'Company Name',
			'telephoneNumber' => 'Telephone Number',
			'faxNumber' => 'Fax Number',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'zipCode' => 'Zip Code',
			'country' => 'Country',
			'email' => 'Email',
			'courier' => 'Courier',
			'expressAccount' => 'Express Account',
			'catalogueRequest' => 'Catalogue Request',
			'requestItemNo' => 'Request Item No',
			'comment' => 'Comment',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('companyName',$this->companyName,true);
		$criteria->compare('telephoneNumber',$this->telephoneNumber,true);
		$criteria->compare('faxNumber',$this->faxNumber,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zipCode',$this->zipCode,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('courier',$this->courier,true);
		$criteria->compare('expressAccount',$this->expressAccount,true);
		$criteria->compare('catalogueRequest',$this->catalogueRequest,true);
		$criteria->compare('requestItemNo',$this->requestItemNo,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}