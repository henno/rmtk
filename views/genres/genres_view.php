<h1>Žanr '<?= $genre['genre_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th>Genre ID</th>
        <td><?= $genre['genre_id'] ?></td>
    </tr>

    <tr>
        <th>Genre name</th>
        <td><?= $genre['genre_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<? if ($auth->is_admin): ?>
    <form action="genres/edit/<?= $genre['genre_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary"> Muuda</button>
        </div>
    </form>
<? endif; ?>