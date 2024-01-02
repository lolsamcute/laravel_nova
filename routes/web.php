<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Auth\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login']);

// Auth::routes();

// Route::middleware(['kreators.auth'])->group(function () {
    // Your protected routes go here

    Route::get('/app/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/filter', [App\Http\Controllers\HomeController::class, 'filterDashboard'])->name('filterDashboard');

    //All User Dashboard
    Route::get('/app/allUser/dashboard', [App\Http\Controllers\AllUserDasboardController::class, 'index'])->name('index');
    Route::get('/get-filtered-sales', [App\Http\Controllers\AllUserDasboardController::class, 'getFilteredSales']);
    Route::get('/app/user', [App\Http\Controllers\AllUserDasboardController::class, 'users'])->name('user.index');
    Route::get('/filterUserDashboard', [App\Http\Controllers\AllUserDasboardController::class, 'filterUserDashboard'])->name('filterUserDashboard');
    Route::get('/usersDeactivate/{Id}', [App\Http\Controllers\AllUserDasboardController::class, 'usersDeactivate'])->name('users.deactivate');
    Route::get('/usersActivate/{Id}', [App\Http\Controllers\AllUserDasboardController::class, 'usersActivate'])->name('users.activate');
    Route::get('/usersView/{Id}', [App\Http\Controllers\AllUserDasboardController::class, 'usersView'])->name('users.view');


    //All Kreators Dashboard
    Route::get('/app/allKreators/dashboard', [App\Http\Controllers\AllKreatorsDasboardController::class, 'index'])->name('index');
    Route::get('/get-filteredKreator', [App\Http\Controllers\AllKreatorsDasboardController::class, 'getFilteredSales']);
    Route::get('/app/kreators', [App\Http\Controllers\AllKreatorsDasboardController::class, 'kreators'])->name('kreators.index');
    Route::get('/filterKreatorsDashboard', [App\Http\Controllers\AllKreatorsDasboardController::class, 'filterKreatorsDashboard'])->name('filterKreatorsDashboard');
    Route::get('/kreatorsDeactivate/{Id}', [App\Http\Controllers\AllKreatorsDasboardController::class, 'kreatorsDeactivate'])->name('kreators.deactivate');
    Route::get('/kreatorsActivate/{Id}', [App\Http\Controllers\AllKreatorsDasboardController::class, 'kreatorsActivate'])->name('kreators.Activate');
    Route::get('/kreatorsView/{Id}', [App\Http\Controllers\AllKreatorsDasboardController::class, 'kreatorsView'])->name('kreators.view');


    //All Affiliates Dashboard
    Route::get('/app/allAffiliates/dashboard', [App\Http\Controllers\AllAffiliatesDasboardController::class, 'index'])->name('index');
    Route::get('/get-filteredAffiliate', [App\Http\Controllers\AllAffiliatesDasboardController::class, 'getFilteredSales']);
    Route::get('/app/affiliates', [App\Http\Controllers\AllAffiliatesDasboardController::class, 'affiliates'])->name('affiliates.index');
    Route::get('/filterAffiliatesDashboard', [App\Http\Controllers\AllAffiliatesDasboardController::class, 'filterAffiliatesDashboard'])->name('filterAffiliatesDashboard');
    Route::get('/affiliateDeactivate/{Id}', [App\Http\Controllers\AllAffiliatesDasboardController::class, 'affiliateDeactivate'])->name('affiliates.deactivate');
    Route::get('/affiliateActivate/{Id}', [App\Http\Controllers\AllAffiliatesDasboardController::class, 'affiliateActivate'])->name('affiliates.Activate');
    Route::get('/affiliateView/{Id}', [App\Http\Controllers\AllAffiliatesDasboardController::class, 'affiliateView'])->name('affiliates.view');

    //User Roles
    Route::get('/app/user/roles', [App\Http\Controllers\UserRoleController::class, 'index'])->name('index');

    //Store
    Route::get('/app/store', [App\Http\Controllers\StoreController::class, 'index'])->name('index');
    Route::get('/storeDeactivate/{Id}', [App\Http\Controllers\StoreController::class, 'storeDeactivate']);
    Route::get('/storeActivate/{Id}', [App\Http\Controllers\StoreController::class, 'storeActivate']);
    Route::get('/filterStore/{Id}', [App\Http\Controllers\StoreController::class, 'filterStore']);
    Route::get('/app/switch/paymentMethod', [App\Http\Controllers\StoreController::class, 'switchPaymentMethod'])->name('switchPaymentMethod');

    //Products
    Route::get('/app/products', [App\Http\Controllers\ProductController::class, 'products'])->name('products');
    Route::get('/app/filter/products', [App\Http\Controllers\ProductController::class, 'filterProducts'])->name('filterProducts');

    //Transactions
    Route::get('/app/transactions', [App\Http\Controllers\TransactionsController::class, 'transactions'])->name('transactions');
    Route::get('/app/filter/transactions', [App\Http\Controllers\TransactionsController::class, 'filterTransactions'])->name('filterTransactions');

    //Withdrawal
    Route::get('/app/withdrawal', [App\Http\Controllers\TransactionsController::class, 'withdrawal'])->name('withdrawal');

    //Blog
    Route::get('/app/blog', [App\Http\Controllers\BlogController::class, 'blogIndex'])->name('blogIndex');
    Route::get('/app/blogdetails/{Id}', [App\Http\Controllers\BlogController::class, 'show'])->name('show');
    Route::get('/app/blog/create', [App\Http\Controllers\BlogController::class, 'createBlog'])->name('createBlog');
    Route::post('/app/blog/createPost', [App\Http\Controllers\BlogController::class, 'createBlogPost'])->name('createBlogPost');
    Route::post('/add/category', [App\Http\Controllers\BlogController::class, 'createCategoryPost'])->name('createCategoryPost');
    Route::post('/add/blog/delete/{Id}', [App\Http\Controllers\BlogController::class, 'deleteBlog'])->name('deleteBlog');
    Route::post('/add/blog/unpublish/{Id}', [App\Http\Controllers\BlogController::class, 'unpublishBlog'])->name('unpublishBlog');
    Route::get('/app/blog/editBlog/{Id}', [App\Http\Controllers\BlogController::class, 'editBlog'])->name('editBlog');
    Route::post('/app/blog/editPost/{Id}', [App\Http\Controllers\BlogController::class, 'editPost'])->name('editPost');
    Route::post('/app/comment/{Id}', [App\Http\Controllers\BlogController::class, 'commentPost'])->name('commentPost');
    Route::post('/like/{Id}', [App\Http\Controllers\BlogController::class, 'likePost'])->name('likePost');




    //Tickets
    Route::get('/app/tickets', [App\Http\Controllers\TicketsController::class, 'tickets'])->name('tickets');
    Route::get('/ticket/view/{Id}', [App\Http\Controllers\TicketsController::class, 'ticketView'])->name('ticketView');
    Route::get('/ticket/reply/{Id}', [App\Http\Controllers\TicketsController::class, 'ticketReply'])->name('ticketReply');
    Route::post('/ticket/reply/{Id}', [App\Http\Controllers\TicketsController::class, 'ticketReplyPost'])->name('ticketReplyPost');
    Route::get('/ticket/open/{Id}', [App\Http\Controllers\TicketsController::class, 'ticketOpen'])->name('ticketOpen');
    Route::get('/ticket/close/{Id}', [App\Http\Controllers\TicketsController::class, 'ticketClose'])->name('ticketClose');
// });

