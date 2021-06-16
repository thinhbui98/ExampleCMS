@extends('admin.master')
@section('page-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div style="margin-bottom: 30px;">
                    {{-- <form>
                        <div style="display: inline-block;">
                            <input class="form-control custom-shadow custom-radius border-0 bg-white col-6" type="search" placeholder="Search" aria-label="Search">
                            <a href="{{ url('cms/admin/store') }}" class="btn btn-primary float-right"><i class="fas fa-search"></i> Search</a>
                        </div>
                    </form> --}}
                        <a href="{{ url('cms/admin/store') }}" class="btn btn-success"><i class="fas fa-plus"></i> Create account</a>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listAdmin as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->image }}</td>
                                    <td>
                                        @if ($item->deleted == 0)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-secondary">Offline</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('cms/admin/edit/' . $item->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a href="http://" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
@endsection
