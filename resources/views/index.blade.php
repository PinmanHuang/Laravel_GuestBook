@extends('app')

@section('content')
<<<<<<< HEAD
<div class="img1">
			<img src="6rQMFLsNYfkRO39jEKtCMJ.jpg" width="180" height="180">
</div>

<div class="img2">
			<img src="6rQMFLsNYfkRO39jEKtCMJ.jpg" width="180" height="180">
</div>

<div class="groove" id="para1">
=======
<div class="inForm">
>>>>>>> 134f0af13a7800ea491bbf51a9a98b4016b3c20b
	<div class="panel-body">
		{!! Form::open()!!}
		<div class="form-group">
<<<<<<< HEAD
			<p>{!! Form::label('title', 'Title')!!}</p>
			{!! Form::text('title')!!}
=======
			{!! Form::label('title', '標題')!!}
			{!! Form::text('title', null, array('class' => 'title'))!!}
>>>>>>> 134f0af13a7800ea491bbf51a9a98b4016b3c20b
		</div>

		<div class="form-group">
<<<<<<< HEAD
			<p>{!! Form::label('content', 'Content')!!}</p>
			{!! Form::textarea('content')!!}
		</div>
		<div>

			{!! Form::submit('提交', array('class'=>'btn btn-primary'))!!}
=======
			{!! Form::label('content', '內容')!!}
			{!! Form::textarea('content', null, array('class' => 'content'))!!}
		</div>
		<div>

			{!! Form::button('提交', array('class'=>'btn btn-primary', 'id' => 'submitButton'))!!}
>>>>>>> 134f0af13a7800ea491bbf51a9a98b4016b3c20b
			
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