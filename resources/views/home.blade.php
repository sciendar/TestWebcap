@extends('index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-6">
                                <p class="text-primary"><i class="fab fa-accessible-icon fa-2x"></i> User</p>
                                <ul>
                                    <li>Login: <strong>user</strong></li>
                                    <li>E-mail: <strong>user@gmail.com</strong></li>
                                    <li>Password: <strong>user1234</strong></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <p class="text-primary"><i class="fab fa-studiovinari fa-2x"></i> Admin</p>
                                <ul>
                                    <li>Login: <strong>admin</strong></li>
                                    <li>E-mail: <strong>admin@gmail.com</strong></li>
                                    <li>Password: <strong>admin1234</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            @auth
                <p class="text-primary h4">Нам писали</p>
                <table class="table table-sm table-hover table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Message</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $message)
                        <tr class="mb-0 mt-0">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img src="{{ $message->getImage() }}" alt="" width="50px"></td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->message }}</td>
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
