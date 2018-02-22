<?php
use Migrations\AbstractMigration;

class CreateBooks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('books');
        $table->addColumn('title', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('author', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('memo', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('point', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
