<?php

/**
 * This is the model class for table "root".
 *
 * The followings are the available columns in table 'root':
 * @property integer $id
 * @property string $terminal_from_id
 * @property integer $terminal_to_id
 * @property integer $journey_via
 * @property integer $bus_id
 */
class Root extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Root the static model class
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
		return 'root';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('terminal_from_id, terminal_to_id, bus_id', 'required'),
			array('terminal_to_id, journey_via, bus_id', 'numerical', 'integerOnly'=>true),
			array('terminal_from_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, terminal_from_id, terminal_to_id, journey_via, bus_id', 'safe', 'on'=>'search'),
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
                    'root'=>array(self::BELONGS_TO, 'terminal', 'journey_via'),
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
			'journey_via' => 'Journey Via',
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
                $criteria->with = 'terminal_from';
                $criteria->with ='terminal_to';
                $criteria->with ='root';
		$criteria->compare('terminal_from_id',$this->terminal_from_id,true);
		$criteria->compare('terminal_to_id',$this->terminal_to_id);
		$criteria->compare('journey_via',$this->journey_via);
		$criteria->compare('bus_id',$this->bus_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}