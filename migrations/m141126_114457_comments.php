<?php

use yii\db\Schema;
use yii\db\Migration;

class m141126_114457_comments extends Migration
{
    public function up()
    {
        $this->createTable('{{%comment}}', array(
            'id' => 'pk',
            'modelClass' => 'string',
            'modelId' => 'integer',
            'text' => 'text',
            'created' => 'integer',
            'userId' => 'integer',
            'author' => 'string',
            'email' => 'string',
            'website' => 'string',
            'isActive' => 'boolean'
        ));
    }

    public function down()
    {
        $this->dropTable('{{%comment}}');
    }
}
