<?php

/**
 * This is the model class for table "pembayaran".
 *
 * The followings are the available columns in table 'pembayaran':
 * @property integer $id
 * @property integer $kunjungan_id
 * @property string $total_tindakan
 * @property string $total_obat
 * @property string $total_tagihan
 * @property string $dibayar
 * @property string $kembalian
 * @property string $tanggal_bayar
 * @property integer $kasir_id
 *
 * The followings are the available model relations:
 * @property Kunjungan $kunjungan
 * @property Users $kasir
 */
class Pembayaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pembayaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kunjungan_id, kasir_id', 'numerical', 'integerOnly'=>true),
			array('total_tindakan, total_obat, total_tagihan, dibayar, kembalian', 'length', 'max'=>12),
			array('tanggal_bayar', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kunjungan_id, total_tindakan, total_obat, total_tagihan, dibayar, kembalian, tanggal_bayar, kasir_id', 'safe', 'on'=>'search'),
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
			'kunjungan' => array(self::BELONGS_TO, 'Kunjungan', 'kunjungan_id'),
			'kasir' => array(self::BELONGS_TO, 'Users', 'kasir_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kunjungan_id' => 'Kunjungan',
			'total_tindakan' => 'Total Tindakan',
			'total_obat' => 'Total Obat',
			'total_tagihan' => 'Total Tagihan',
			'dibayar' => 'Dibayar',
			'kembalian' => 'Kembalian',
			'tanggal_bayar' => 'Tanggal Bayar',
			'kasir_id' => 'Kasir',
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
		$criteria->compare('kunjungan_id',$this->kunjungan_id);
		$criteria->compare('total_tindakan',$this->total_tindakan,true);
		$criteria->compare('total_obat',$this->total_obat,true);
		$criteria->compare('total_tagihan',$this->total_tagihan,true);
		$criteria->compare('dibayar',$this->dibayar,true);
		$criteria->compare('kembalian',$this->kembalian,true);
		$criteria->compare('tanggal_bayar',$this->tanggal_bayar,true);
		$criteria->compare('kasir_id',$this->kasir_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pembayaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
