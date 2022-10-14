@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-xl-9" style="margin: auto">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th width="280px">Action</th>
                            </tr>
                            @php($i = 1)
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->active_status == 1)
                                            <span style="background-color: #0a53be" >Active</span>
                                        @else
                                            <span style="background-color: red" >Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('inactive',$user->id) }}">Active</a>
                                        <a class="btn btn-warning" href="{{ route('active',$user->id) }}">Inactive</a>
                                        <a class="btn btn-danger" href="{{ route('delete',$user->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
