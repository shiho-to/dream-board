@extends('layouts.app')

@section('content')

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <td>{{ $dream->id }}</td>
        </tr>
        <tr>
            <th>title</th>
            <td>{{ $dream->title }}</td>
        </tr>
        <tr>
            <th>image<th>
            <img src="{{ $dream->pict }}" alt="dream_pict">
        </tr>
        <tr>
            <th>dream</th>
            <td>{{ $dream->content }}</td>
        </tr>
    </table>
    
    <p>
    {!! link_to_route('dreams.edit', '編集', ['id' => $dream->id], ['class' => 'btn btn-success']) !!}
    </p>
    
    {!! Form::model($dream, ['route' => ['dreams.destroy', $dream->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        
    {!! Form::close() !!}
    
@endsection