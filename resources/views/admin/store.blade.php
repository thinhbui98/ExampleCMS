@extends('admin.master')
@section('page-content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form enctype="multipart/form-data" action="" method="POST">
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
                                <input type="text" class="form-control" name="phone" placeholder="0123456789">
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
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile" name="image">
                                        <label class="custom-file-label" for="inputGroupFile">Choose file</label>
                                    </div>
                                </div>
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
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection