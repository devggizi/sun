<?php

class PropiedadForm extends CFormModel{
    public static $servicios=array("Venta","Arriendo");
    public $DIRECCION;
    public $CANTPIEZA;
    public $CANTBANO;
    public $TERRENO;
    public $TIPO;
    public $SERVICIO;
    public $ESTADO;
    public $DESCRIPCION;
    public $COMUNAPROPIEDAD;

    public function rules(){
        return array(
            array("DIRECCION, CANTPIEZA, CANTBANO, TERRENO, TIPO ,SERVICIO,ESTADO, COMUNAPROPIEDAD","required"),
            array('DIRECCION', 'length', 'max'=>50),
            array('TIPO', 'length', 'max'=>25),
            array('SERVICIO', 'length', 'max'=>10),
            array('DESCRIPCION', 'length', 'max'=>250),

        );
    }
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

}