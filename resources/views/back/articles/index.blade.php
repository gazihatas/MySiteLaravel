@extends('back.layouts.master')
@section('title','Tüm Makaleler')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                <span class="float-right">{{$articles->count()}}makale bulundu.</span>
                <a href="{{route('admin.trashed.article')}}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i>Silinen Makaleler</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Fotoğraf</th>
                            <th>Makale Başlığı</th>
                            <th>Kategori</th>
                            <th>Hit</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>
                                    <img src="{{asset($article->image)}}" width="200" height="200" alt="">
                                </td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->getCategory->name}}</td>
                                <td>{{$article->hit}}</td>
                                <td>{{$article->created_at->diffForHumans()}}</td>
                                <td>
                                    <input class="switch" article-id="{{$article->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger" @if($article->status==1) checked
                                           @endif data-toggle="toggle">
                                </td>
                                <td>
                                    <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}" title="Görüntüle" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('admin.makaleler.edit',$article->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                    <a href="{{route('admin.delete.article',$article->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script>
    $(function() {
        $('.switch').change(function() {
            id = $(this)[0].getAttribute('article-id');
            statu=$(this).prop('checked');
            $.get("{{route('admin.switch')}}", {id:id,statu:statu},  function(data, status) {});
        })
    })
</script>
@endsection
