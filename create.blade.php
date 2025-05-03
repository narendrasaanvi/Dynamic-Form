@extends('admin.layouts.master')
@section('pageTitle', 'Admin | brands')
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item"><a href="{{ route(getUserPrefix().'.dashboard') }}"><i class="fas fa-cubes"></i> {{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">
                            <span><i class="fas fa-file-alt"></i> {{ __('Faqs') }}</span>
                        </li>
                    </ol>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">
                            <div id="clock"></div>
                        </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-0">{{ __('Faqs') }}</h4>
                                <div>
                                    <a href="{{ route(getUserPrefix().'.faq.index') }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> {{ __('View ALL')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <x-toastr-notifications />
                            <form action="{{ route('form.store') }}" method="POST" id="form-builder">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Form Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>

                                <div id="fields-wrapper"></div>

                                <button type="button" class="btn btn-secondary" onclick="addField()">Add Field</button>
                                <button type="submit" class="btn btn-primary">Save Form</button>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<script>
    let fieldIndex = 0;

    function addField() {
        const wrapper = document.getElementById('fields-wrapper');

        const html = `
        <div class="card field-group p-3">
            <div class="mb-2">
                <label>Label</label>
                <input type="text" name="fields[${fieldIndex}][label]" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>Type</label>
                <select name="fields[${fieldIndex}][type]" class="form-control" onchange="toggleOptions(this, ${fieldIndex})" required>
                    <option value="text">Text</option>
                    <option value="textarea">Textarea</option>
                    <option value="select">Select</option>
                </select>
            </div>
            <div class="mb-2" id="options-${fieldIndex}" style="display: none;">
                <label>Options (comma-separated)</label>
                <input type="text" name="fields[${fieldIndex}][options]" class="form-control">
            </div>
        </div>
        `;

        wrapper.insertAdjacentHTML('beforeend', html);
        fieldIndex++;
    }

    function toggleOptions(select, index) {
        const optionsDiv = document.getElementById(`options-${index}`);
        optionsDiv.style.display = (select.value === 'select') ? 'block' : 'none';
    }
</script>
@endsection
