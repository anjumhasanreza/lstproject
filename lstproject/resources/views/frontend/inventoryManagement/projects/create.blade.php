@extends('frontend.inventoryManagement.layouts.app')
@section('title','IM: Project Create')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mb-3">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Project</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Project</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Project Detail</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group  col-md-6">
                                <label for="inputName">Project Name</label>
                                <input type="text" id="inputName" class="form-control">
                            </div>
                            <!-- <div class="form-group col-md-6">
                                <label for="inputDescription">Project Description</label>
                                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                            </div> -->


                            <div class="form-group col-md-6">
                                <label for="inputMobile">Mobile</label>
                                <input type="text" id="inputMobile" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" id="inputEmail" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputWebsite">Website</label>
                                <input type="text" id="inputWebsite" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputBin">BIN</label>
                                <input type="text" id="inputBin" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputTradeLicence">Trade Licence</label>
                                <input type="text" id="inputTradeLicence" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputVat">VAT</label>
                                <input type="text" id="inputVat" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputTax">TAX</label>
                                <input type="text" id="inputTax" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSlogan">Slogan</label>
                                <input type="text" id="inputSlogan" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLogo">Logo</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputBanner">Banner</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputOpeningBalance">Cash in Hand</label>
                                <input type="number" id="inputOpeningBalance" class="form-control">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="inputAddressOne">Address 1</label>
                                <textarea id="inputAddressOne" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputAddressTwo">Address 2</label>
                                <textarea id="inputAddressTwo" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>District</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                    <option selected="selected">Mymensingh</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Division</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                    <option selected="selected">Mymensingh</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Country</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                    <option selected="selected">Bangladesh</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Project" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





























@endsection