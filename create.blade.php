<!DOCTYPE html>
<html>
<head>
    <title>Create Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .field-group { margin-bottom: 1rem; }
    </style>
</head>
<body>
<div class="container mt-4">
    <h2>Create Dynamic Form</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

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

</body>
</html>
