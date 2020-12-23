<?php



use Illuminate\Support\Facades\Route;


// * W E B    R O U T E S * \\

// !HOMEPAGE
Route::get('/', function () {
    //* Data pick from config
    $cards = config('pasta-site-data');
    
    // ARRAY PER TIPOLOGIA DI PASTA
    // Lunghe
    $lunghe = [];
    // Corte
    $corte = [];
    // Cortissime
    $cortissime = [];
    // Loop per inserimento con conditionals + as $key for obtain the index value (need it after for the single datails page for each product)
    foreach ($cards as $key => $card) {
        // Id creation for the details pages based on the key (= index)
        $card['id'] = $key;

        if ( $card['tipo'] === 'lunga' ) {
            $lunghe[] = $card;
        }
        elseif ( $card['tipo'] === 'corta' ) {
            $corte[] = $card;
        }
        elseif ( $card['tipo'] === 'cortissima' ) {
            $cortissime[] = $card;
        }
    }
    // 'lunghe', 'corte', 'cortissime' -> Keys for access the arrays
    $collection = ['lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime];
    return view('home', $collection);

}) -> name('home');



// !NEWS PAGE
Route::get('/news', function () {
    return view('news');

}) -> name('news');



// !PRODUCTS DETAILS PAGE
Route::get('/product/{id}', function ($id) {
    //* Data pick from config
    $cards = config('pasta-site-data');

    $product = $cards[$id];
    $length = count($cards) - 1;
    return view('product', compact('product', 'length', 'id'));
}) -> name('product');


?> 
