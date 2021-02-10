<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableTestQuestions extends AbstractMigration
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
       $table = $this->table('test_questions');
       $table->addColumn('category', 'integer', array('limit'=>11, 'null'=>TRUE, 'default'=>NULL))
             ->addColumn('pytannya', 'text')
             ->addColumn('variant_1', 'text')
             ->addColumn('variant_2', 'text')
             ->addColumn('variant_3', 'text')
             ->addColumn('variant_4', 'text')
             ->addColumn('vidpovid', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('img', 'integer', array('limit'=>11, 'null'=>TRUE, 'default'=>NULL))
             ->create();
     }

     public function down(): void
     {
       $this->dropTable('test_questions');
     }
}
