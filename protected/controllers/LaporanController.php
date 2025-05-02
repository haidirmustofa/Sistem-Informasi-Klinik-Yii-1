<?php
class LaporanController extends Controller
{
    public function accessRules()
    {
        return array(
            array(
                'allow',
                'roles' => array('admin'),
            ),
            array('deny', 'users' => array('*')),
        );
    }

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionKunjunganPerBulan()
    {
        $results = Yii::app()->db->createCommand("
            SELECT TO_CHAR(tanggal_kunjungan, 'YYYY-MM') AS bulan, COUNT(*) AS jumlah
            FROM kunjungan
            GROUP BY TO_CHAR(tanggal_kunjungan, 'YYYY-MM')
            ORDER BY bulan
        ")->queryAll();

        $this->render('kunjungan_per_bulan', ['data' => $results]);
    }

    public function actionTindakanTerbanyak()
    {
        $results = Yii::app()->db->createCommand("
            SELECT t.nama, COUNT(*) as jumlah
            FROM kunjungan_tindakan kt
            JOIN tindakan t ON t.id = kt.id_tindakan
            GROUP BY t.nama
            ORDER BY jumlah DESC
            LIMIT 10
        ")->queryAll();

        $this->render('tindakan_terbanyak', ['data' => $results]);
    }

    public function actionObatTerbanyak()
    {
        $results = Yii::app()->db->createCommand("
            SELECT o.nama, COUNT(*) as jumlah
            FROM kunjungan_obat ko
            JOIN obat o ON o.id = ko.id_obat
            GROUP BY o.nama
            ORDER BY jumlah DESC
            LIMIT 10
        ")->queryAll();

        $this->render('obat_terbanyak', ['data' => $results]);
    }
}
