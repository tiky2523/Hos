<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string|null $cid
 * @property string|null $prename
 * @property string|null $fname
 * @property string|null $lname
 * @property int|null $sex
 * @property string|null $birthdath
 * @property string|null $adress
 * @property int|null $tumbon
 * @property int|null $amphur
 * @property int|null $chw
 * @property string|null $education
 * @property string|null $ability
 * @property string|null $tel
 * @property int|null $department_id
 * @property string|null $comein
 * @property string|null $avatar
 * @property int|null $status
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'sex', 'tumbon', 'amphur', 'chw', 'department_id', 'status'], 'integer'],
            [['birthdath', 'comein'], 'safe'],
            [['education'], 'string'],
            [['cid', 'adress', 'ability', 'avatar'], 'string', 'max' => 255],
            [['prename', 'fname', 'lname'], 'string', 'max' => 100],
            [['tel'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => 'Cid',
            'prename' => 'Prename',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'sex' => 'Sex',
            'birthdath' => 'Birthdath',
            'adress' => 'Adress',
            'tumbon' => 'Tumbon',
            'amphur' => 'Amphur',
            'chw' => 'Chw',
            'education' => 'Education',
            'ability' => 'Ability',
            'tel' => 'Tel',
            'department_id' => 'Department ID',
            'comein' => 'Comein',
            'avatar' => 'Avatar',
            'status' => 'Status',
        ];
    }
}
