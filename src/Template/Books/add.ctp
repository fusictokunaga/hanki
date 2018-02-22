
<?= $this->Flash->render() ?>
<?= $this->Form->create($book, ['type' => 'file', 'novalidate' => true]) ?>
<table class="table">
    <tr>
        <th>タイトル</th>
        <td>
            <?= $this->Form->control('title', [
            'label' => '',
            'type' => 'text'
            ]);
            ?>
        </td>
    </tr>
    <tr>
        <th>著者</th>
        <td>
            <?= $this->Form->control('author', [
            'label' => '',
            'type' => 'text'
            ]);
            ?>
        </td>
    </tr>
    <tr>
        <th>内容</th>
        <td>
            <?= $this->Form->control('memo', [
            'label' => '',
            'type' => 'textarea'
            ]);
            ?>
        </td>
    </tr>
    <tr>
        <th>5段階評価</th>
        <td>
            <?= $this->Form->control('star', [
            'label' => '',
            'type' => 'text'
            ]);
            ?>
        </td>
    </tr>
    <tr>
        <th>レビュー</th>
        <td>
            <?= $this->Form->control('point', [
            'label' => '',
            'type' => 'textarea'
            ]);
            ?>
        </td>
    </tr>
    <tr>
        <th>画像</th>
        <td>
            <?php
                    echo $this->Form->input('img', ['type' => 'file',  'label' => '',]);
                    echo $this->ContentsFile->contentsFileHidden($book->contents_file_img, 'contents_file_img');
                    if (!empty($book->contents_file_img)) {
                        echo $this->ContentsFile->image($book->contents_file_img);
                        echo $this->Form->input('delete_img', ['type' => 'checkbox', 'label' => 'delete']);
                    }
                    ?>
        </td>
    </tr>
</table>

<div id="common-button">
<?= $this->Form->button('登録', [
'class' => 'common-button btn btn-primary'
]);
?>
</div>
<?= $this->Form->end() ?>
