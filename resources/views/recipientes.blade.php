@extends('template')
@extends('menu')



<!--conteudo !>
@section('content')

{!! Form::open(['url' => 'recipientes/store']) !!}
<div class="form-group">
 {{ Form::label('codigo ', null, ['class' => 'form-control']) }}
 {{ Form::text('codigo', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
 {{ Form::label('peso ', null, ['class' => 'form-control']) }}
 {{ Form::text('codigo', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
 {{ Form::select('animal', [
      '200' => '200ML',
      '300' => '300ML',
      '350' => '350ML',
      '500' => '500ML',
      '600' => '600ML'],
      null,
      ['class'=>'form-control'])}}
</div>
 {!! Form::submit('Cadastrar',['class'=>'btn btn-primary float-right','placeholder'=>'cargo']) !!}
 {!! Form::close() !!}
{!! Form::close() !!}


@endsection
