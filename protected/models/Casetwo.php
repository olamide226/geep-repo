<?php

/**
 * This is the model class for table "casetwo".
 *
 * The followings are the available columns in table 'casetwo':
 * @property string $id
 * @property string $customer_name
 * @property string $phone_number
 * @property string $date
 * @property string $association
 * @property string $complaints
 * @property string $response
 */
class Casetwo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'casetwo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_name, created_by,source,call_source, complaints, response', 'required'),
			array('customer_name', 'length', 'max'=>60),
			array('cust_phone_number, agent_phn_number', 'length', 'max'=>11 ),
			array('agent_name, association, call_source' ,'length', 'max'=>100),
			array('complaints, response, other_comments, action', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customer_name, cust_phone_number, date, association, complaints,source,call_source, response, created_by, other_comments', 'safe', 'on'=>'search'),
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
            'source' => 'Source',
			'call_source'=>'Call source',
            'other_comments'=> 'Other Comments',
			'action'=> 'Action',
			'application_source' => 'Application Source', 
			'agent_phn_number' => 'Agent phone number',
			'agent_name' => 'Agent name',

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
        $criteria->compare('source',$this->source);
        $criteria->compare('call_source',$this->call_source,true);
		$criteria->compare('other_comments',$this->other_comments);
		$criteria->compare('action',$this->action);
		$criteria->compare('application_source',$this->application_source);
		$criteria->compare('agent_phn_number',$this->agent_phn_number);
		$criteria->compare('agent_name',$this->agent_name);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort' => array(
                'defaultOrder' => 'id DESC',
            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Casetwo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
