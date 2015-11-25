<h3>Raamatud</h3>
<ul class="list-group">
    <? foreach ($books as $book): ?>
        <li class="list-group-item">
            <a href="books/<?= $book['book_id'] ?>/<?= $book['book_name'] ?>"><?= $book['book_name'] ?></a>
        </li>
    <? endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3>Lisa uus raamat</h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><input type="text" name="data[book_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Add</button>
    </form>
    <?php endif; ?>
