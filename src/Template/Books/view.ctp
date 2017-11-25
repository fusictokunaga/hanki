
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
            <?= h($book->memo) ?>
        </td>
    </tr>
    <tr>
        <th>面白い！！</th>
        <td>
            <?= h($book->point) ?>
        </td>
    </tr>
    <tr>
        <th>画像</th>
        <td>
            <?= $this->ContentsFile->link($book->contents_file_file, ['download' => true]) ?>
        </td>
    </tr>
</table>
