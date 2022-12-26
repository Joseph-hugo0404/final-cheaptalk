@extends('main')

@section('title', 'Logs')

@section('content')
    <div id="main">
        <div class="d-grid gap-2 d-md-flex mt-2">
            <h1 style="font-size: 23px; font-weight: 400;">Activity Log--[{{Auth::user()->name}}]</h1>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">
                Logs
            </div>
            <div class="card-body">
        <table class="table table-striped text-center">
            <thead style="background-color:rgb(16, 0, 43); color:white;">
                <th>Timestamp</th>
                <th>Log Entry</th>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->created_at->format('l, d F Y g:i A') }}</td>
                    <td>{{ $log->log_entry }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
        <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
        </div>
    </div>
@endsection

