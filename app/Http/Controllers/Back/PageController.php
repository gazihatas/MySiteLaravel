<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function index()
    {
        $pages=Page::all();
        return view('back.pages.index',compact('pages'));
    }

    public function orders(Request $request)
    {
        foreach ($request->get('page') as $key => $order)
        {
            Page::where('id',$order)->update(['order'=>$key]);
        }
    }

    public function create()
    {
        return view('back.pages.create');
    }

    public function update($id)
    {
        $page=Page::findOrFail($id);
        return view('back.pages.update',compact('page'));
    }

    public function updatePost(Request $request,$id,FlasherInterface $flasher)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $page=Page::findOrFail($id);
        $page->title=$request->title;
        $page->content=$request->contentField;
        $page->slug=Str::slug($request->title);

        if ($request->hasFile('image'))
        {
            $imageName = Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'),$imageName);
            $page->image='uploads/'.$imageName;
        }
        $page->save();
        $flasher->addSuccess('Sayfa Başarıyla Güncellendi!','Başarılı');
        return redirect()->route('admin.page.index');
    }


    public function post(Request $request,FlasherInterface  $flasher)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $last=Page::orderBy('order','desc')->first();

        $page= new Page;
        $page->title=$request->title;
        $page->content=$request->contentField;
        $page->order=$last->order+1;
        $page->slug=Str::slug($request->title);

        if ($request->hasFile('image'))
        {
            $imageName = Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'),$imageName);
            $page ->image='uploads/'.$imageName;

        }
        $page->save();
        $flasher->addSuccess('Sayfa Başarıyla Oluşturuldu!');
        return redirect()->route('admin.page.index');
    }

    public function delete($id, FlasherInterface $flasher)
    {
        $page=Page::find($id);
        if (File::exists($page->image))
        {
            File::delete(public_path($page->image));
        }
        $page->delete();
        $flasher->addSuccess('Sayfa Başarıyla Silindi!','Silme İşlemi');
        return redirect()->route('admin.page.index');
    }

    public function switch(Request $request){
        $page=Page::findOrFail($request->id);
        $page->status=$request->statu=="true" ? 1 : 0 ;
        $page->save();
    }
}
