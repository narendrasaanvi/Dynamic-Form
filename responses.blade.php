<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responses - {{ $form->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
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
</body>
</html>
