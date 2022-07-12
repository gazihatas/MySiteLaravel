<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::orderBy('created_at','ASC')->get();
        return view('back.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('back.articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,FlasherInterface $flasher)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $article= new Article;
        $article->title=$request->title;
        $article->category_id=$request->category;
        $article->content=$request->contentField;
        $article->slug=Str::slug($request->title);

        if ($request->hasFile('image'))
        {
            $imageName = Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'),$imageName);
            $article->image='uploads/'.$imageName;

        }
        $article->save();
        $flasher->addSuccess('Makale Başarıyla Oluşturuldu!','Başarılı');
        return redirect()->route('admin.makaleler.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::findOrFail($id);
        $categories=Category::all();
        return view('back.articles.update',compact('categories','article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,FlasherInterface $flasher)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $article=Article::findOrFail($id);
        $article->title=$request->title;
        $article->category_id=$request->category;
        $article->content=$request->contentField;
        $article->slug=Str::slug($request->title);

        if ($request->hasFile('image'))
        {
            $imageName = Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'),$imageName);
            $article->image='uploads/'.$imageName;
        }
        $article->save();
        $flasher->addInfo('Makale Başarıyla Güncellendi!','Gücelleme');
        return redirect()->route('admin.makaleler.index');
    }

    public function switch(Request $request){
        $article=Article::findOrFail($request->id);
        $article->status=$request->statu=="true" ? 1 : 0 ;
        $article->save();
    }

    public function delete($id, FlasherInterface $flasher)
    {
        Article::find($id)->delete();
        $flasher->addSuccess('Makale Başarıyla Silindi!','Başarılı');
        return redirect()->route('admin.makaleler.index');
    }

    public function trashed()
    {
        $articles=Article::onlyTrashed()->orderBy('deleted_at','desc')->get();
        return view('back.articles.trashed',compact('articles'));
    }

    public function recover($id, FlasherInterface $flasher)
    {
        Article::onlyTrashed()->find($id)->restore();
        $flasher->addSuccess('Makale Çöp Kutusundan Çıkarıldı!','İşlem Başarılı');
        //return redirect()->route('admin.makaleler.index');
        return redirect()->back();
    }

    public function hardDelete($id, FlasherInterface $flasher)
    {
        $article=Article::onlyTrashed()->find($id);
        if (File::exists($article->image))
        {
            File::delete(public_path($article->image));
        }
        $article->forceDelete();
        $flasher->addError('Makale Başarıyla Silindi!','Silme İşlemi  Başarılı');
        return redirect()->route('admin.makaleler.index');
    }

    public function destroy($id)
    {
        //
    }
}
