<?php

/**
 * This is the model class for table "fraud".
 *
 * The followings are the available columns in table 'fraud':
 * @property string $id
 * @property string $customer_name
 * @property string $cust_phone_number
 * @property string $date
 * @property string $association
 * @property string $complaints
 * @property string $response
 * @property string $created_by
 * @property string $action
 * @property string $agent_name
 * @property string $agent_phn_number
 * @property string $payment_medium
 */
class Fraud extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fraud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_name, complaints, response, agent_name, agent_phn_number, payment_medium', 'required'),
			array('customer_name, created_by', 'length', 'max'=>60),
			array('cust_phone_number', 'length', 'max'=>11),
			array('association, agent_name, payment_medium', 'length', 'max'=>100),
			array('response', 'length', 'max'=>300),
			array('agent_phn_number', 'length', 'max'=>11),
			array('action', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customer_name, cust_phone_number, date, association, complaints, response, created_by, action, agent_name, agent_phn_number, payment_medium', 'safe', 'on'=>'search'),
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
			'date' => 'Date',
			'association' => 'Association',
			'complaints' => 'Complaints',
			'response' => 'Response',
			'created_by' => 'Created By',
			'action' => 'Action',
			'agent_name' => 'Agent Name',
			'agent_phn_number' => 'Agent Phone Number',
			'payment_medium' => 'Payment Medium',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('cust_phone_number',$this->cust_phone_number,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('association',$this->association,true);
		$criteria->compare('complaints',$this->complaints,true);
		$criteria->compare('response',$this->response,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('action',$this->action,true);
		$criteria->compare('agent_name',$this->agent_name,true);
		$criteria->compare('agent_phn_number',$this->agent_phn_number,true);
		$criteria->compare('payment_medium',$this->payment_medium,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Fraud the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
