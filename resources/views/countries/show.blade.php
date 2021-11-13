@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Coutry') }} {{ $country->name  }}
        </div>

        <div class="card-body">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Flag</th>
                    <th scope="col">Official Language/ges/th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $country->name }}</td>
                        <td><img src="{{ $country->flag }}" height="25px"/></td>
                        <td>{{ $country->language }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @if($country->visitors!=NULL)
            This country has been visited by:<br>
            @foreach($country->visitors as $visitor)
                <table>
                    @foreach( $visitor->users as $singleUser)
                    <tr>
                        <td><a href="/users/{{ $singleUser->id }}">{{ $singleUser->name }} {{ $singleUser->surname }}</a></td>
                    </tr>
                    @endforeach
                </table>
            @endforeach
        @endif
        <div class="card-footer">

        </div>
    </div>
@endsection
