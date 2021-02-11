<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableTestUsers extends AbstractMigration
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
       $table = $this->table('test_users');
       $table->addColumn('date_created', 'datetime', array('null'=>TRUE, 'default'=>'CURRENT_TIMESTAMP'))
             ->addColumn('employee_id', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('category', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('result', 'string')
             ->addColumn('date_end', 'datetime', array('null'=>TRUE, 'update'=>'CURRENT_TIMESTAMP'))
             ->create();
     }

     public function down(): void
     {
       $this->dropTable('test_users');
     }
}
