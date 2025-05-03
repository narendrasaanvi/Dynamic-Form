<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\FormResponse;

class FormController extends Controller
{
    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'fields' => 'required|array',
            'fields.*.label' => 'required|string|max:255',
            'fields.*.type' => 'required|string|in:text,textarea,select',
            'fields.*.options' => 'nullable|string'
        ]);

        $form = Form::create([
            'title' => $validatedData['title']
        ]);

        foreach ($validatedData['fields'] as $fieldData) {
            $options = null;
        
            if ($fieldData['type'] === 'select' && !empty($fieldData['options'])) {
                $optionsArray = array_map(function ($option) {
                    return trim($option, " \t\n\r\0\x0B\"'"); // remove spaces and quotes
                }, explode(',', $fieldData['options']));
        
                $options = json_encode($optionsArray);
            }
        
            $form->fields()->create([
                'label' => $fieldData['label'],
                'name' => \Str::slug($fieldData['label'], '_'),
                'type' => $fieldData['type'],
                'options' => $options,
            ]);
        }

        return redirect()->route('form.show', $form)->with('success', 'Form created successfully!');
    }

    public function show(Form $form)
    {
        return view('forms.show', compact('form'));
    }

    public function submit(Request $request, Form $form)
    {
        $response = $form->responses()->create();

        foreach ($request->input('fields', []) as $fieldId => $value) {
            $response->values()->create([
                'form_field_id' => $fieldId,
                'value' => $value
            ]);
        }

        return redirect()->back()->with('success', 'Response submitted!');
    }

    public function responses(Form $form)
    {
        $form->load('responses.values.field');
        return view('forms.responses', compact('form'));
    }
}
