<? if (!$auth->is_admin): ?>
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert">×</button>
        You are not an administrator.
    </div>
    <? exit(); endif; ?>
<h1>Autor '<?= $author['author_name'] ?>'</h1>
<form id="form" method="post">
    <table class="table table-bordered">
        <tr>
            <th>Autori nimi</th>
            <td><input type="text" name="data[author_name]" value="<?= $author['author_name'] ?>"/></td>
        </tr>
    </table>
</form>

<!-- BUTTONS -->
<div class="pull-right">

    <!-- CANCEL -->
    <button class="btn btn-default"
            onclick="window.location.href = 'authors/view/<?= $author['author_id'] ?>/<?= $author['authorname'] ?>'">
        Tühista
    </button>

    <!-- DELETE -->
    <button class="btn btn-danger" onclick="delete_author(<?= $author['author_id'] ?>)">
        Kustuta
    </button>

    <!-- SAVE -->
    <button class="btn btn-primary" onclick="$('#form').submit()">
        Salvesta
    </button>

</div>
<!-- END BUTTONS -->

<!-- JAVASCRIPT
==============================================================================-->
<script type="application/javascript">
    function delete_author() {
        $.post('<?=BASE_URL?>authors/delete', {author_id: <?= $author['author_id'] ?>}, function (response) {
            if (response == 'Ok') {
                window.location.href = '<?=BASE_URL?>authors';
            }
        })
    }
</script>