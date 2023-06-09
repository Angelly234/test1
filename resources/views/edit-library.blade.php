@extends('layout.master')

@section('dycontent')
<div class="container-fluid">			    
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Edit Library Assets</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Library</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Library Assets</a></li>
            </ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Library Assets</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" value="Integration Specialist">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Subject</label>
                                    <select class="form-control">
                                        <option value="Subject">Subject</option>
                                        <option value="Politics" selected="">Politics</option>
                                        <option value="Designing">Designing</option>
                                        <option value="Computer">Computer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Auther Name</label>
                                    <input type="text" class="form-control" value="Jimmy Morris">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Publisher</label>
                                    <input type="text" class="form-control" value="Nashid Martines">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Department</label>
                                    <select class="form-control">
                                        <option value="Department">Department</option>
                                        <option value="Computer" selected="">Computer</option>
                                        <option value="DataEntry">Data Entry</option>
                                        <option value="Management">Management</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Asset type</label>
                                    <select class="form-control">
                                        <option value="Asset type">Asset type</option>
                                        <option value="Computer" selected="">Book</option>
                                        <option value="DataEntry">Newspaper</option>
                                        <option value="Management">Comics</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Purchase Date</label>
                                    <input name="datepicker" class="datepicker-default form-control" id="datepicker" value="7 August, 2020">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control" value="90$">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-control">
                                        <option value="Status">Status</option>
                                        <option value="InStock" selected="">In Stock</option>
                                        <option value="OutOfStock">Out Of Stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Assets Details</label>
                                    <textarea class="form-control" rows="5">The Shocking Revelation of Education</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-light">Cencel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop