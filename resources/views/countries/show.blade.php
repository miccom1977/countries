@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Country') }} {{ $country->name  }}
        </div>

        <div class="card-body">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Flag</th>
                    <th scope="col">Official Language/ges</th>
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
            @forelse($country->visitors as $visitor)
                <table>
                    @forelse( $visitor->users as $singleUser)
                    <tr>
                        <td><a href="/users/{{ $singleUser->id }}">{{ $singleUser->name }} {{ $singleUser->surname }}</a></td>
                    </tr>
                    @empty
                        No Visitors
                    @endforelse
                </table>
            @empty
                No Visitors
            @endforelse
        @endif
        <div class="card-footer">

        </div>
    </div>
@endsection
