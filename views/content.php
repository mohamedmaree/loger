<?php

require __DIR__ . '/../init.php';

$path = '';
$page = 1;
if (isset($_GET["path"])) {
    $path = $_GET["path"];
    $page = $_GET["page"];
    $fileData = new \Logger\Classes\FileData($_GET["path"]);
    $lines = $fileData->getFileData();
}
?>
<?php
//if (isset($fileData)) {
    ?>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <tbody>
        <?php
        $i = 1;
        foreach ($lines as $key => $value): ?>
            <tr>
                <td><?= $key; ?></td>
                <td><?= $value; ?></td>
            </tr>
        <?php
        endforeach; ?>
        </tbody>
    </table>

    <!--		Start Pagination -->
    <div class='pagination-container'>
        <nav>
            <ul class="pagination">
                <li data-page="prev" id="prev-all" page="1">
                    <a href="?path=<?= $path; ?>&page=1"><span> |< <span class="sr-only">(current)</span></span></a>
                </li>
                <li data-page="prev" id="prev" page="<?= $fileData->prevPage(); ?>">
                    <a href="?path=<?= $path; ?>&page=<?= $fileData->prevPage(); ?>"><span> < <span class="sr-only">(current)</span></span></a>
                </li>

                <li data-page="next" id="next" page="<?= $fileData->nextPage(); ?>">
                    <a href="?path=<?= $path; ?>&page=<?= $fileData->nextPage(); ?>"><span> >  <span class="sr-only">(current)</span></span></a>
                </li>
                <li data-page="next" id="next-all" page="<?= $fileData->getPaginationNumber(); ?>">
                    <a href="?path=<?= $path; ?>&page=<?= $fileData->getPaginationNumber(); ?>"><span> >| <span
                                    class="sr-only">(current)</span></span></a>
                </li>
            </ul>
        </nav>
    </div>
<?php
//}
?>

<script>
    $(document).ready(function () {
        $("#next-all,#prev-all,#prev,#next").click(function () {
            let path = $('#path').val();
            let page = $(this).attr('page');
            $.get("<?=ROUTE?>/views/content.php?path=" + path + "&page=" + page, function (data) {
                $('#content').html(data);
            });
            return false;
        });
    });
</script>
