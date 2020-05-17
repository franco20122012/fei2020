<?php

use yii\db\Migration;

/**
 * Class m200506_204851_fecha_nacimiento_usuario
 */
class m200506_204851_fecha_nacimiento_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('usuario', 'nacimiento', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('usuario','nacimiento');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200506_204851_fecha_nacimiento_usuario cannot be reverted.\n";

        return false;
    }
    */
}
