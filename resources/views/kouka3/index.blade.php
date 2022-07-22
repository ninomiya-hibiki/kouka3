@extends('layouts.kouka3')

@section('title', 'メニュー')

@section('menu_title')
APEX dps表
@endsection

@section('content')
    <form action="/kouka3/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>
   <a href="/kouka3/add">新規登録</a>
   <table>
   <tr><th>武器名</th><th>弾薬</th><th>DPS</th><th>頭</th><th>胴体</th><th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->amo}}</td>
           <td>{{$item->dps}}</td>
           <td>{{$item->head}}</td>
           <td>{{$item->body}}</td>
           <td><a href="/kouka3/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/kouka3/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/kouka3/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')

@endsection
