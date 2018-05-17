{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::textarea('title') !!}
		</li>
		<li>
			{!! Form::label('category_title', 'Category_title:') !!}
			{!! Form::textarea('category_title') !!}
		</li>
		<li>
			{!! Form::label('description_category', 'Description_category:') !!}
			{!! Form::textarea('description_category') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}