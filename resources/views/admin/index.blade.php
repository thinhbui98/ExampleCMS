@extends('admin.master')
@section('page-content')
    <div class="page-heading">
        <h3>Administrator List</h3>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hoverable rows</h4>
                            <a href="{{ url('admin/store') }}" class="btn btn-success">
                                Add Account
                            </a>
                        </div>
                        <div class="card-content">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th>USERNAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONE</th>
                                            <th>IMAGE</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listAdmin as $item)
                                            <tr>
                                                <td class="text-bold-500">{{ $item->fullname }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td class="text-bold-500">{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>
                                                    <img src="{{ $item->image }}" alt="">
                                                </td>
                                                <td>
                                                    <a href="{{ url('admin/edit/' . $item->id) }}" class="btn btn-primary">
                                                        Edit
                                                    </a>
                                                    <a href="{{ url('admin/view/' . $item->id) }}" class="btn btn-info">
                                                        View
                                                    </a>
                                                    <a href="{{ url('admin/delete/' . $item->id) }}" class="btn btn-danger">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
