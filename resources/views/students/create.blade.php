@extends('layouts.app')

@section('content')
    <h1>Добавление студента в группу {{$group->title}}</h1>

    <form method="POST" action="{{ route('groups.students.store', ['group' => $group]) }}">
        @csrf
        <label for="surname">Фамилия:</label>
        <input type="text" id="surname" name="surname" required>
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Добавить студента</button>
    </form>

    <a href="{{ route('groups.show', ['group' => $group]) }}">Назад к информации о группе</a>
@endsection
