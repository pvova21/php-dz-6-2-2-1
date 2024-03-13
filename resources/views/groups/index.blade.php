@extends('layouts.app')

@section('content')
    <h1>Список групп</h1>
    
    @if ($groups->count() > 0)
        <ul>
            @foreach($groups as $group)
                <li><a href="{{ route('groups.show', ['group' => $group->id]) }}">{{ $group->title }}</a></li>
            @endforeach
        </ul>
    @else
        <p>No groups available.</p>
    @endif

    <a href="{{ route('groups.create') }}">Создать новую группу</a>
@endsection