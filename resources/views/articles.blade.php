@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Статьи')
@yield('header', 'Все статьи')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@foreach ($articles as $article)
    <h2>{{ $article->name }}</h2>
    <p>{{ $article->body }}</p>
    <p>Created at: {{ $article->created_at }}</p>
@endforeach
