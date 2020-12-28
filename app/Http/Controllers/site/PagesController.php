<?php
namespace App\Http\Controllers\Site;

use App\Models\Consult;
use App\Models\Service;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Request;
use App\Models\Image;

class PagesController extends SiteController {

    public function showHome()
    {
        return view('site.home');
    }

    public function showService()
    {
        return view('site.service');
    }
    public function showAbout()
    {
        return view('site.about');
    }
    public function contact()
        {
            $conect = new Consult();

            $conect->sender_name = request('sender_name');
            $conect->email = request('email');
            $conect->phone = request('phone');
            $conect->question = request('question');


            $conect->save();

            return redirect('/')->with('success',trans('general.saved'));

        }

    // public function showstore()
    // {

    //      $packages = Product::get();
    //     $category = ProductCategory::get();
    //      $navbar = MenuItem::with(['subMenus' => function($query){
    //             return $query->orderBy('order', 'asc');
    //         }])->orderBy('order', 'asc')->parents()->active(app()->getLocale())->get();
    //         $full = Product::where('quantity', 1);
    //     //$packages = $packages->paginate(6);
    //       return view('site.store', compact('packages','navbar','full','category'));
    // }

    // public function showBrunch()
    // {

    //      $packages = Page::where('status_ar','featured')->orderBy('id', 'Desc')->get();
    //      $navbar = MenuItem::with(['subMenus' => function($query){
    //             return $query->orderBy('order', 'asc');
    //         }])->orderBy('order', 'asc')->parents()->active(app()->getLocale())->get();
    //     //$packages = $packages->paginate(6);
    //       return view('site.brunch', compact('packages','navbar'));
    // }

    // public function showCatalog()
    // {
    //     return Response::make(file_get_contents(PDF_PATH.$this->misc->catalog_pdf), 200, [
    //         'Content-Type' => 'application/pdf',
    //         'Content-Disposition' => 'inline; filename="'.trans('labels.catalog_factory').'"'
    //     ]);
    // }

    // public function showCategory($path)
    // {
    //     $path = explode('/', $path);
    //     $slug = array_pop($path);

    //     $category = PageCategory::where([
    //         'slug' => $slug,
    //         'path' => implode('/', $path) . '/'
    //     ])->orderBy('order_')->first();

    //     if (is_null($category)) throw (new ModelNotFoundException())->setModel(PageCategory::class);

    //     $breadcrumb = [];

    //     $category->getAncestors()->map(function ($item) use (&$breadcrumb, $category) {
    //         $breadcrumb[] = [
    //             'label' => $item->name_locale,
    //             'link' => $item->fullurl(),
    //         ];
    //     });

    //     $breadcrumb[] = [
    //         'label' => $category->name_locale
    //     ];

    //     return view('site.category', [
    //         'category' => $category,
    //         'breadcrumb' => $breadcrumb
    //     ]);
    // }

    // public function showPage($full_path)
    // {
    //     $full_path = explode('/', $full_path);

    //     if (count($full_path) > 1) {
    //         $page = $this->categorizedPage($full_path);
    //     } else {
    //         $page = $this->uncategorizedPage($full_path);
    //     }

    //      if(!empty($page->images)){
    //         $images = Image::whereRaw(' id IN  ('.$page->images.') ')->get()->toArray();
    //         $page->images_paths = $images;
    //     }

    //     $content = $page->render();

    //     return view('site.page', [
    //         'page' => $page,
    //         'content' => $content,
    //     ]);
    // }

    // private function categorizedPage($full_path)
    // {
    //     $pageSlug = array_pop($full_path);

    //     if (count($full_path) == 1) {
    //         $category = PageCategory::findBySlugOrFail($full_path[0]);
    //     } else {
    //         $category = PageCategory::where([
    //             'slug' => array_pop($full_path),
    //             'path' => implode('/', $full_path) . '/'
    //         ])->first();
    //     }

    //     $page = $category->pages()->where([
    //         'slug' => $pageSlug,
    //     ])->first();

    //     if (is_null($page)) throw (new ModelNotFoundException())->setModel(get_called_class());

    //     $page->load('category', 'icon', 'featuredImage');

    //     return $page;
    // }

    // private function uncategorizedPage($slug)
    // {
    //     return Page::findBySlugOrFail($slug)->load('featuredImage', 'icon');
    // }

    // public function closed()
    // {
    //     if ($this->misc->closing_status != 'closed')
    //         return redirect('site.home');

    //     return view('site.closed', [
    //         'message' => $this->misc->closing_message_locale
    //     ]);
    // }

    // public function showContactUs()
    // {
    //     $latlng = json_decode($this->misc->google_map);

    //     return view('site.contact_us', [
    //         'map_options' => [
    //             'lat' => $latlng->lat,
    //             'lng' => $latlng->lng,

    //             'address' => $this->misc->address_locale,
    //             'company' => $this->misc->site_name_locale,
    //             'icon' => asset('assets/site/images/pin.png'),
    //         ]
    //     ]);
    // }

    //  public function showTransport()
    //     {


    //         return view('site.transport');
    //     }
    // public function showProductsCategory($slug)
    // {
    //     $category = ProductCategory::findBySlugOrFail($slug);

    //     return view('site.products.category', ['category' => $category]);
    // }

    // public function showProducts(){
    //     $products = Product::whereStatus('active')->get();

    //     $breadcrumb[] = [
    //         'label' => trans('labels.products')
    //     ];

    //     return view('site.products', [
    //         'products' => $products,
    //         'breadcrumb' => $breadcrumb
    //     ]);
    // }
}
