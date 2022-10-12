<?php

/**
 * @var \App\Models\Category $category
 */

?>
@extends('layouts.admin')

@section('title', "Редактировать: {$category->title}")
@section('description', "Редактировать: {$category->title}")

@section('content')
    <h1 class="fw-normal">{{ $category->title }}</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Breadcrumb</li>
            @foreach($category->breadcrumbs as $item)
                <li class="breadcrumb-item">{{ $item['title'] }}</li>
            @endforeach
            <li class="breadcrumb-item active"><span>{{ $category->nav }}</span></li>
        </ol>
    </nav>
    <p>URL &mdash; <span class="text-decoration-underline text-primary">{{ url($category->slug) }}</span></p>

    @include('admin.categories.form')
@endsection