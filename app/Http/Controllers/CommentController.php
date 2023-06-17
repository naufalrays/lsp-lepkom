<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentData = Comment::All();
        return view('admin.comment.index', ['commentData' => $commentData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Comment::find($id);
        $data->delete();
        return back();
    }

    public function store_user(Request $request)
    {
        $data = Comment::create([
            'article_id' => $request->article_id,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->comment,
        ]);
        FacadesAlert::success('Success', 'Successfully added data');
        return back();
    }
}
