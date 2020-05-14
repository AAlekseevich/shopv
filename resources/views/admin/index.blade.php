@extends('admin.layouts.admin')

@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header"><i class="fas fa-users mr-1"></i> Пользователи</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>E-Mail</th>
                        <th>Права администратора</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Имя</th>
                        <th>E-Mail</th>
                        <th>Права администратора</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                        <tr @if($user->is_admin) bgcolor="#f0f8ff" @endif >
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->is_admin ? 'Есть' : 'Нету' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection