<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableTestResults extends AbstractMigration
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
       $table = $this->table('test_results');
       $table->addColumn('date_time', 'datetime', array('null'=>TRUE, 'default'=>'CURRENT_TIMESTAMP'))
             ->addColumn('test_id', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('pytannya', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('vidpovid', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('check', 'datetime', array('null'=>TRUE,'default'=>NULL))
             ->create();
     }

     public function down(): void
     {
       $this->dropTable('test_results');
     }
}
