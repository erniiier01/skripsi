@extends('adminlte.layouts.app')

@section('title', 'CRUD - Create')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">General</h3>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputName">Project Name</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Project Description</label>
                        <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputClientCompany">Client Company</label>
                        <input type="text" id="inputClientCompany" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Project Leader</label>
                        <input type="text" id="inputProjectLeader" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select class="form-control custom-select">
                            <option selected disabled>Select one</option>
                            <option>On Hold</option>
                            <option>Canceled</option>
                            <option>Success</option>
                        </select>
                    </div>
                </div>
            </div>
            <h5 class="mt-3">Budget</h5>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="inputEstimatedBudget">Estimated budget</label>
                        <input type="number" id="inputEstimatedBudget" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputSpentBudget">Total amount spent</label>
                        <input type="number" id="inputSpentBudget" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="inputEstimatedDuration">Estimated project duration</label>
                        <input type="number" id="inputEstimatedDuration" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Create new Porject</button>
            <a href="#" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection