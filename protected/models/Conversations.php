<?php

/**
 * This is the model class for table "conversations".
 *
 * The followings are the available columns in table 'conversations':
 * @property integer $id
 * @property integer $boi_id
 * @property string $comment
 * @property string $comment_by
 * @property string $date
 * @property string $created_on
 */
class Conversations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conversations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('boi_id, comment, comment_by, date,source,categories,member_id', 'required'),
			array('boi_id,amount', 'numerical','min'=>0),
			array('comment_by, date, phone_number, agent_name, date_paid,member_id,other_comments,fraud_suspected', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, boi_id, comment, comment_by, date, created_on, phone_number,member_id,other_comments,fraud_suspected', 'safe', 'on'=>'search'),
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
			'boi_id' => 'Boi_id',
			'comment' => 'Comment',
			'comment_by' => 'Comment By',
			'date' => 'Date',
			'created_on' => 'Created On',
            'source' => 'Source',
            'categories' => 'Categories',
            'phone_number'=> 'Phone Number',
            'amount' => 'Amount customer reports to have paid, so far',
            'agent_name'=>'Agent Name',
            'date_paid' => 'Date Paid',
            'member_id'=>'Member Id',
            'other_comments'=>'Other Comments',
            'fraud_suspected'=>'Fraud Suspected',
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

		$criteria->compare('boi_id',$this->boi_id);
        $criteria->compare('member_id',$this->member_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('comment_by',$this->comment_by,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('created_on',$this->created_on,true);
        $criteria->compare('phone_number',$this->phone_number,true);
        $criteria->compare('agent_name',$this->agent_name,true);
        $criteria->compare('date_paid',$this->date_paid,true);
        $criteria->compare('source',$this->source);
        $criteria->compare('other_comments',$this->other_comments);
        $criteria->compare('fraud_suspected',$this->fraud_suspected);


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
	 * @return Conversations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
