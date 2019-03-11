@extends('layouts.app')

@section('content')

            {!! Form::model($dream, ['route' => ['dreams.update', $dream->id], 'files' => true, 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('title', 'title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="input-group">
                    <img src="{{ $dream->pict }}" alt="dream_pict">
                    <br>
                    <input type="file" name="image" id="image" class="upload">
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'dream:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection