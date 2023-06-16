<?php


namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Articles\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataArticles = Article::all();
        return view('admin.article.index', ['dataArticles' => $dataArticles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = FacadesAuth::user()->id;
        $data = new Article();
        if ($request->file('image')) {
            dd("tes");
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/articles'), $filename);
            $data['user_id'] = $user_id;
            $data['title'] = $request->title;
            $data['content'] = $request->content;
            $data['image'] = $filename;
        }
        $data->save();
        return redirect('/dashboard/article');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function report()
    {
        return view('admin.article-report');
    }
}
