<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Table with Add and Delete Row Feature</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
       body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }

        .table-wrapper {
            width: 1000px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
        }

        .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
        }

        .table-title .add-new {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
        }

        .table-title .add-new i {
            margin-right: 4px;
        }

        table.table {
            table-layout: fixed;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table th:last-child {
            width: 150px;
        }

        table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 5px;
            min-width: 24px;
        }

        table.table td a.add {
            color: #27C46B;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table td a.add i {
            font-size: 24px;
            margin-right: -1px;
            position: relative;
            top: 3px;
        }

        table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
        }

        table.table .form-control.error {
            border-color: #f50000;
        }

        table.table td .add {
            display: none;
        }

        .btn-close {
            background-color: transparent;
            border: none;
            font-size: 18px;
            color: #000;
        }

        .btn-close:hover {
            color: red;
        }

        .btn-close:focus {
            outline: none;
            box-shadow: none;
        }

        .table td a.edit,
        .table td form {
            display: inline-block;
            margin-right: 5px;
        }

        .table td form button.delete {
            background-color: gray;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .table td form button.delete:hover {
            background-color: #c63c20;
        }

        .table td a.edit button {
            background-color: gray;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .table td a.edit button:hover {
            background-color: #e0a800;
        }

        .delete {
            background-color: gray;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        
                        <div class="col-sm-4">
                            <a href="{{ route('issue.create') }}"> <button type="button" class="btn btn-info add-new">Thêm mới</button> </a>
                        </div>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif


                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            
                            <th>Ngày tháng</th>
                            <th>Mô tả</th>
                            <th>Mức độ sự cố</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>
                                @if (isset($item->computer))
                                    {{ $item->computer->computer_name }}
                                @else
                                    - (Không có dữ liệu máy tính) -
                                @endif
                            </td>
                            {{-- <td>{{ $item->reporter_by }}</td> --}}
                            <td>{{ date('d/m/Y H:i', strtotime($item->reporter_date)) }}</td> <!-- Ngày bán (định dạng ngày) -->
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->urgency }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="{{ route('issue.edit', $item->id) }}" class="edit" title="Edit">
                                    <button type="button">Sửa</button>
                                </a>
                                <button class="delete" id="deleteBtn{{ $item->id }}" type="button" data-toggle="modal" data-target="#deleteModal{{ $item->id }}">Xóa</button>

                                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Xác nhận xóa</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có chắc chắn muốn xóa mục này không?
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('issue.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Xác nhận</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $data->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

</body>

</html>
