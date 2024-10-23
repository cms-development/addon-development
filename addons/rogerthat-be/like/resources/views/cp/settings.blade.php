@extends('statamic::layout')

@section('content')
    <h1>Settings ⚙️</h1>
    <ul class="list-disc pl-5 space-y-2">
        <form action="" method="POST">
        @foreach($collections as $collection)
            <li class="text-lg text-red-700">
                
                {{ $collection->title }}
            </li> 
        @endforeach
    </form>
    </ul>
@endsection