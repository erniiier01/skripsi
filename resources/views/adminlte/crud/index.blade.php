@extends('adminlte.layouts.app')

@section('title', 'CRUD')

{{-- Custom CSS --}}
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-hover projects">
            <thead>
                <tr>
                    <th style="width: 10%">
                        Project Name
                    </th>
                    <th style="width: 10%">
                        Team Members
                    </th>
                    <th style="width: 30%">
                        Project Progress
                    </th>
                    <th style="width: 5%" class="text-center">
                        Status
                    </th>
                    <th style="width: 10%">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0"
                                aria-volumemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="47" aria-volumemin="0"
                                aria-volumemax="100" style="width: 47%">
                            </div>
                        </div>
                        <small>
                            47% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0"
                                aria-volumemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="60" aria-volumemin="0"
                                aria-volumemax="100" style="width: 60%">
                            </div>
                        </div>
                        <small>
                            60% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar5.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="12" aria-volumemin="0"
                                aria-volumemax="100" style="width: 12%">
                            </div>
                        </div>
                        <small>
                            12% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="35" aria-volumemin="0"
                                aria-volumemax="100" style="width: 35%">
                            </div>
                        </div>
                        <small>
                            35% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar5.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="87" aria-volumemin="0"
                                aria-volumemax="100" style="width: 87%">
                            </div>
                        </div>
                        <small>
                            87% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0"
                                aria-volumemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar5.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0"
                                aria-volumemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0"
                                aria-volumemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="47" aria-volumemin="0"
                                aria-volumemax="100" style="width: 47%">
                            </div>
                        </div>
                        <small>
                            47% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0"
                                aria-volumemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="60" aria-volumemin="0"
                                aria-volumemax="100" style="width: 60%">
                            </div>
                        </div>
                        <small>
                            60% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar5.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="12" aria-volumemin="0"
                                aria-volumemax="100" style="width: 12%">
                            </div>
                        </div>
                        <small>
                            12% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar2.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="35" aria-volumemin="0"
                                aria-volumemax="100" style="width: 35%">
                            </div>
                        </div>
                        <small>
                            35% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar5.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="87" aria-volumemin="0"
                                aria-volumemax="100" style="width: 87%">
                            </div>
                        </div>
                        <small>
                            87% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0"
                                aria-volumemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>
                            BookStore
                        </a>
                        <br />
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar3.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar04.png') }}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('assets/dist/img/avatar5.png') }}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0"
                                aria-volumemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('js')
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush