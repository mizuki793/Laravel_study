@extends('layouts.helloapp')

@section('title', 'Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if(count($errors)> 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table>
    <form action="/hello" method="post">
        {{ csrf_field()}}
        <tr><th>name: </th>
            <td><input type="text" name="name"
            ></td>
        </tr>
    </table>
@endsection