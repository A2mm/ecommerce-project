
@foreach($users as $user)
<tr>
	<td> {{ $user->id }} </td>
	<td> {{ $user->name }} </td>
	<td> {{ $user->email }} </td>
	<td>  action </td>
</tr>
@endforeach