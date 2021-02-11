<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableTestWordsResult extends AbstractMigration
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
       $table = $this->table('test_words_result');
       $table->addColumn('test_id', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('word_id', 'string', array('limit'=>50, 'null'=>TRUE,'default'=>NULL))
             ->addColumn('question', 'integer', array('limit'=>11, 'null'=>TRUE,'default'=>0))
             ->create();
     }

     public function down(): void
     {
       $this->dropTable('test_words_result');
     }
}
