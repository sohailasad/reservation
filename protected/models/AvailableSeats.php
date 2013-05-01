<?php

/**
 * This is the model class for table "available_seats".
 *
 * The followings are the available columns in table 'available_seats':
 * @property integer $id
 * @property integer $bus_id
 * @property integer $terminal_from
 * @property integer $terminal_to
 * @property integer $root_id
 * @property integer $total_seats
 * @property integer $reserve_seats
 * @property integer $available_seats
 * @property string $reserve_date
 * @property string $reserve_time
 */
class AvailableSeats extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AvailableSeats the static model class
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
		return 'available_seats';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('terminal_from, terminal_to, root_id, total_seats, reserve_seats, available_seats, reserve_date, reserve_time', 'required'),
			array('bus_id, terminal_from, terminal_to, root_id, total_seats, reserve_seats, available_seats', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, bus_id, terminal_from, terminal_to, root_id, total_seats, reserve_seats, available_seats, reserve_date, reserve_time', 'safe', 'on'=>'search'),
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
                    'terminal_from'=>array(self::BELONGS_TO, 'terminal', 'terminal_from_id'),
                    'terminal_to'=>array(self::BELONGS_TO, 'terminal', 'terminal_to_id'),
                    'root'=>array(self::BELONGS_TO, 'terminal', 'root_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'bus_id' => 'Bus',
			'terminal_from' => 'Terminal From',
			'terminal_to' => 'Terminal To',
			'root_id' => 'Root',
			'total_seats' => 'Total Seats',
			'reserve_seats' => 'Reserve Seats',
			'available_seats' => 'Available Seats',
			'reserve_date' => 'Reserve Date',
			'reserve_time' => 'Reserve Time',
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
                $criteria->with = 'terminal_from';
                $criteria->with ='terminal_to';
                $criteria->with ='root';
                
		$criteria->compare('id',$this->id);
		$criteria->compare('bus_id',$this->bus_id);
		$criteria->compare('terminal_from',$this->terminal_from);
		$criteria->compare('terminal_to',$this->terminal_to);
		$criteria->compare('root_id',$this->root_id);
		$criteria->compare('total_seats',$this->total_seats);
		$criteria->compare('reserve_seats',$this->reserve_seats);
		$criteria->compare('available_seats',$this->available_seats);
		$criteria->compare('reserve_date',$this->reserve_date,true);
		$criteria->compare('reserve_time',$this->reserve_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}