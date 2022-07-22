@extends('layouts.kouka3')

@section('title', '更新')

@section('menu_title')
APEX dps表
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/kouka3/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>武器名: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
      <tr><th>弾薬: </th><td><input type="text" name="amo" value="{{old('amo')}}"></td></tr>
      <tr><th>dps: </th><td><input type="number" name="dps" value="{{old('dps')}}"></td></tr>
      <tr><th>頭: </th><td><input type="number" name="head" value="{{old('head')}}"></td></tr>
      <tr><th>胴体: </th><td><input type="number" name="body" value="{{old('body')}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
@endsection

@section('footer')

@endsection
