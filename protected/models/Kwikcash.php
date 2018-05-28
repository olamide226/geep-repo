<?php

/**
 * This is the model class for table "kwikcash".
 *
 * The followings are the available columns in table 'kwikcash':
 * @property integer $id
 * @property string $customer_name
 * @property string $cust_phone_number
 * @property string $complaints
 * @property string $response
 * @property string $action
 * @property string $created_by
 * @property string $date_created
 */
class Kwikcash extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kwikcash';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_name, cust_phone_number, complaints, response', 'required'),
			array('customer_name, complaints, created_by', 'length', 'max'=>100),
			array('cust_phone_number', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customer_name, cust_phone_number, complaints, response, action, created_by, date_created', 'safe', 'on'=>'search'),
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
			'customer_name' => 'Customer Name',
			'cust_phone_number' => 'Customer Phone Number',
			'complaints' => 'Complaints',
			'response' => 'Response',
			'created_by' => 'Created By',
			'date_created' => 'Date Created',
			'action' => 'Action',
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
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('cust_phone_number',$this->cust_phone_number,true);
		$criteria->compare('complaints',$this->complaints,true);
		$criteria->compare('response',$this->response,true);
		$criteria->compare('action',$this->action,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kwikcash the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
