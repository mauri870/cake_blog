<?php

use Phinx\Migration\AbstractMigration;

class Initial extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function up()
    {
        $table_users = $this->table('users');
        $table_users->addColumn('email','string')
            ->addColumn('password','string')
            ->addColumn('created','datetime')
            ->addColumn('modified','datetime')
            ->save();

        $table_posts = $this->table('posts');
        $table_posts->addColumn('author','string')
            ->addColumn('created','datetime')
            ->addColumn('modified','datetime')
            ->save();
    }
    public function down()
    {
        $table = $this->dropTable('users');
        $table = $this->dropTable('posts');
    }
}
