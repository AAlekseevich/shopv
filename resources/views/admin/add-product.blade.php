@extends('admin.layouts.admin')

@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header"><i class="fas fa-user mr-1"></i> Добавить товар</div>
        <div class="card-body">
            <form class="mt-1 mb-1" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control py-4 @error('title') is-invalid @enderror" name="title" type="text" placeholder="Введите название" required>

                            @error('title')
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
                            <textarea class="form-control py-4 @error('description') is-invalid @enderror" name="description" placeholder="Введите описание" required></textarea>

                            @error('description')
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
                            <input class="form-control py-4 @error('price') is-invalid @enderror" name="price" type="number" placeholder="Введите стоимость" required>
                            @error('price')
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
                            <select class="form-control @error('category') is-invalid @enderror" name="category">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
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
                            <input class="form-control-file @error('photo') is-invalid @enderror" name="photo" type="file" required>
                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
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