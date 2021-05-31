@extends('admin.master')
@section('page-content')
<div class="page-heading">
    <h3>Form Layout</h3>
</div>
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Horizontal Form</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label>User Name</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input type="text" class="form-control" name="username" placeholder="username12345">
                            </div>
                            <div class="col-md-2">
                                <label>Email</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input type="email" class="form-control" name="email" placeholder="usermail@gmail.com">
                            </div>
                            <div class="col-md-2">
                                <label>Password</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input type="password" class="form-control" name="password" placeholder="●●●●●●●●">
                            </div>
                            <div class="col-md-2">
                                <label>Full Name</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input type="text" class="form-control" name="fullname" placeholder="Thomas Baron">
                            </div>
                            <div class="col-md-2">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Email">
                            </div>
                            <div class="col-md-2">
                                <label>Address</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <textarea class="form-control" name="address" rows="3"></textarea>
                            </div>
                            <div class="col-md-2">
                                <label>Image</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input class="form-control" type="file" name="image">
                            </div>
                            <div class="col-12 col-md-8 offset-md-2 form-group">
                                <div class='form-check'>
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox1"
                                            class='form-check-input' checked>
                                        <label for="checkbox1">Remember Me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection