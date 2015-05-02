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

			{!! Form::submit('提交', array('class'=>'btn btn-primary)!!}
			
		</div>
</div>		
	{!! Form::close()!!}
</div>
<div>
	@foreach($allMessage as $allMessage)
	<div>
		{{ $allMessage -> title }}
	</div>
	<div>
		{{ $allMessage -> content }}
	</div>
	@endforeach
</div>
@endsection