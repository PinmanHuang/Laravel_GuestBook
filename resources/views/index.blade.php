@extends('app')

@section('content')
<div class="inForm">
	<div class="panel-body">
		{!! Form::open()!!}
		<div class="form-group">
			{!! Form::label('title', '標題')!!}
			{!! Form::text('title', null, array('class' => 'title'))!!}
		</div>
		<div class="form-group">
			{!! Form::label('content', '內容')!!}
			{!! Form::textarea('content', null, array('class' => 'content'))!!}
		</div>
		<div>

			{!! Form::button('提交', array('class'=>'btn btn-primary', 'id' => 'submitButton'))!!}
			
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