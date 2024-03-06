@extends('layouts.app')

@section('content')
    <h1>Информация о группе {{ $group->title }}</h1>

    <p>ID: {{ $group->id }}</p>
    <p>Название: {{ $group->title }}</p>
    <p>Дата начала обучения: {{ $group->start_from }}</p>
    <p>Группа активна: {{ $group->is_active ? 'Да' : 'Нет' }}</p>
    <p>Дата создания: {{ $group->created_at }}</p>
    <p>Дата обновления: {{ $group->updated_at }}</p>

    <a href="{{ route('groups.students.create', ['group' => $group->id]) }}">Добавить студента</a>

    <h2>Список студентов:</h2>
    @if ($group->students->count() > 0)
        <ul>
            @foreach($group->students as $student)
                <li>
                    <a href="{{ route('groups.students.show', ['group' => $group->id, 'student' => $student->id]) }}">
                        {{ $student->surname }} {{ $student->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>В этой группе нет студентов.</p>
    @endif

    <a href="{{ route('groups.index') }}">Назад к списку групп</a>
@endsection
