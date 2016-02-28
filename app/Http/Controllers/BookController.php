<?php

namespace Foobooks\Http\Controllers;

use Foobooks\Http\Controllers\Controller;

class BookController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        return 'Show a list of all books';
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getShow($id) {
        return 'Show an individual book: '.$id;
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
        
    $view  = '<form method="POST">';
    $view .= csrf_field(); # This will be explained more later
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
        return 'add the book: ' .$_POST['title'];
    }
}