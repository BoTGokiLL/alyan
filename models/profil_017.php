<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_017".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $foto_profil
 */
class profil_017 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_017';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profil'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['foto_profil'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
    public function getprofil_017()
    {
        return $this->hasOne(profil_017::className(),['id_mahasiswa' => 'id']);
    }
}
