<?php

/**
 * This is the model class for table "boi2".
 *
 * The followings are the available columns in table 'boi2':
 * @property integer $id
 * @property string $customer_name
 * @property string $phone_number
 * @property string $association
 * @property string $member_id
 * @property string $state
 * @property string $amount
 * @property integer $tenure
 * @property string $mou_status
 * @property string $amount_due
 * @property string $amount_re_paid
 * @property string $amount_in_default
 * @property string $sub_aggregator
 * @property string $aggregator
 * @property string $beneficiary_institution
 * @property string $nuban
 * @property string $date_requested
 * @property string $status
 * @property string $reason_for_rejection
 * @property string $first_due_date
 * @property string $last_change_date
 * @property string $pending_icu_confirmation_date
 * @property string $pending_customer_confirmation_date
 * @property string $pending_f_ire_confirmation_date
 * @property string $pending_approval_date
 * @property string $due_for_disbursement_date
 * @property string $loan_disbursed_successfully_date
 * @property string $offer_declined_date
 * @property string $risk_request_denied_date
 * @property string $request_denied_date
 * @property string $not_qualified_date
 */
class Boi extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'boi';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('tenure', 'numerical', 'integerOnly'=>true),
            array('customer_name', 'length', 'max'=>51),
            array('phone_number, state', 'length', 'max'=>11),
            array('association', 'length', 'max'=>197),
            array('member_id, beneficiary_institution', 'length', 'max'=>21),
            array('amount', 'length', 'max'=>16),
            array('mou_status', 'length', 'max'=>12),
            array('amount_due, amount_re_paid, amount_in_default, nuban', 'length', 'max'=>10),
            array('sub_aggregator, aggregator', 'length', 'max'=>35),
            array('date_requested, first_due_date, last_change_date, pending_icu_confirmation_date, pending_customer_confirmation_date, pending_f_ire_confirmation_date, pending_approval_date, due_for_disbursement_date, loan_disbursed_successfully_date, offer_declined_date, risk_request_denied_date, request_denied_date, not_qualified_date', 'length', 'max'=>17),
            array('status', 'length', 'max'=>27),
            array('reason_for_rejection', 'length', 'max'=>86),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('member_id,id, customer_name, phone_number, association,  state, amount, tenure, mou_status, amount_due, amount_re_paid, amount_in_default, sub_aggregator, aggregator, beneficiary_institution, nuban, date_requested, status, reason_for_rejection, first_due_date, last_change_date, pending_icu_confirmation_date, pending_customer_confirmation_date, pending_f_ire_confirmation_date, pending_approval_date, due_for_disbursement_date, loan_disbursed_successfully_date, offer_declined_date, risk_request_denied_date, request_denied_date, not_qualified_date', 'safe', 'on'=>'search'),
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
            'member_id' => 'Member',
            'state' => 'State',
            'amount' => 'Amount',
            'tenure' => 'Tenure',
            'mou_status' => 'Mou Status',
            'amount_due' => 'Amount Due',
            'amount_re_paid' => 'Amount Re Paid',
            'amount_in_default' => 'Amount In Default',
            'sub_aggregator' => 'Sub Aggregator',
            'aggregator' => 'Aggregator',
            'beneficiary_institution' => 'Beneficiary Institution',
            'nuban' => 'Nuban',
            'date_requested' => 'Date Requested',
            'status' => 'Status',
            'reason_for_rejection' => 'Reason For Rejection',
            'first_due_date' => 'First Due Date',
            'last_change_date' => 'Last Change Date',
            'pending_icu_confirmation_date' => 'Pending Icu Confirmation Date',
            'pending_customer_confirmation_date' => 'Pending Customer Confirmation Date',
            'pending_f_ire_confirmation_date' => 'Pending F Ire Confirmation Date',
            'pending_approval_date' => 'Pending Approval Date',
            'due_for_disbursement_date' => 'Due For Disbursement Date',
            'loan_disbursed_successfully_date' => 'Loan Disbursed Successfully Date',
            'offer_declined_date' => 'Offer Declined Date',
            'risk_request_denied_date' => 'Risk Request Denied Date',
            'request_denied_date' => 'Request Denied Date',
            'not_qualified_date' => 'Not Qualified Date',
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
        $criteria->compare('phone_number',$this->phone_number,true);
        $criteria->compare('association',$this->association,true);
        $criteria->compare('member_id',$this->member_id,true);
        $criteria->compare('state',$this->state,true);
        $criteria->compare('amount',$this->amount,true);
        $criteria->compare('tenure',$this->tenure);
        $criteria->compare('mou_status',$this->mou_status,true);
        $criteria->compare('amount_due',$this->amount_due,true);
        $criteria->compare('amount_re_paid',$this->amount_re_paid,true);
        $criteria->compare('amount_in_default',$this->amount_in_default,true);
        $criteria->compare('sub_aggregator',$this->sub_aggregator,true);
        $criteria->compare('aggregator',$this->aggregator,true);
        $criteria->compare('beneficiary_institution',$this->beneficiary_institution,true);
        $criteria->compare('nuban',$this->nuban,true);
        $criteria->compare('date_requested',$this->date_requested,true);
        $criteria->compare('status',$this->status,true);
        $criteria->compare('reason_for_rejection',$this->reason_for_rejection,true);
        $criteria->compare('first_due_date',$this->first_due_date,true);
        $criteria->compare('last_change_date',$this->last_change_date,true);
        $criteria->compare('pending_icu_confirmation_date',$this->pending_icu_confirmation_date,true);
        $criteria->compare('pending_customer_confirmation_date',$this->pending_customer_confirmation_date,true);
        $criteria->compare('pending_f_ire_confirmation_date',$this->pending_f_ire_confirmation_date,true);
        $criteria->compare('pending_approval_date',$this->pending_approval_date,true);
        $criteria->compare('due_for_disbursement_date',$this->due_for_disbursement_date,true);
        $criteria->compare('loan_disbursed_successfully_date',$this->loan_disbursed_successfully_date,true);
        $criteria->compare('offer_declined_date',$this->offer_declined_date,true);
        $criteria->compare('risk_request_denied_date',$this->risk_request_denied_date,true);
        $criteria->compare('request_denied_date',$this->request_denied_date,true);
        $criteria->compare('not_qualified_date',$this->not_qualified_date,true);


        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Boi2 the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
