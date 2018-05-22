<div class="form-group">
	{{ Form::label('name', 'Název') }}
	{{ Form::text('name', $note->name, array("class" => "form-control")) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Popis') }}
	{{ Form::textarea('description', $note->description, array("class" => "form-control")) }}
</div>
<div class="form-group">
	{{ Form::label('priority', 'Priorita') }}
	{{ Form::select('priority', ['1' => 'Velká', '2' => 'Střední', '3' => 'Malá'], $note->priority, array("class" => "form-control")) }}
</div>
<div class="form-group">
	{{ Form::submit('Odeslat', array("class" => "btn btn-primary")) }}
</div>