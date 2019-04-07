<?php

use Migrations\AbstractMigration;

class AddMoreFieldsToArticle extends AbstractMigration
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
        $column = $table->hasColumn('url_id');

        if (!$column) {

            $table->addColumn('url_id', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('author_id', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('author_firstname', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('author_lastname', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('image_id', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('image_text', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('image_url', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('image_source', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addIndex([
                'image',
            ], [
                'name' => 'BY_IMAGE',
                'unique' => false,
            ]);
            $table->update();
        }
    }
}
