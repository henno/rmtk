<?php

class authors extends Controller
{

    function index()
    {
        $this->authors = get_all("SELECT * FROM author");
    }

    function view()
    {
        $author_id = $this->params[0];
        $this->author = get_first("SELECT * FROM author WHERE author_id = '{$author_id}'");
    }

    function edit()
    {
        $author_id = $this->params[0];
        $this->author = get_first("SELECT * FROM author WHERE author_id = '{$author_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('author', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM author WHERE author_id = '{$_POST['author_id']}'") ? 'Ok' : 'Fail');
    }

}