<?php
use Migrations\AbstractSeed;
use Cake\I18n\FrozenTime;

/**
 * Monies seed.
 */
class MoniesSeed extends AbstractSeed
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
        $today = $time->format('Y-m-d');

        $data = [
            [
                'date' => $today,
                'memo' => '食費',
                'money' => 700,
                'category_id' => 1
            ]
        ];


        $table = $this->table('monies');
        $table->insert($data)->save();
    }
}
