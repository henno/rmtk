<? if (!$auth->is_admin): ?>
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert">×</button>
        You are not an administrator.
    </div>
    <? exit(); endif; ?>
<h1>genre '<?= $genre['genre_name'] ?>'</h1>
<form id="form" method="post">
    <table class="table table-bordered">
        <tr>
            <th>genrename</th>
            <td><input type="text" name="data[genre_name]" value="<?= $genre['genre_name'] ?>"/></td>
        </tr>
    </table>
</form>

<!-- BUTTONS -->
<div class="pull-right">

    <!-- CANCEL -->
    <button class="btn btn-default"
            onclick="window.location.href = 'genres/view/<?= $genre['genre_id'] ?>/<?= $genre['genrename'] ?>'">
        Tühista
    </button>

    <!-- DELETE -->
    <button class="btn btn-danger" onclick="delete_genre(<?= $genre['genre_id'] ?>)">
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
    function delete_genre() {
        $.post('<?=BASE_URL?>genres/delete', {genre_id: <?= $genre['genre_id'] ?>}, function (response) {
            if (response == 'Ok') {
                window.location.href = '<?=BASE_URL?>genres';
            }
        })
    }
</script>