<?php

/**
 * This is the model class for table "kunjungan".
 *
 * The followings are the available columns in table 'kunjungan':
 * @property integer $id
 * @property integer $pasien_id
 * @property string $tanggal_kunjungan
 * @property string $jenis_kunjungan
 * @property string $keluhan
 * @property integer $created_by
 * @property string $created_at
 *
 * The followings are the available model relations:
 * @property Pasien $pasien
 * @property Users $createdBy
 * @property KunjunganTindakan[] $kunjunganTindakans
 * @property KunjunganObat[] $kunjunganObats
 * @property Pembayaran[] $pembayarans
 */
class Kunjungan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kunjungan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_kunjungan', 'required'),
			array('pasien_id, created_by', 'numerical', 'integerOnly' => true),
			array('jenis_kunjungan', 'length', 'max' => 100),
			array('keluhan, created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pasien_id, tanggal_kunjungan, jenis_kunjungan, keluhan, created_by, created_at', 'safe', 'on' => 'search'),
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
			'pasien' => array(self::BELONGS_TO, 'Pasien', 'pasien_id'),
			'createdBy' => array(self::BELONGS_TO, 'Users', 'created_by'),
			'kunjunganTindakans' => array(self::HAS_MANY, 'KunjunganTindakan', 'kunjungan_id'),
			'kunjunganObats' => array(self::HAS_MANY, 'KunjunganObat', 'kunjungan_id'),
			'pembayarans' => array(self::HAS_MANY, 'Pembayaran', 'kunjungan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pasien_id' => 'Pasien',
			'tanggal_kunjungan' => 'Tanggal Kunjungan',
			'jenis_kunjungan' => 'Jenis Kunjungan',
			'keluhan' => 'Keluhan',
			'created_by' => 'Created By',
			'created_at' => 'Created At',
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

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('pasien_id', $this->pasien_id);
		$criteria->compare('tanggal_kunjungan', $this->tanggal_kunjungan, true);
		$criteria->compare('jenis_kunjungan', $this->jenis_kunjungan, true);
		$criteria->compare('keluhan', $this->keluhan, true);
		$criteria->compare('created_by', $this->created_by);
		$criteria->compare('created_at', $this->created_at, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kunjungan the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	public function getTotalTagihan()
	{
		$total = 0;

		foreach ($this->kunjunganTindakans as $t) {
			$total += $t->tindakan->harga;
		}

		foreach ($this->kunjunganObats as $o) {
			$total += $o->obat->harga;
		}

		return $total;
	}
}
