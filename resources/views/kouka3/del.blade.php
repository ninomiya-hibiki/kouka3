@extends('layouts.kouka3')

@section('title', '削除')

@section('menu_title')
APEX dps表
@endsection

@section('content')
   <form action="/kouka3/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>武器名: </th><td>{{$item->name}}</td></tr>
      <tr><th>弾薬: </th><td>{{$item->amo}}</td></tr>
      <tr><th>dps: </th><td>{{$item->dps}}</td></tr>
      <tr><th>頭: </th><td>{{$item->head}}</td></tr>
      <tr><th>胴体: </th><td>{{$item->body}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection

@section('footer')

@endsection
