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
class Employees extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['id'], 'required'],
                [['id', 'sex', 'tumbon', 'amphur', 'chw', 'department_id', 'status'], 'integer'],
                [['birthdath', 'comein', 'ability'], 'safe'],
                [['education'], 'string'],
                [['cid', 'adress', 'avatar'], 'string', 'max' => 255],
                [['prename', 'fname', 'lname'], 'string', 'max' => 100],
                [['tel'], 'string', 'max' => 50],
                [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'cid' => 'CID',
            'prename' => 'PRENAME',
            'fname' => 'FNAME',
            'lname' => 'LNAME',
            'sex' => 'SEX',
            'birthdath' => 'BIRTHDATE',
            'adress' => 'ADDRESS',
            'tumbon' => 'TUMBON',
            'amphur' => 'AMPHUR',
            'chw' => 'CHW',
            'education' => 'EDUCATION',
            'ability' => 'ABILITY',
            'tel' => 'TEL',
            'department_id' => 'DEPARMENT_ID',
            'comein' => 'COMEIN',
            'avatar' => 'AVATAR',
            'status' => 'STATUS',
        ];
    }

    public function getDepartment() {
        return $this->hasOne(Departments::ClassName(), ['id' => 'department_id']);
    }

    public function getArray($value) {
        return explode(',', $value);
    }

    public function setToArray($value) {
        return is_array($value) ? implode(',', $value) : NULL;
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if (!empty($this->fname)) {
                $this->ability = $this->setToArray($this->ability);
            }
            return true;
        } else {
            return false;
        }
    }
    public static function itemAlias($type, $code = NULL) {
        $_items = array(
            'ability' => array(
                'กีฬา' => 'กีฬา',
                'ดนตรี' => 'ดนตรี',
                'คอมพิวเตอร์'=>'คอมพิวเตอร์',
                'ด้านอาหาร'=>'ด้านอาหาร',
                'งานฝีมือ'=>'งานฝีมือ'
                ),
            );
                if (isset($code)) {
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        } else {
            return isset($_items[$type]) ? $_items[$type] : false;
        }
    }
}
