<?php

/**
 * This is the model class for table "unaccepted_loans_calls".
 *
 * The followings are the available columns in table 'unaccepted_loans_calls':
 * @property string $id
 * @property string $customer_name
 * @property string $phone_number
 * @property string $association
 * @property string $state
 * @property string $date_offer_was_sent
 * @property string $amount
 * @property string $tenure
 * @property string $sub_aggregators
 * @property string $date_loan_was_requested
 * @property string $beneficiaries_institution
 * @property string $status
 * @property string $date_received
 * @property string $comment
 * @property string $interest
 * @property string $agent_comment
 * @property string $created_on
 * @property string $created_by
 */
class UnacceptedLoansCalls extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'unaccepted_loans_calls';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comment, interest, call_duration', 'required'),
			array('customer_name, phone_number, state, date_offer_was_sent, amount, date_loan_was_requested', 'length', 'max'=>45),
			array('association, sub_aggregators, agent_comment', 'length', 'max'=>200),
			array('tenure', 'length', 'max'=>20),
			array('beneficiaries_institution', 'length', 'max'=>100),
			array('status, date_received', 'length', 'max'=>50),
			array('created_by', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customer_name, phone_number, association, state, date_offer_was_sent, amount, tenure, sub_aggregators, date_loan_was_requested, beneficiaries_institution, status, date_received, comment, interest, agent_comment, created_on, created_by', 'safe', 'on'=>'search'),
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
			'tenure' => 'Tenure',
			'sub_aggregators' => 'Sub Aggregators',
			'date_loan_was_requested' => 'Date Loan Was Requested',
			'beneficiaries_institution' => 'Beneficiaries Institution',
			'status' => 'Status',
			'date_received' => 'Date Received',
			'comment' => 'Comment',
			'interest' => 'Interest',
			'agent_comment' => 'Agent Comment',
			'created_on' => 'Created On',
			'created_by' => 'Created By',
            'call_duration'=>'Call Duration',
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
		$criteria->compare('tenure',$this->tenure,true);
		$criteria->compare('sub_aggregators',$this->sub_aggregators,true);
		$criteria->compare('date_loan_was_requested',$this->date_loan_was_requested,true);
		$criteria->compare('beneficiaries_institution',$this->beneficiaries_institution,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('date_received',$this->date_received,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('interest',$this->interest,true);
		$criteria->compare('agent_comment',$this->agent_comment,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('created_by',$this->created_by,true);
        $criteria->compare('call_duration',$this->call_duration,true);



		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UnacceptedLoansCalls the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
