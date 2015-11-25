<h3>Autorid</h3>
<ul class="list-group">
    <? foreach ($authors as $author): ?>
        <li class="list-group-item">
            <a href="authors/<?= $author['author_id'] ?>/<?= $author['author_name'] ?>"><?= $author['author_name'] ?></a>
        </li>
    <? endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3>Lisa uus autor</h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><input type="text" name="data[author_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Add</button>
    </form>
    <?php endif; ?>
