@extends('_layouts.main')

@section('body')
<div class="p-8">
    <h1 class="text-3xl font-bold">Nelmio</h1>
    <p><a onclick="document.body.parentNode.classList.toggle('dark')">Toggle Dark Mode</a></p>
    <p class="hidden dark:block">Well done.</p>
</div>
@endsection
