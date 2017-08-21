<?php

/**
 * This is the model class for table "mfb".
 *
 * The followings are the available columns in table 'mfb':
 * @property integer $sn
 * @property string $name
 * @property string $state
 * @property string $status
 * @property string $certificate_of_incorporation
 * @property string $c_o_i_comments
 * @property string $forms_CAC2_CAC7
 * @property string $cac2_7_comments
 * @property string $form_CAC2_1
 * @property string $cac2_1_comments
 * @property string $cbn_license
 * @property string $cbn_license_comments
 * @property string $memart
 * @property string $memart_comments
 * @property string $directors_management_profile
 * @property string $directors_profile_comments
 * @property string $bvn_details
 * @property string $bvn_details_comments
 * @property string $company_profile
 * @property string $company_profile_comments
 * @property string $audit_statements
 * @property string $audit_statements_comments
 * @property string $contact_details
 * @property string $general_comments
 * @property string $created_by
 * @property string $contact_date
 * @property string $date_received
 */
class Mfb extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mfb';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sn, name', 'required'),
			array('sn', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('state, certificate_of_incorporation, forms_CAC2_CAC7, form_CAC2_1, cbn_license, memart, directors_management_profile, bvn_details, company_profile, audit_statements', 'length', 'max'=>45),
			array('status,contact_status,contacted_person,means_of_contact,response_status', 'length', 'max'=>50),
			array('c_o_i_comments, cac2_7_comments, cac2_1_comments, cbn_license_comments, memart_comments, directors_profile_comments, bvn_details_comments, company_profile_comments, audit_statements_comments, contact_date', 'length', 'max'=>20),
			array('contact_details, general_comments', 'length', 'max'=>500),
			array('created_by', 'length', 'max'=>30),
			array('date_received', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sn, name,contact_status, state, status,contacted_person, certificate_of_incorporation, c_o_i_comments, forms_CAC2_CAC7, cac2_7_comments, form_CAC2_1, cac2_1_comments, cbn_license, cbn_license_comments, memart, memart_comments, directors_management_profile, directors_profile_comments, bvn_details, bvn_details_comments, company_profile, company_profile_comments, audit_statements, audit_statements_comments, contact_details, general_comments, created_by, contact_date, date_received', 'safe', 'on'=>'search'),
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
			'sn' => 'Sn',
			'name' => 'Names of MFB\'s',
			'contact_status'=>'Contact Status',
			'state' => 'State',
			'status' => 'Status',
			'certificate_of_incorporation' => 'Certificate Of Incorporation',
			'c_o_i_comments' => 'Certificate Of Incorporation Comments',
			'forms_CAC2_CAC7' => 'Forms Cac2 $ Cac7',
			'cac2_7_comments' => 'Cac2 $ Cac7 Comments',
			'form_CAC2_1' => 'Form Cac2.1',
			'cac2_1_comments' => 'Form Cac2.1 Comments',
			'cbn_license' => 'Cbn License',
			'cbn_license_comments' => 'Cbn License Comments',
			'memart' => 'Memart',
			'memart_comments' => 'Memart Comments',
			'directors_management_profile' => 'Brief profile of Directors and Management staff',
			'directors_profile_comments' => 'Directors Profile Comments',
			'bvn_details' => 'Bvn Details',
			'bvn_details_comments' => 'Bvn Details Comments',
			'company_profile' => 'Company Profile',
			'company_profile_comments' => 'Company Profile Comments',
			'audit_statements' => 'Last two (2) years audited financial statements.',
			'audit_statements_comments' => 'Audit Statements Comments',
			'contact_details' => 'Contact Details',
			'contacted_person'=>'Name of Contacted Person',
            'means_of_contact'=>'Means of Contact',
            'response_status'=>'Response Status',
			'general_comments' => 'Feed Back - General Comments',
			'created_by' => 'Created By',
			'contact_date' => 'Contact Date',
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

		$criteria->compare('sn',$this->sn);
		$criteria->compare('name',$this->name,true);
        $criteria->compare('contact_status',$this->contact_status,true);

		$criteria->compare('state',$this->state,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('certificate_of_incorporation',$this->certificate_of_incorporation,true);
		$criteria->compare('c_o_i_comments',$this->c_o_i_comments,true);
		$criteria->compare('forms_CAC2_CAC7',$this->forms_CAC2_CAC7,true);
		$criteria->compare('cac2_7_comments',$this->cac2_7_comments,true);
		$criteria->compare('form_CAC2_1',$this->form_CAC2_1,true);
		$criteria->compare('cac2_1_comments',$this->cac2_1_comments,true);
		$criteria->compare('cbn_license',$this->cbn_license,true);
		$criteria->compare('cbn_license_comments',$this->cbn_license_comments,true);
		$criteria->compare('memart',$this->memart,true);
		$criteria->compare('memart_comments',$this->memart_comments,true);
		$criteria->compare('directors_management_profile',$this->directors_management_profile,true);
		$criteria->compare('directors_profile_comments',$this->directors_profile_comments,true);
		$criteria->compare('bvn_details',$this->bvn_details,true);
		$criteria->compare('bvn_details_comments',$this->bvn_details_comments,true);
		$criteria->compare('company_profile',$this->company_profile,true);
		$criteria->compare('company_profile_comments',$this->company_profile_comments,true);
		$criteria->compare('audit_statements',$this->audit_statements,true);
		$criteria->compare('audit_statements_comments',$this->audit_statements_comments,true);
		$criteria->compare('contact_details',$this->contact_details,true);
        $criteria->compare('contacted_person',$this->contacted_person,true);
        $criteria->compare('means_of_contact',$this->means_of_contact,true);
        $criteria->compare('response_status',$this->response_status,true);

        $criteria->compare('general_comments',$this->general_comments,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('contact_date',$this->contact_date,true);
		$criteria->compare('date_received',$this->date_received,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort' => array(
                'defaultOrder' => 'sn DESC',
            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mfb the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
