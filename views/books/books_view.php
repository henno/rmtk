<h1>Raamat '<?= $book['book_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th>Raamatu ID</th>
        <td><?= $book['book_id'] ?></td>
    </tr>

    <tr>
        <th>Raamatu pealkiri</th>
        <td><?= $book['book_name'] ?></td>
    </tr>

    <tr>
        <th>Raamatu žanr</th>
        <td><?= $book['genre_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<? if ($auth->is_admin): ?>
    <form action="books/edit/<?= $book['book_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary"> Muuda</button>
        </div>
    </form>
<? endif; ?>