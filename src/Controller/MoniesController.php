<?php

namespace App\Controller;

/**
 * UsersController
 *
 *
 */
class MoniesController extends AppController
{
    public function index()
    {
        $moneyLists = $this->Monies->find('all');

        $this->set(compact('moneyLists'));
    }
}
