
<table class="table">
    <tr>
        <th>タイトル</th>
        <td>
            <?= h($book->title) ?>
        </td>
    </tr>
    <tr>
        <th>著者</th>
        <td>
            <?= h($book->author) ?>
        </td>
    </tr>
    <tr>
        <th>内容</th>
        <td>
            <?= nl2br(h($book->memo)) ?>
        </td>
    </tr>
    <tr>
        <th>5段階評価</th>
        <td>
            <div id="star" data-score="<?php echo $book->star;?>"></div>
        </td>
    </tr>
    <tr>
        <th>レビュー</th>
        <td>
            <?= nl2br(h($book->point)) ?>
        </td>
    </tr>
    <tr>
        <th>画像</th>
        <td>
            <?= $this->ContentsFile->image($book->contents_file_img, ['resize' => ['width' => 150, 'height' => 200, 'type' => 'scoop']]);?>
        </td>
    </tr>
</table>

<div style="text-align: left">
<?= $this->Html->link(
'一覧へ戻る',
['action' => 'index'],
['class' => 'common-button btn btn-warning']
);
?>
</div>


<script type="text/javascript">
$(function() {
    $('div#star').raty( {
        readOnly: true,   //閲覧者によるスコアの変更不可
        score: function() {
            return $(this).attr('data-score');
        },
        path:'/hanki/img/raty' //サーバ上のRaty画像のパス
    });
});
</script>