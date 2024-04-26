@extends('layouts.app')

@section('content')
    <div>
        <h1>Data RT</h1>
        <p>Nama: {{ $rt->nama }}</p>
        <p>Created at: {{ $rt->created_at }}</p>
        <p>Updated at: {{ $rt->updated_at }}</p>
    </div>
@endsection