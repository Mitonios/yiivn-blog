<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BaiViet */

$this->title = 'Create Bai Viet';
$this->params['breadcrumbs'][] = ['label' => 'Bai Viets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bai-viet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
