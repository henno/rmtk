<?php

class genres extends Controller
{

    function index()
    {
        $this->genres = get_all("SELECT * FROM genre");
    }

    function view()
    {
        $genre_id = $this->params[0];
        $this->genre = get_first("SELECT * FROM genre WHERE genre_id = '{$genre_id}'");
    }

    function edit()
    {
        $genre_id = $this->params[0];
        $this->genre = get_first("SELECT * FROM genre WHERE genre_id = '{$genre_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('genre', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM genre WHERE genre_id = '{$_POST['genre_id']}'") ? 'Ok' : 'Fail');
    }

}