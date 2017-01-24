<?php
/* @var $this yii\web\View */
use app\models\BaiViet;
use yii\helpers\Url;

/**
 * @var $items BaiViet[]
 */
foreach ($items as $item) {
    ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?= $item->tieu_de ?></h2>
        <p><?= substr($item->noi_dung, 0, 100) ?></p>
        <a href="<?= Url::to(['/frontend/view', 'id' => $item->id]) ?>">Đọc thêm...</a>
    </div><!-- /.blog-post -->
    <?php
}
?>
