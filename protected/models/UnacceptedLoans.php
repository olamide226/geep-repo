<?php

/**
 * This is the model class for table "unaccepted_loans".
 *
 * The followings are the available columns in table 'unaccepted_loans':
 * @property string $id
 * @property string $customer_name
 * @property string $phone_number
 * @property string $association
 * @property string $state
 * @property string $date_offer_was_sent
 * @property string $amount
 * @property string $sub_aggregators
 * @property string $date_loan_was_requested
 * @property string $beneficiaries_institution
 * @property string $date_received
 */
class UnacceptedLoans extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'unaccepted_loans';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('date_received', 'required'),
			array('customer_name, phone_number, state, date_offer_was_sent, amount, date_loan_was_requested', 'length', 'max'=>45),
			array('association, sub_aggregators', 'length', 'max'=>200),
			array('beneficiaries_institution', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customer_name, phone_number, association, state, date_offer_was_sent, amount, sub_aggregators, date_loan_was_requested, beneficiaries_institution, date_received', 'safe', 'on'=>'search'),
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
			'phone_number' => 'Phone Number',
			'association' => 'Association',
			'state' => 'State',
			'date_offer_was_sent' => 'Date Offer Was Sent',
			'amount' => 'Amount',
			'sub_aggregators' => 'Sub Aggregators',
			'date_loan_was_requested' => 'Date Loan Was Requested',
			'beneficiaries_institution' => 'Beneficiaries Institution',
			'date_received' => 'Date Received',
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
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('association',$this->association,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('date_offer_was_sent',$this->date_offer_was_sent,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('sub_aggregators',$this->sub_aggregators,true);
		$criteria->compare('date_loan_was_requested',$this->date_loan_was_requested,true);
		$criteria->compare('beneficiaries_institution',$this->beneficiaries_institution,true);
		$criteria->compare('date_received',$this->date_received,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UnacceptedLoans the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
