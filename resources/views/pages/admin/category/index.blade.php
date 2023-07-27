@extends('layouts.admin.app')
@section('content')
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message') }}</div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 class="d-flex align-items-center mt-auto">Categories</h4>
                        <a href="{{ route('admin.dashboard.category.create') }}" class="btn btn-sm btn-primary">Create New
                            Category</a>
                    </span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead style="background: #e9ecef">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Created Date</th>
                                    <th>Created By</th>
                                    <th>Approve Status</th>
                                    <th>Active Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Saloon</td>
                                    <td>saloon</td>
                                    <td>27/12/2023</td>
                                    <td>Admin</td>
                                    <td>
                                        <span class="badge badge-success px-2">Approved</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-success px-2">Activated</span>
                                    </td>

                                    <td>
                                        <a href="#">
                                            <i class="fa-solid fa-eye text-info mx-2" data-toggle="tooltip"
                                                data-placement="bottom" title="Show"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa-solid fa-pen-to-square text-primary mx-2" data-toggle="tooltip"
                                                data-placement="bottom" title="Edit"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" title="Activate"
                                            onclick="return confirm('Are you sure you want to active this category')">
                                            <i class="fa-regular fa-circle-xmark text-warning mx-2"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this category')">
                                            <i class="fa-solid fa-trash text-danger mx-2"></i>
                                        </a>

                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
