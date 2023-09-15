<?php

namespace common\models;

use backend\models\GroupStudent;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $teacher_id
 * @property int|null $course_id
 * @property int|null $room_id
 *
 * @property Course $course
 * @property GroupStudent[] $groupStudents
 * @property Room $room
 * @property Teacher $teacher
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'course_id', 'room_id'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::class, 'targetAttribute' => ['course_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::class, 'targetAttribute' => ['room_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::class, 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'teacher_id' => 'Teacher ID',
            'course_id' => 'Course ID',
            'room_id' => 'Room ID',
        ];
    }

    /**
     * Gets query for [[Course]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::class, ['id' => 'course_id']);
    }

    public function getCourses()
    {
        return Course::find()->all();
    }

    /**
     * Gets query for [[GroupStudents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupStudents()
    {
        return $this->hasMany(GroupStudent::class, ['group_id' => 'id']);
    }

    /**
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::class, ['id' => 'room_id']);
    }

    public function getRooms()
    {
        return Room::find()->all();
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return Teacher::find()->all();
    }

    public function getTeacher()
    {
        return $this->hasOne(Teacher::className() , ['id' => 'teacher_id']);
    }
}
