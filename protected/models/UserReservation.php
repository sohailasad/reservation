<?php

/**
 * This is the model class for table "reservation".
 *
 * The followings are the available columns in table 'reservation':
 * @property integer $id
 * @property integer $passenger_id
 * @property string $passenger_name
 * @property string $phone_number
 * @property string $email
 * @property string $cnic_number
 * @property integer $total_seats
 * @property integer $reserve_seats
 * @property integer $available_seats
 * @property integer $reserve_seats_numbers
 * @property integer $terminal_from_id
 * @property integer $terminal_to_id
 * @property string $root_id
 * @property string $reserve_date_time
 * @property string $travel_date
 * @property string $travel_time
 * @property integer $bus_id
 */
class UserReservation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reservation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{           
		return 'reservation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('passenger_name, phone_number, total_seats, reserve_seats, available_seats, reserve_seats_numbers, terminal_from_id, terminal_to_id, root_id, reserve_date_time, travel_date, travel_time', 'required'),
                        array('phone_number, cnic_number','unique'),
			array('passenger_id, total_seats, reserve_seats, available_seats, reserve_seats_numbers, terminal_from_id, terminal_to_id, bus_id', 'numerical', 'integerOnly'=>true),
			array('passenger_name, phone_number, email, cnic_number', 'length', 'max'=>255),
			array('root_id, reserve_date_time', 'length', 'max'=>20),
			array('travel_date, travel_time', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, passenger_id, passenger_name, phone_number, email, cnic_number, total_seats, reserve_seats, available_seats, reserve_seats_numbers, terminal_from_id, terminal_to_id, root_id, reserve_date_time, travel_date, travel_time, bus_id', 'safe', 'on'=>'search'),
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
			'passenger_id' => 'Passenger',
			'passenger_name' => 'Passenger Name',
			'phone_number' => 'Phone Number',
			'email' => 'Email',
			'cnic_number' => 'Cnic Number',
			'total_seats' => 'Total Seats',
			'reserve_seats' => 'Reserve Seats',
			'available_seats' => 'Available Seats',
			'reserve_seats_numbers' => 'Reserve Seats Numbers',
			'terminal_from_id' => 'Terminal From',
			'terminal_to_id' => 'Terminal To',
			'root_id' => 'Root',
			'reserve_date_time' => 'Reserve Date Time',
			'travel_date' => 'Travel Date',
			'travel_time' => 'Travel Time',
			'bus_id' => 'Bus',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('passenger_id',$this->passenger_id);
		$criteria->compare('passenger_name',$this->passenger_name,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cnic_number',$this->cnic_number,true);
		$criteria->compare('total_seats',$this->total_seats);
		$criteria->compare('reserve_seats',$this->reserve_seats);
		$criteria->compare('available_seats',$this->available_seats);
		$criteria->compare('reserve_seats_numbers',$this->reserve_seats_numbers);
		$criteria->compare('terminal_from_id',$this->terminal_from_id);
		$criteria->compare('terminal_to_id',$this->terminal_to_id);
		$criteria->compare('root_id',$this->root_id,true);
		$criteria->compare('reserve_date_time',$this->reserve_date_time,true);
		$criteria->compare('travel_date',$this->travel_date,true);
		$criteria->compare('travel_time',$this->travel_time,true);
		$criteria->compare('bus_id',$this->bus_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}