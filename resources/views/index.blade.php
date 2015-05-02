@extends('app')

@section('content')
<div>
	{!! Form::open(array('url'=>'addMsg', 'method'=>'post'))!!}
	<div>
		{!! Form::label('title', '標題')!!}
		{!! Form::text('title')!!}
	</div>
	<div>
		{!! Form::label('content', '內容')!!}
		{!! Form::textarea('content')!!}
	</div>
	<div>
		{!! Form::submit('提交')!!}
	</div>
	{!! Form::close()!!}
</div>
@endsection