{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('reporter_id', 'Reporter_id:') !!}
			{!! Form::text('reporter_id') !!}
		</li>
		<li>
			{!! Form::label('category_id', 'Category_id:') !!}
			{!! Form::text('category_id') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('abstr', 'Abstr:') !!}
			{!! Form::textarea('abstr') !!}
		</li>
		<li>
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body') !!}
		</li>
		<li>
			{!! Form::label('post', 'news') !!}
			{!! Form::text('post') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}