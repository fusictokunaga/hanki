


<?= $this->Flash->render() ?>
<table class="table">
    <thead>
    <tr>
        <th>タイトル</th>
        <th>著者</th>
        <th class="actions"></th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($bookLists as $bookList): ?>
    <tr>
        <td><?= h($bookList->title) ?></td>
        <td><?= h($bookList->author) ?></td>
        <td class="actions">
            <?= $this->Html->link('詳細',
            ['action' => 'view', $bookList->id],
            ['class' => 'btn waves-effect waves-light userlist-button']
            );
            ?>
            <?= $this->Form->postLink('削除',
            ['action' => 'index'],
            [
            'class' => 'btn waves-effect waves-red delete-button',
            'confirm' => '削除しますか？'
            ]
            );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>