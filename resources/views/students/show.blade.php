@extends('layouts.app')

@section('content')
    <h1>Информация о студенте {{ $student->surname }} {{ $student->name }}</h1>

    <p>ID: {{ $student->id }}</p>
    @if($student->group) 
        <p>ID группы: {{ $student->group->id }}</p>
        <p>Название группы: {{ $student->group->title }}</p>
    @else
        <p>Студент не привязан к группе</p>
    @endif
    <p>Фамилия: {{ $student->surname }}</p>
    <p>Имя: {{ $student->name }}</p>
    <p>Дата создания: {{ $student->created_at }}</p>
    <p>Дата обновления: {{ $student->updated_at }}</p>

    <a href="{{ route('groups.show', ['group' => optional($student->group)->id]) }}">Назад к информации о группе</a>
@endsection
