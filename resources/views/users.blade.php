{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('family', 'Family:') !!}
			{!! Form::text('family') !!}
		</li>
		<li>
			{!! Form::label('user_email', 'User_email:') !!}
			{!! Form::text('user_email') !!}
		</li>
		<li>
			{!! Form::label('username', 'Username:') !!}
			{!! Form::text('username') !!}
		</li>
		<li>
			{!! Form::label('user_name', 'User_name:') !!}
			{!! Form::text('user_name') !!}
		</li>
		<li>
			{!! Form::label('password_user', 'Password_user:') !!}
			{!! Form::text('password_user') !!}
		</li>
		<li>
			{!! Form::label('user_pass', 'User_pass:') !!}
			{!! Form::text('user_pass') !!}
		</li>
		<li>
			{!! Form::label('permission', 'Permission:') !!}
			{!! Form::text('permission') !!}
		</li>
		<li>
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state') !!}
		</li>
		<li>
			{!! Form::label('rememberToken', 'RememberToken:') !!}
			{!! Form::text('rememberToken') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}