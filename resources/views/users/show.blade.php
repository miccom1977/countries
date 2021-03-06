@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('User') }} {{ $user->name  }} {{ $user->surname  }}
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
                    <tr>
                        <td>{{ $user->name }} {{ $user->surname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                    </tr>
                    <tr>
                        <td colspan"3">
                            Visited countries:<br>
                            @forelse($user->countries as $singleCountry)
                            <a href="/country/{{ $singleCountry->id }}">{{ $singleCountry->name }}</a><br>
                            @empty
                                No Visited countries
                            @endforelse
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="card-footer">

        </div>
    </div>
@endsection
