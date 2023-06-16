<?php


namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Articles\Auth;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all articles table data
        $dataArticles = Article::all();
        // Return view and passing data articles to view
        return view('admin.article.index', ['dataArticles' => $dataArticles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Open page create article
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get Id User
        $user_id = FacadesAuth::user()->id;
        // Get Table articles
        $data = new Article();
        // If the file is not null will create data to database article
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/articles'), $filename);
            $data['user_id'] = $user_id;
            $data['title'] = $request->title;
            $data['content'] = $request->content;
            $data['image'] = $filename;
        }
        // Save data or add data
        $data->save();
        // Alert
        FacadesAlert::success('Success', 'Successfully added data');
        // Redirect screen to /dashboard/article
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
        // Find Article with id
        $data = Article::find($id);
        if (file_exists('images/article/' . $data->image)) {
            // Remove local images
            @unlink('images/article/' . $data->image);
        }
        $data->delete();
        FacadesAlert::success('Success', 'Successfully deleted data');
        return back();
    }

    public function report()
    {
        // Open view article-report
        return view('admin.article-report');
    }
}
