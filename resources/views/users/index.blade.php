@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Visitors') }}
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a href="/users/{{ $user->id }}">{{ $user->name }} {{ $user->surname }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-footer">
        </div>
    </div>
@endsection
