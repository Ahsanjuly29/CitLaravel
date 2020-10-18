 <?php


 Auth::routes(['verify' => true]);

 Route::group(['middleware' => ['verified','UserCheck']], function(){

     Route::get('/home', 'HomeController@index')->name('home');
     Route::get('/admin', 'HomeController@admin')->name('admin');
     Route::get('/admin/edit/', 'HomeController@adminedit')->name('adminedit');

     Route::get('/admin/category/add', 'CategoryController@category')->name('CategoryForm');
     Route::post('/admin/category/post', 'CategoryController@CategoryPost')->name('CategoryPost');
     Route::get('/admin/category/list', 'CategoryController@CategoryView')->name('CategoryView');
     Route::get('/admin/category/trash', 'CategoryController@CategoryTrash')->name('CategoryTrash');
     Route::get('/admin/category/edit/{category_id}', 'CategoryController@CategoryEdit')->name('CategoryEdit');
     Route::post('/admin/category/update', 'CategoryController@CategoryUpdate')->name('CategoryUpdate');
     Route::get('/admin/category/delete/{category_id}', 'CategoryController@CategoryDelete')->name('CategoryDelete');
     Route::get('/admin/category/pdelete/{category_id}', 'CategoryController@CategoryPermanent')->name('CategoryPermanent');
     Route::get('/admin/category/restore/{category_id}', 'CategoryController@CategoryRestore')->name('CategoryRestore');


     Route::get('/admin/subcategory/add', 'SubCategoryController@subCategory')->name('subCategory');
     Route::post('/admin/subcategory/Post', 'SubCategoryController@subCategoryPost')->name('subCategoryPost');
     Route::get('/admin/subcategory/list', 'SubCategoryController@subCategoryList')->name('subCategoryList');
     Route::get('/admin/subcategory/trash', 'SubCategoryController@subCategoryTrash')->name('subCategoryTrash');
     Route::get('/admin/subcategory/edit/{subcategory_id}', 'SubCategoryController@subCategoryEdit')->name('subCategoryEdit');
     Route::post('/admin/subcategory/update', 'SubCategoryController@subCategoryUpdate')->name('subCategoryUpdate');
     Route::get('/admin/subcategory/delete/{subcategory_id}', 'SubCategoryController@subCategoryDelete')->name('subCategoryDelete');
     Route::get('/admin/subcategory/pdelete/{subcategory_id}', 'SubCategoryController@subCategoryPermanent')->name('subCategoryPermanent');
     Route::get('/admin/subcategory/restore/{subcategory_id}', 'SubCategoryController@subCategoryRestore')->name('subCategoryRestore');



     Route::get('/admin/color/add', 'ColorController@coloradd')->name('coloradd');
     Route::post('/admin/color', 'ColorController@ColorPost')->name('ColorPost');
     Route::get('/admin/colors/view', 'ColorController@colorview')->name('colorview');
     Route::get('/admin/color/edit/{color_id}', 'ColorController@colorEdit')->name('colorEdit');
     Route::get('/admin/colors/delete/{color_id}', 'ColorController@colorDelete')->name('colorDelete');


     Route::get('/admin/product/delete', 'ProductController@Productdelete')->name('Productdelete');
     Route::get('/admin/product/add', 'ProductController@ProductAdd')->name('ProductAdd');
     Route::post('/admin/product/post', 'ProductController@ProductPost')->name('ProductPost');
     Route::get('/admin/product/list', 'ProductController@ProductList')->name('ProductList');
     Route::get('/admin/product/edit/{slug}', 'ProductController@ProductEdit')->name('ProductEdit');
     Route::post('/admin/product/update', 'ProductController@ProductUpdate')->name('ProductUpdate');
     Route::get('/multipleupdate/{id}', 'ProductController@multipleUpdate')->name('multipleUpdate');
     Route::get('/multipleadd/{id}', 'ProductController@multipleadd')->name('multipleadd');
     Route::POST('/multipleaddpost/', 'ProductController@multipleaddpost')->name('multipleaddpost');
     Route::POST('/admin/html', 'ProductController@MulImgPost')->name('MulImgPost');


     Route::get('/admin/size/add', 'SizeController@sizeadd')->name('sizeadd');
     Route::post('/admin/size/post', 'SizeController@sizepost')->name('sizepost');
     Route::get('/admin/size/view', 'SizeController@sizeview')->name('sizeview');

     Route::get('/ajax/state/list/{country_id}', 'CheckController@StateList')->name('StateList');
     Route::get('/ajax/city/list/{state_id}', 'CheckController@CityList')->name('CityList');

     Route::post('shopping/payment/', 'PaymentController@Payment')->name('Payment');
     Route::get('status', 'PaymentController@getPaymentStatus')->name('Status');

     Route::resource('blog', 'BlogController');
 });

     Route::get('/', 'FrontEndController@front')->name('/');
     Route::get('/about', 'FrontEndController@about')->name('about');
     Route::get('/shop', 'FrontEndController@shop')->name('shop');
     Route::get('/shop/{id}', 'FrontEndController@searchshop')->name('searchshop');
     Route::get('/searchshoplike', 'FrontEndController@searchshoplike')->name('searchshoplike');

     Route::get('/blogs', 'FrontEndController@userblog')->name('userblog');
     Route::get('/blogs/{id}', 'FrontEndController@searchblog')->name('searchblog');
     Route::get('/searchbloglike', 'FrontEndController@searchbloglike')->name('searchbloglike');
     Route::get('blogsingle/{id}', 'FrontEndController@blogsingle')->name('blogsingle');

     Route::get('/contact', 'FrontEndController@contact')->name('contact');

     Route::get('/checkout/', 'CheckController@checkout')->name('checkout');

     Route::get('/product/{slug}', 'FrontEndController@SingleProduct')->name('SingleProduct');
     Route::get('/product/single/cart/{id}', 'FrontEndController@AddToCart')->name('AddToCart');

     Route::get('/wish/', 'CartController@Wish')->name('Wish');
     Route::get('/cart/', 'CartController@Cart')->name('Cart');
     Route::get('/cart/{Coupon}', 'CartController@Cart')->name('CartCoupon');
     Route::post('/product/cart/update', 'CartController@CartUpdate')->name('CartUpdate');

     Route::get('/download/pdf', 'HomeController@pdf')->name('pdf');
     Route::get('/download/excel', 'HomeController@excel')->name('excel');

     Route::post('/rating', 'HomeController@rating')->name('rating');

     Route::get('login/github', 'SocialController@redirectToProvider')->name('redirectToProvider');
     Route::get('login/github/callback', 'SocialController@handleProviderCallback')->name('handleProviderCallback');

     Route::get('login/google', 'SocialController@googleredirectToProvider')->name('google');
     Route::get('login/google/callback', 'SocialController@googlehandleProviderCallback')->name('googleCallback');

     Route::get('login/facebook', 'SocialController@facebookredirectToProvider')->name('facebook');
     Route::get('login/facebook/callback', 'SocialController@facebookhandleProviderCallback')->name('facebookCallback');

     Route::resource('comment', 'CommentController');
     Route::post('reply', 'CommentController@reply');

 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
         \UniSharp\LaravelFilemanager\Lfm::routes();
     });

// Route::get('/clear-cache', function() {
//     $run = Artisan::call('config:clear');
//     $run = Artisan::call('cache:clear');
//     $run = Artisan::call('config:cache');
//     return 'FINISHED';
// });









