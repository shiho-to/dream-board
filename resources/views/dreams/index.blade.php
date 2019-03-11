@extends('layouts.app')

@section('content')

    @if (count($dreams) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>title</th>
                    <th>dream</th>
                    <th>image<th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dreams as $dream)
                <tr>
                    <td>{!! link_to_route('dreams.show', "$dream->id", ['id' => $dream->id]) !!}</td>
                    <td>{{ $dream->title }}</td>
                    <td>{{ $dream->content }}</td>
                    <td><img class="icon" src="{{ $dream->pict }}" alt="dream_pict"></td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    @endif
    
    <p>
    {!! link_to_route('dreams.create', '新規作成', null, ['class' => 'btn btn-primary']) !!}
    </p>
    
    {{ $dreams->render('pagination::bootstrap-4') }}
    
@endsection