@extends('layouts.main')

@section('title', 'Seznam poznámek')   

@section('content')
    <div class="row">
        <div class="col">
            <h1>Poznámky</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{ url('new/') }}">
                <button type="button" class="btn btn-success">Přidat poznámku</button>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Jméno</th>
                  <th scope="col">Popis</th>
                  <th scope="col">Priorita</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($notes as $note)
                    <tr>
                      <td>{{ $note->name }}</td>
                      <td>{{ $note->description }}</td>
                      <td>{{ $note->priority }}</td>
                      <td>             
                        <a href="{{ url('edit/'.$note->id) }}">
                            <button type="button" class="btn btn-warning">Upravit</button>
                        </a>
                      </td> 
                      <td> 
                        {!! Form::open(['url' => 'detele/'.$note->id, 'method' => 'delete']) !!}
                            {{ Form::submit('Smazat', array("class" => "btn btn-danger")) }}
                        {!! Form::close() !!}
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection