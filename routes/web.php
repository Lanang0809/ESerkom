use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Pengalihan setelah login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else if (Auth::user()->role === 'mahasiswa') {
            return redirect()->route('showRegistrationForm');
        }
        return abort(403, 'Unauthorized action.');
    })->name('dashboard');
});

// Dashboard admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard.admin');
    })->name('admin.dashboard');
});

// Halaman register untuk mahasiswa
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [RegistrationController::class, 'storeRegistration'])->name('storeRegistration');
