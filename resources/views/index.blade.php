@extends('app')

@section('content')
<div >
	<div class="panel-body">
		{!! Form::open(array('url'=>'addMsg', 'method'=>'post'))!!}
		<div class="form-group">
			{!! Form::label('title', '標題')!!}
			{!! Form::text('title')!!}
		</div>
		<div class="form-group">
			{!! Form::label('content', '內容')!!}
			{!! Form::textarea('content')!!}
		</div>
		<div>

			{!! Form::submit('提交', array('class'=>'ui blue submit button'))!!}
			
		</div>
</div>		
	{!! Form::close()!!}
</div>
@endsection