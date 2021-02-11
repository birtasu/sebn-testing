<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
     public function up(): void
     {
       $table = $this->table('users', ['id'=>FALSE, 'primary_key'=>'users_id']);
       $table->addColumn('data', 'datetime', array('null'=>FALSE,'default'=>'CURRENT_TIMESTAMP'))
             ->addColumn('users_id', 'integer', array('limit'=>11, 'null'=>FALSE, 'identity'=>TRUE))
             ->addColumn('users_login', 'string', array('limit'=>30, 'null'=>FALSE,'default'=>'0'))
             ->addColumn('users_password', 'string', array('limit'=>32, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('users_hash', 'string', array('limit'=>32, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('testuvannya', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('report', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>NULL))
             ->create();
     }

     public function down(): void
     {
       $this->dropTable('users');
     }
}
