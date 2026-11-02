        <?php

        use App\Http\Controllers\GameController;
        use Illuminate\Support\Facades\Route;

        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('/game/', [GameController::class, 'index'])->name('game.index');
        Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
        Route::post('/game/store', [GameController::class, 'store'])->name('game.store');
