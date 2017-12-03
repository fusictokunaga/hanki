


<?= $this->Flash->render() ?>
<table class="table">
    <thead>
    <tr>
        <th>日付</th>
        <th>メモ</th>
        <th>金額</th>
        <th class="actions"></th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($moneyLists as $moneyList): ?>
      <tr>
        <td><?= h($moneyList->date) ?></td>
        <td><?= h($moneyList->name) ?></td>
        <td><?= h($moneyList->money) ?></td>
        <td class="actions">
          <?= $this->Html->link(
    '詳細',
            ['action' => 'index'],
            ['class' => 'btn waves-effect waves-light userlist-button']
            );
          ?>
          <?= $this->Form->postLink(
              '削除',
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