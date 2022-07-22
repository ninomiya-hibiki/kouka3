@extends('layouts.kouka3')

@section('title', 'kouka3')

@section('menu_title')
ログイン管理

@endsection
@section('content')
   <table>
   <tr><th>Name(Age)</th><th>Mail</th></tr>
       <tr>
           <td>{{$item->getData()}}</td>
           <td>{{$item->mail}}</td>
       </tr>
   </table>
@endsection

@section('footer')

@endsection
