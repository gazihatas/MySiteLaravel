<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('back.categories.index',compact('categories'));
    }

    public function create(Request $request,FlasherInterface $flasher)
    {
        $isExist = Category::whereSlug(Str::slug($request->category))->first();
        if ($isExist)
        {
            $flasher->addWarning($request->category.' adında bir kategori zaten mevcut!','UYARI');
            return redirect()->back();
        }
        $category= new Category();
        $category->name=$request->category;
        $category->slug=Str::slug($request->category);
        $category->save();
        $flasher->addSuccess('Kategori Başarıyla Oluşturuldu','İşlem Başarılı');
        return redirect()->back();
    }

    public function update(Request $request,FlasherInterface $flasher)
    {
        $isSlug=Category::whereSlug(Str::slug($request->slug))->whereNotIn('id',[$request->id])->first();
        $isName=Category::whereName($request->category)->whereNotIn('id',[$request->id])->first();
        if ($isSlug or $isName)
        {
            $flasher->addWarning($request->category.' adında bir kategori zaten mevcut!','UYARI');
            return redirect()->back();
        }
        $category= Category::find($request->id);
        $category->name=$request->category;
        $category->slug=Str::slug($request->slug);
        $category->save();
        $flasher->addSuccess('Kategori Başarıyla Güncellendi!','İşlem Başarılı');
        return redirect()->back();
    }

    public function getData(Request $request)
    {
        $category=Category::findOrFail($request->id);
        return response()->json($category);
    }

    public function delete(Request $request,FlasherInterface $flasher){
        $category=Category::findOrFail($request->id);
        if($category->id==1){
            $flasher->addError('Bu kategori Silinemez');
            return redirect()->back();
        }
        $message='';
        $count=$category->articleCount();
        if($count>0){
            Article::where('category_id',$category->id)->update(['category_id'=>1]);
            $defaultCategory=Category::find(1);
            $message='Bu kategoriye ait '.$count.' makale '.$defaultCategory->name. ' kategorisine taşındı.';
        }
        $category->delete();
        $flasher->addSuccess($message,'Kategori Başarıyla Silindi');
        return redirect()->back();
    }

    public function switch(Request $request)
    {
        $category=Category::findOrFail($request->id);
        $category->status=$request->statu=="true" ? 1 : 0;
        $category->save();
    }
}
