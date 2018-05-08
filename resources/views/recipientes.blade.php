@extends('template')
@extends('menu')



<!--conteudo !>
@section('content')
<div class="form-control">


{!! Form::open(['url' => 'recipientes/store']) !!}

 {{ Form::label('codigo ', null, ['class' => 'control-label']) }}
 {{ Form::text('codigo', null, array_merge(['class' => 'form-control'])) }}

{!! Form::close() !!}

</div>
@endsection
