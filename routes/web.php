<?php

use Illuminate\Support\Facades\Route;
use App\Comment;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/modal', function () {
    return view('modal.modal');
});

Route::get('/flash', function () {
    return view('flashes.flash');
});

Route::get('/comments', function () {
    $comments = Comment::all();

    return view('comments.index', compact('comments'));
});

Route::get('/comments/create', function () {
    return view('comments.create');
});

Route::get('/comments/{comment}/edit', function (Comment $comment) {
   return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/comments/{comment}', function (Comment $comment) {
    $comment->update(
        request()->validate(['body' => 'required|string'])
    );

    return redirect("/comments");
});

Route::delete('/comments/{comment}', function (Comment $comment) {
    $comment->destroy($comment->id);

    return redirect("/comments");
});

Route::post('/comments', function () {
    $attributes = request()->validate(['body' => 'required|string']);

    Comment::create($attributes);

    return redirect('/comments');
});
