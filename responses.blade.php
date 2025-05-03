@extends('admin.layouts.master')
@section('title','Admin-Panel || Banner Create')
@section('main-content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                    <a href="{{ route(getUserPrefix().'.faq.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> {{ __('Add More') }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <x-toastr-notifications />
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="container">
                                            <h2>Responses for: {{ $form->title }}</h2>

                                            @if($form->responses->isEmpty())
                                            <div class="alert alert-info">No responses yet.</div>
                                            @else
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                    All Responses
                                                </div>
                                                <div class="card-body">
                                                    <!-- Table for displaying all form responses -->
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <!-- Loop through all form fields and make them headers -->
                                                                    @foreach($form->fields as $field)
                                                                    <th scope="col">{{ $field->label }}</th>
                                                                    @endforeach
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Loop through all responses and display them in one tbody -->
                                                                @foreach($form->responses as $response)
                                                                <tr>
                                                                    <!-- Loop through each response value and display it under the corresponding column -->
                                                                    @foreach($response->values as $value)
                                                                    <td>{{ $value->value }}</td>
                                                                    @endforeach
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            <a href="{{ route('form.show', $form) }}" class="btn btn-secondary">Back to Form</a>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
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
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            let formId = 'deleteForm' + this.getAttribute('data-id');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(formId).submit();
                }
            });
        });
    });
</script>
@endsection
