@extends('admin.layouts.admin')

@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header"><i class="fas fa-user mr-1"></i> Создать нового пользователя</div>
        <div class="card-body">
            <form class="mt-1 mb-1" action="{{ route('user.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control py-4 @error('name') is-invalid @enderror" name="name" type="text" placeholder="Введите Имя" required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control py-4 @error('email') is-invalid @enderror" name="email" type="email" aria-describedby="emailHelp" placeholder="Введите E-mail" required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control py-4 @error('password') is-invalid @enderror" name="password" id="inputPassword" type="password" placeholder="Введите пароль" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <laber class="small">Админ права:  </laber>
                            <input type="checkbox" name="is_admin">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-4 mb-0">
                    <input class="btn btn-primary btn-block col-md-3" type="submit" value="Создать">
                </div>
            </form>
        </div>
    </div>
@endsection