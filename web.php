use App\Http\Controllers\FormController;

Route::get('/form/{form}', [FormController::class, 'show'])->name('form.show');
Route::post('/form/{form}', [FormController::class, 'submit'])->name('form.submit');
Route::get('/form/{form}/responses', [FormController::class, 'responses'])->name('form.responses');
Route::get('/form-create', [FormController::class, 'create'])->name('form.create');
Route::post('/form-store', [FormController::class, 'store'])->name('form.store');
