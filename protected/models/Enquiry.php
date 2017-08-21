<?php

/**
 * This is the model class for table "enquiry".
 *
 * The followings are the available columns in table 'enquiry':
 * @property string $id
 * @property string $customer_name
 * @property string $phone_number
 * @property string $date
 * @property string $association
 * @property string $complaints
 * @property string $response
 * @property string $created_by
 */
class Enquiry extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enquiry';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_name,source, complaints, response, created_by', 'required'),
			array('customer_name, created_by', 'length', 'max'=>60),
			array('phone_number', 'length', 'max'=>45),
			array('association', 'length', 'max'=>100),
			array('complaints, response,other_comments', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customer_name, phone_number, date, association, complaints,other_comments, response, created_by', 'safe', 'on'=>'search'),
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
			'date' => 'Date',
			'association' => 'Association',
			'complaints' => 'Complaints',
			'response' => 'Response',
			'created_by' => 'Created By',
            'source' => 'Source',
            'other_comments'=>'Other Comments',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('association',$this->association,true);
		$criteria->compare('complaints',$this->complaints,true);
        $criteria->compare('other_comments',$this->other_comments,true);

		$criteria->compare('response',$this->response,true);
		$criteria->compare('created_by',$this->created_by,true);
        $criteria->compare('source',$this->source);
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
	 * @return Enquiry the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
