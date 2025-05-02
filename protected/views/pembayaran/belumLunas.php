<h1>Tagihan Pasien Belum Lunas</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_itemTagihan',
)); ?>