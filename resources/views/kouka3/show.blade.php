@extends('layouts.kouka3')

@section('title', 'kouka3')

@section('menu_title')
APEX dps表

@endsection
@section('content')
   <table>
    <tr><th>武器名</th><th>弾薬</th><th>DPS</th><th>頭</th><th>胴体</th></tr>
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->amo}}</td>
           <td>{{$item->dps}}</td>
           <td>{{$item->head}}</td>
           <td>{{$item->body}}</td>
       </tr>
   </table>
@endsection

@section('footer')

@endsection
