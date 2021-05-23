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
                <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label>First Name</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input type="text" id="first-name" class="form-control"
                                    name="fname" placeholder="First Name">
                            </div>
                            <div class="col-md-2">
                                <label>Email</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input type="email" id="email-id" class="form-control"
                                    name="email-id" placeholder="Email">
                            </div>
                            <div class="col-md-2">
                                <label>Mobile</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input type="number" id="contact-info" class="form-control"
                                    name="contact" placeholder="Mobile">
                            </div>
                            <div class="col-md-2">
                                <label>Password</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <input type="password" id="password" class="form-control"
                                    name="password" placeholder="Password">
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
                                <button type="submit"
                                    class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection