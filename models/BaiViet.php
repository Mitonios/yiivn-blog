<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bai_viet".
 *
 * @property integer $id
 * @property string $tieu_de
 * @property string $noi_dung
 */
class BaiViet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bai_viet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['noi_dung'], 'string'],
            [['tieu_de'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tieu_de' => 'Tieu De',
            'noi_dung' => 'Noi Dung',
        ];
    }
}
