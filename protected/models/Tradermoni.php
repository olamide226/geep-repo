<?php

/**
 * This is the model class for table "tradermoni".
 *
 * The followings are the available columns in table 'tradermoni':
 * @property string $id
 * @property string $customer_name
 * @property string $phone_no
 * @property string $date_created
 * @property string $complaints
 * @property string $other_comments
 * @property string $response
 * @property string $created_by
 * @property string $source
 * @property string $call_source
 */
class Tradermoni extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tradermoni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_name, phone_no, complaints, response, created_by, source, call_source', 'required'),
			array('customer_name, created_by', 'length', 'max'=>60),
			array('phone_no', 'length', 'max'=>13),
			array('phone_no', 'numerical','min'=>0),
			array('complaints, other_comments, response', 'length', 'max'=>300),
			array('source', 'length', 'max'=>45),
			array('call_source', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customer_name, phone_no, complaints, other_comments, response, created_by, source, call_source', 'safe', 'on'=>'search'),
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
			'phone_no' => 'Phone No',
			'complaints' => 'Complaints',
			'other_comments' => 'Other Comments',
			'response' => 'Response',
			'created_by' => 'Created By',
			'source' => 'Source',
			'call_source' => 'Call Source',
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
		$criteria->compare('phone_no',$this->phone_no,true);
		$criteria->compare('complaints',$this->complaints,true);
		$criteria->compare('other_comments',$this->other_comments,true);
		$criteria->compare('response',$this->response,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('call_source',$this->call_source,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tradermoni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
