<?php

/**
 * This is the model class for table "tickets".
 *
 * The followings are the available columns in table 'tickets':
 * @property string $ticket_number
 * @property string $customer_name
 * @property string $member_id
 * @property string $phone_number
 * @property string $other_contact_information
 * @property string $issue
 * @property string $ticket_date
 * @property string $advised_course_of_action
 * @property string $boi_status
 * @property string $created_by
 */
class Tickets extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tickets';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('issue, boi_status, created_by', 'required'),
			array('customer_name', 'length', 'max'=>60),
			array('member_id, phone_number, boi_status', 'length', 'max'=>45),
			array('other_contact_information', 'length', 'max'=>100),
			array('issue, advised_course_of_action', 'length', 'max'=>200),
			array('created_by', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ticket_number, customer_name, member_id, phone_number, other_contact_information, issue, ticket_date, advised_course_of_action, boi_status, created_by', 'safe', 'on'=>'search'),
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
			'ticket_number' => 'Ticket Number',
			'customer_name' => 'Customer Name',
			'member_id' => 'Member ID',
			'phone_number' => 'Phone Number',
			'other_contact_information' => 'Other Contact Information',
			'issue' => 'Issue',
			'ticket_date' => 'Ticket Date',
			'advised_course_of_action' => 'Advised Course Of Action',
			'boi_status' => 'Boi Status',
			'created_by' => 'Created By',
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

		$criteria->compare('ticket_number',$this->ticket_number,true);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('member_id',$this->member_id,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('other_contact_information',$this->other_contact_information,true);
		$criteria->compare('issue',$this->issue,true);
		$criteria->compare('ticket_date',$this->ticket_date,true);
		$criteria->compare('advised_course_of_action',$this->advised_course_of_action,true);
		$criteria->compare('boi_status',$this->boi_status,true);
		$criteria->compare('created_by',$this->created_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tickets the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
