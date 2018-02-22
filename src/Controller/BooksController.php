<?php

namespace App\Controller;

/**
 * UsersController
 *
 *
 */
class BooksController extends AppController
{
    // ヘルパー読み込み
    public $helpers = [
        'ContentsFile.ContentsFile',
    ];

    public function index()
    {
        $bookLists = $this->Books->find('all');

        $this->set(compact('bookLists'));
    }

    public function add()
    {
        $book = $this->Books->newEntity();


        if ($this->request->is('post')) {
            $book = $this->Books->patchEntity($book, $this->request->getData());


            if ($this->Books->save($book)) {
                $this->Flash->success('登録しました');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('登録できませんでした');
        }

        $this->set(compact('book'));
        $this->set('_serialize', ['book']);
    }

    public function view($id = null)
    {
        $book = $this->Books->get($id);

        $this->set('book', $book);
        $this->set('_serialize', ['book']);
    }
}
