<?php
use Migrations\AbstractSeed;
use Cake\I18n\FrozenTime;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $time = new FrozenTime();
        $now = $time->format('Y-m-d H:i:s');

        $data = [
            [
                'name' => '収入'
            ],
            [
                'name' => '出費'
            ]

        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
