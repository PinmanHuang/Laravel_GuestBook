@extends('app')

@section('content')
<div class="img1">
			<img src="6rQMFLsNYfkRO39jEKtCMJ.jpg" width="180" height="180">
</div>

<div class="img2">
			<img src="6rQMFLsNYfkRO39jEKtCMJ.jpg" width="180" height="180">
</div>

<div class="groove" id="para1">
	<div class="panel-body">
		{!! Form::open(array('url'=>'addMsg', 'method'=>'post'))!!}
		<div class="form-group">
			<p>{!! Form::label('title', 'Title')!!}</p>
			{!! Form::text('title')!!}
		</div>

		<div class="form-group">
			<p>{!! Form::label('content', 'Content')!!}</p>
			{!! Form::textarea('content')!!}
		</div>
		<div>

			{!! Form::submit('提交', array('class'=>'btn btn-primary'))!!}
			
		</div>
</div>		
	{!! Form::close()!!}
</div>

<br/>
<div class="double">
	@foreach($allMessage as $allMessage)
	<br/>
	<div  id="comment">
		<table class="table table-bordered">
			<div>
				<tr>
					<th class="info">Title</th>
					<th class="info">Content</th>
				</tr>	
			</div>
			<tr>
				<div>
					<td> 
						{{ $allMessage -> title }}
					</td>
				</div>

				<div>
					<td>
						{{ $allMessage -> content }}
					</td>
				</div>
			</tr>	
		</table>	
	</div>	
	<br/>	
	@endforeach
</div>
@endsection