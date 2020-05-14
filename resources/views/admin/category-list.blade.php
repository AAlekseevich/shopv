@extends('admin.layouts.admin')

@section('content')
    <div class="card mb-4 mt-4">
        <div class="card-header"><i class="fas fa-box-open mr-1"></i> Список категорий</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="w-25">
                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-info">Редактировать</a>
                                <a href="{{ route('admin.category.destroy', $category->id) }}" class="btn btn-danger">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection