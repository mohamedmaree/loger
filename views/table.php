<?php

$path = '';
$page = 1;
if (isset($_GET["path"])) {
    $path = $_GET["path"];
    $page = (isset($_GET["page"])) ? $_GET["page"] : 1;
}
?>

<div class="row">
    <form action="" method="GET">
        <div class="col-md-4 w-100" >
            <input type="text" name="path" id="path" value="<?= $path ?>" class="form-control"
                   placeholder="path/to/file" style="width:100%">
        </div>
        <input type='submit' id="submit" class="btn btn-success" value='View'>
    </form>
</div>

<div id="content">
</div>

<script>
    $(document).ready(function () {
        $("form").submit(function () {
            let path = $("#path").val();
            let page = "<?=$page;?>";
            $.get("<?=ROUTE?>/views/content.php?path=" + path + "&page=" + page, function (data) {
                $('#content').html(data);
            });
            return false;
        });
    });
</script>
