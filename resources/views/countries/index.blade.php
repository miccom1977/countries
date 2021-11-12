@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Add new country') }}
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('country.store') }}">
                @csrf
                <table  class="table">
                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <label>Link to flag</label>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="name" id="name">
                        </td>
                        <td>
                            <input type="text" name="flag" id="flag">
                        </td>
                        <td>
                            <input type="submit" name="send" value="Dodaj" class="btn btn-dark btn-block">
                        </td>
                    </tr>
            </form>
            </table><br>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Flag</th>
                    <th scope="col">Visited?</th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $singleCountry)
                    <tr>
                        <td>{{ $singleCountry->name }}</td>
                        <td><img src="{{ $singleCountry->flag }}" height="25px"/></td>
                        <td>
                            <form method="post" action="{{ route('countryVisitor.update', $singleCountry->id ) }}">
                                @method('PUT')
                                @csrf
                                <input type="submit" name="send" value="I Was there!" class="btn btn-dark btn-block">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-footer">

        </div>
    </div>
@endsection
