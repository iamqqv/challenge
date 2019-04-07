<?php
use Migrations\AbstractMigration;

class AddNecessaryFieldsToArticles extends AbstractMigration
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
        $table = $this->table('articles');
        $table->addColumn('headline', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('subtitle', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('introduction', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('displaydate', 'timestamp', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
