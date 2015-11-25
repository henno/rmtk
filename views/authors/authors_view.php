<h1>Autor '<?= $author['author_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th>Autori ID</th>
        <td><?= $author['author_id'] ?></td>
    </tr>

    <tr>
        <th>Autori nimi</th>
        <td><?= $author['author_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<? if ($auth->is_admin): ?>
    <form action="authors/edit/<?= $author['author_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary"> Muuda</button>
        </div>
    </form>
<? endif; ?>