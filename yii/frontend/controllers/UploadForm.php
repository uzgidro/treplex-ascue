<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $file;

    public function rules()
    {
        return [
            [['file'], 'file', 'extensions' => 'pdf'/*, 'maxSize' => 1024 * 1024 * 2*/], // ограничение по типам и размеру файла (2 МБ)
        ];
    }
}
?>