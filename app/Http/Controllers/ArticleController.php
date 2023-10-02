<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Article;
use Auth;
use App\Models\User;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::getAllOrderByUpdated_at();
        return response()->view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'article' => 'required | max:191',
            'comment' => 'required',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('article.create')
                ->withInput()
                ->withErrors($validator);
        }
        // 🔽 編集 フォームから送信されてきたデータとユーザIDをマージし，DBにinsertする
        $data = $request->merge(['user_id' => Auth::user()->id])->all();
        $result = Article::create($data);

        // tweet.index」にリクエスト送信（一覧ページに移動）
        return redirect()->route('article.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return response()->view('article.show', compact('article'));
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
    public function mydata()
    {
        // Userモデルに定義したリレーションを使用してデータを取得する．
        $articles = User::query()
            ->find(Auth::user()->id)
            ->userArticles()
            ->orderBy('created_at','desc')
            ->get();
        return response()->view('article.index', compact('articles'));
    }
}
