<?php

/**
 * This is the model class for table "propiedad".
 *
 * The followings are the available columns in table 'propiedad':
 * @property integer $IDPROP
 * @property string $RUTCLIENTE
 * @property string $DIRECCION
 * @property integer $CANTPIEZA
 * @property integer $CANTBANO
 * @property integer $TERRENO
 * @property integer $TERRENOCONSTRUIDO
 * @property string $TIPO
 * @property string $SERVICIO
 * @property integer $ESTADO
 * @property string $DESCRIPCION
 * @property string $COMUNAPROPIEDAD
 */
class Propiedad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'propiedad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RUTCLIENTE, DIRECCION, TERRENO, TIPO, SERVICIO, CANTPIEZA, COMUNAPROPIEDAD', 'required'),
			array('CANTPIEZA, CANTBANO, TERRENO, TERRENOCONSTRUIDO, ', 'numerical', 'integerOnly'=>true),
			array('RUTCLIENTE, SERVICIO', 'length', 'max'=>10),
			array('DIRECCION', 'length', 'max'=>50),
			array('TIPO', 'length', 'max'=>25),
			array('DESCRIPCION', 'length', 'max'=>250),
			array('COMUNAPROPIEDAD', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDPROP, RUTCLIENTE, DIRECCION, CANTPIEZA, CANTBANO, TERRENO, TERRENOCONSTRUIDO, TIPO, SERVICIO, ESTADO, DESCRIPCION, COMUNAPROPIEDAD', 'safe', 'on'=>'search'),
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
            'cliente'=>array( self::BELONGS_TO,'Cliente','RUTCLIENTE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RUTCLIENTE' => 'RUT del propietario',
			'DIRECCION' => 'Direcci&oacute;n',
			'CANTPIEZA' => 'N&uacute;mero de habitaciones.',
			'CANTBANO' => 'N&uacute;mero de baños',
			'TERRENO' => 'Terreno',
			'TERRENOCONSTRUIDO' => 'Terreno construido',
			'TIPO' => 'Tipo',
			'SERVICIO' => 'Servicio',
			'ESTADO' => 'Estado',
			'DESCRIPCION' => 'Breve descripci&oacute;n',
			'COMUNAPROPIEDAD' => 'Comuna donde se ubica',

		);
	}

	/**
	 * @return mixed
     */
	public function getDrop(){
		return Cliente::model()->RUTCLIENTE.' '.Cliente::model()->NOMBRESCLIENTE.' '.Cliente::model()->NOMBRESCLIENTE;;
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

		$criteria->compare('IDPROP',$this->IDPROP);
		$criteria->compare('RUTCLIENTE',$this->RUTCLIENTE,true);
		$criteria->compare('DIRECCION',$this->DIRECCION,true);
		$criteria->compare('CANTPIEZA',$this->CANTPIEZA);
		$criteria->compare('CANTBANO',$this->CANTBANO);
		$criteria->compare('TERRENO',$this->TERRENO);
		$criteria->compare('TERRENOCONSTRUIDO',$this->TERRENOCONSTRUIDO);
		$criteria->compare('TIPO',$this->TIPO,true);
		$criteria->compare('SERVICIO',$this->SERVICIO,true);
		$criteria->compare('ESTADO',$this->ESTADO);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('COMUNAPROPIEDAD',$this->COMUNAPROPIEDAD,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Propiedad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
