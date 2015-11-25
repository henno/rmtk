<?php

class books extends Controller
{

    function index()
    {
        $this->books = get_all("SELECT * FROM book");
    }

    function view()
    {
        $book_id = $this->params[0];
        $this->book = get_first("SELECT * FROM book JOIN genre USING (genre_id) WHERE book_id = '{$book_id}'");
    }

    function edit()
    {
        $book_id = $this->params[0];
        $this->book = get_first("SELECT * FROM book WHERE book_id = '{$book_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('book', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM book WHERE book_id = '{$_POST['book_id']}'") ? 'Ok' : 'Fail');
    }

}