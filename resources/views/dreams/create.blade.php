@extends('layouts.app')

@section('content')

    　　　　{!! Form::model($dream, ['route' => 'dreams.store', 'files' => true]) !!}
            
                <div class="form-group">
                    {!! Form::label('title', 'title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                &nbsp;
                <div class="form-group">
                    <input type="file" name="image" id="image" class="upload">
                    <input type="hidden" value="{{ $dream->pict }}" name="dreamPict">        

                </div>
                <div class="form-group">
                    {!! Form::label('content', 'dream:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    
                </div>          
                
                {!! Form::submit('登録', ['class' => 'btn btn-warning']) !!}
        
            {!! Form::close() !!}
@endsection