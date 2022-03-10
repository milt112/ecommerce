<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\Url;
use yii\helpers\VarDumper;
/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property string $image
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_by
 * @property int|null $updated_at
 */
class Product extends \yii\db\ActiveRecord
{

    public $hinhanh;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'description', 'price'], 'required'],
            [['category_id', 'price', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            // [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['hinhanh'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'hinhanh' => 'Image',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }

    // public function actionUpload(){
    //     if($this->load(Yii::$app->request->post())) {
    //         if($this->validate()) {
    //             $name = UploadedFile::getInstance($this, 'image');
    //             $path = '/uploads/' . md5($name->baseName) . '.' . $name->extensions;
    //             if($name -> saveAs($path)) {
    //                 $this->image = $name->baseName. '.' .$name->extensions;
    //                 $this->namepath = $path;
    //                 if ($this->save()) {
    //                     return $this->redirect(['_form']);
    //                 } 
    //             }
    //             return true;
    //     } else {
    //         return false;
    //     }
    // }
    // }

    public function afterSave($insert, $changeAttributes)
    {
        $files = UploadedFile::getInstances($this, 'hinhanh');
            
        foreach ($files as $file) {
            $ten_file = time().$file->name;
            $this->namepath = $ten_file;

            if($this->save()) {
                $path = dirname((__DIR__)) . '/images/' . $ten_file;
                $file -> saveAs($path);
            }
        }
        return parent::afterSave($insert, $changeAttributes);
    }
        
}
