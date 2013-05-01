<?php

/**
 * This is the model class for table "fare".
 *
 * The followings are the available columns in table 'fare':
 * @property integer $id
 * @property integer $terminal_from_id
 * @property integer $terminal_to_id
 * @property integer $fare_price
  * @property integer $root_id
 */
class Fare extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fare the static model class
	 */
       // public $terminal;


        public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fare';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('terminal_from_id, terminal_to_id, fare_price', 'required'),
			array('terminal_from_id, terminal_to_id, fare_price, root_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, terminal_from_id, terminal_to_id, fare_price, root_id', 'safe', 'on'=>'search'),
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
			'terminal_from_id' => 'Terminal From',
			'terminal_to_id' => 'Terminal To',
                    'root_id'=>'Journey Via',
			'fare_price' => 'Fare Price',
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
                $criteria->with = 'terminal_from';
                $criteria->with ='terminal_to';
                $criteria->with ='root';
		$criteria->compare('terminal_from_id',$this->terminal_from_id);
		$criteria->compare('terminal_to_id',$this->terminal_to_id);
		$criteria->compare('fare_price',$this->fare_price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}