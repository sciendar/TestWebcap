@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            @auth
                <p class="text-primary h4">Наши пользователи</p>
                <table class="table table-sm table-hover table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">isAdmin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="mb-0 mt-0">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>@if($user->role == 2)<span class="text-danger">admin </span>@endif</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-primary text-center h4">Зарегайся, и увидишь больше...</p>
            @endauth
        </div>
    </div>
@endsection
