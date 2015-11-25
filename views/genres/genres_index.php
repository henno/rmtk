<h3>Žanrid</h3>
<ul class="list-group">
    <? foreach ($genres as $genre): ?>
        <li class="list-group-item">
            <a href="genres/<?= $genre['genre_id'] ?>/<?= $genre['genre_name'] ?>"><?= $genre['genre_name'] ?></a>
        </li>
    <? endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3>Lisa uus žanr</h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><input type="text" name="data[genre_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Add</button>
    </form>
    <?php endif; ?>
