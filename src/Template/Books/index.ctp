

<div style="text-align: right">
    <?= $this->Html->link(
    '本の登録',
    ['action' => 'add'],
    ['class' => 'common-button btn btn-warning']
    );
    ?>
</div>

<div id="slide-show">
<div id='slide-single-item'>
    <?php foreach ($bookLists as $bookList): ?>
        <div style="text-align: center; margin: 10px;">
             <h5><?= $this->Html->link(
                 $bookList->title,
                 ['action' => 'view', $bookList->id],
                 ['class' => 'btn waves-effect waves-light userlist-button']
                 );
                 ?></h5>
            <?= $this->ContentsFile->image($bookList->contents_file_img, ['class' => 'slide-image', 'resize' => ['width' => 150, 'height' => 200, 'type' => 'scoop']]);?>
        </div>
    <?php endforeach; ?>
</div>
</div>

<?= $this->Flash->render() ?>
<table class="table" style="margin-top: 30px">
    <thead>
    <tr>
        <th>タイトル</th>
        <th>著者</th>
        <th>5段階評価</th>
        <th class="actions"></th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($bookLists as $bookList): ?>
    <tr>
        <td><?= h($bookList->title) ?></td>
        <td><?= h($bookList->author) ?></td>
        <td><div id="star" data-score="<?php echo $bookList->star;?>"></div></td>
        <td class="actions">
            <?= $this->Html->link(
    '詳細',
            ['action' => 'view', $bookList->id],
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


<script type="text/javascript">
$(function() {
    $('#star').raty( {
        readOnly: true,   //閲覧者によるスコアの変更不可
        score: function() {
            return $(this).attr('data-score');
        },
        path:  './img/raty' //サーバ上のRaty画像のパス
    });
});
</script>