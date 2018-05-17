{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('news_id', 'News_id:') !!}
			{!! Form::text('news_id') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::textarea('email') !!}
		</li>
		<li>
			{!! Form::label('user_email_comment', 'User_email_comment:') !!}
			{!! Form::textarea('user_email_comment') !!}
		</li>
		<li>
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state') !!}
		</li>
		<li>
			{!! Form::label('user_ip', 'User_ip:') !!}
			{!! Form::text('user_ip') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}