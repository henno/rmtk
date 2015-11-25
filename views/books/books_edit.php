<? if (!$auth->is_admin): ?>
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert">×</button>
        You are not an administrator.
    </div>
    <? exit(); endif; ?>
<h1>book '<?= $book['book_name'] ?>'</h1>
<form id="form" method="post">
    <table class="table table-bordered">
        <tr>
            <th>bookname</th>
            <td><input type="text" name="data[book_name]" value="<?= $book['book_name'] ?>"/></td>
        </tr>
    </table>
</form>

<!-- BUTTONS -->
<div class="pull-right">

    <!-- CANCEL -->
    <button class="btn btn-default"
            onclick="window.location.href = 'books/view/<?= $book['book_id'] ?>/<?= $book['bookname'] ?>'">
        Tühista
    </button>

    <!-- DELETE -->
    <button class="btn btn-danger" onclick="delete_book(<?= $book['book_id'] ?>)">
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
    function delete_book() {
        $.post('<?=BASE_URL?>books/delete', {book_id: <?= $book['book_id'] ?>}, function (response) {
            if (response == 'Ok') {
                window.location.href = '<?=BASE_URL?>books';
            }
        })
    }
</script>