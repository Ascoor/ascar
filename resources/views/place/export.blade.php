@extends('layouts.app', ['activePage' => 'export', 'titlePage' => __('مخرجات')])

@section('content')

<div class="card">
    <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #153257;
    align-items: center;
    text-align: center;">

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($places as $place)
                <tr>
                    <td>{{ $place->gnump1 }}</td>
                    <td>{{ $place->gnump2 }}</td>
                    <td>{{ $place->gnump3 }}</td>
                    <td>{{ $place->gnump4 }}</td>
                    <td>{{ $place->gnump5 }}</td>
                    <td>{{ $place->gnump6 }}</td>
                    <td>{{ $place->gnump7 }}</td>
                    <td>{{ $place->gnump8 }}</td>
                    <td>{{ $place->gnump9 }}</td>
                    <td>{{ $place->gnump11 }}</td>
                    <td>{{ $place->gnump13 }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>


        @endsection