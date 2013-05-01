<?php

/**
 * This is the model class for table "terminal".
 *
 * The followings are the available columns in table 'terminal':
 * @property integer $id
 * @property string $terminal_name
 * @property string $terminal_detail
 * @property string $terminal_photo
 */
class Terminal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Terminal the static model class
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
		return 'terminal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('terminal_name, terminal_detail, terminal_photo', 'required'),
			array('terminal_name', 'length', 'max'=>100),
			array('terminal_photo', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, terminal_name, terminal_detail, terminal_photo', 'safe', 'on'=>'search'),
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
                    'fare'=>array(self::HAS_MANY, 'Fare', '','on'=>'fare.id=fare.terminal_from_id'),
                    'availableSeats'=>array(self::HAS_MANY, 'available_seats', '','on'=>'available_seats.id=available_seats.terminal_from'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'terminal_name' => 'Terminal Name',
			'terminal_detail' => 'Terminal Detail',
			'terminal_photo' => 'Terminal Photo',
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
		$criteria->compare('terminal_name',$this->terminal_name,true);
		$criteria->compare('terminal_detail',$this->terminal_detail,true);
		$criteria->compare('terminal_photo',$this->terminal_photo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}