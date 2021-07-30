<?php



use Livewire\Component;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\HomeComponet;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   /* Route::get('/', function () {
                            return view('welcome');
                        });*/

//View do Home
Route::get('/',HomeComponet::class);
//View de loja de Compras

Route::get('/checkout',CheckoutComponent::class);
//View do Carinho de Compras
Route::get('/cart',CartComponent::class);

Route::get('/shop',ShopComponent::class);
//View de Pagamento
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
