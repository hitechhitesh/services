<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $catname
 * @property string $country
 * @property integer $userid
 * @property string $status
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catname', 'country', 'userid', 'status'], 'required'],
            [['userid'], 'integer'],
            [['status'], 'string'],
            [['catname', 'country'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catname' => 'Catname',
            'country' => 'Country',
            'userid' => 'Userid',
            'status' => 'Status',
        ];
    }
}
