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
<h2>{{ $form->title }}</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('form.submit', $form) }}" method="POST">
    @csrf
    @foreach($form->fields as $field)
        <div class="form-group">
            <label>{{ $field->label }}</label>
            @if($field->type == 'text')
                <input type="text" name="fields[{{ $field->id }}]" class="form-control">
            @elseif($field->type == 'textarea')
                <textarea name="fields[{{ $field->id }}]" class="form-control"></textarea>
            @elseif($field->type == 'select')
                <select name="fields[{{ $field->id }}]" class="form-control">
                    @foreach(json_decode($field->options) as $option) <!-- Decode the JSON string -->
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </select>
            @endif
        </div>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{ route('form.show', $form) }}" class="btn btn-secondary">Back to Form</a>
</div>
</body>
</html>
