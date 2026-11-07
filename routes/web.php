Route::resource('customers', CustomerController::class)
    ->only(['index', 'create', 'store', 'edit', 'update']);

Route::resource('users', UserController::class)
    ->only(['index', 'create', 'store', 'edit', 'update']);