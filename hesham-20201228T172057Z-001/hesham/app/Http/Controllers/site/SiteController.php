<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Customer;
use App\Models\Misc;
use App\Models\Rule;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Social;
use Illuminate\Http\Request;
use Whoops\Run;

class SiteController extends Controller
{
    // protected $misc, $banner,$social ,$locale,$service,$topclient;

    public function __construct()
    {


        $this->shareMisc();
        $this->shareSocial();
        $this->shareRule();
        $this->shareClient();
        $this->shareBlog();
        $this->shareService();
        $this->shareCurrentLocale();
        $this->getBanner();
       $this->sharetopclient();
    }

    private function shareMisc()
    {
        $this->misc = Misc::first();

        view()->share('misc', $this->misc);
    }

    private function shareSocial()
    {
        $this->social = Social::first();

        view()->share('social', $this->social);
    }

    private function shareCurrentLocale()
    {
        $locale = config('site.current_locale');
        view()->share([
            'current_locale' => $locale,
        ]);
    }

    protected function getBanner()
    {
        $this->banner = Slider::with('image')->get();
        view()->share('banner', $this->banner);
    }

    protected function shareService()
    {
        $this->service =  Service::paginate(6);
        view()->share('service', $this->service);
    }

    protected function shareClient()
    {
        $this->client =  Customer::paginate(6);
        view()->share('client', $this->client);
    }

    protected function shareRule()
    {
        $this->rule =  Rule::paginate(6);
        view()->share('rule', $this->rule);
    }

    protected function shareBlog()
    {
        $this->blog =  Blog::orderBy('publish_at', 'desc')->paginate(1);
        view()->share('blog', $this->blog);
    }
    protected function sharetopclient()
    {
        $this->topclient =  Customer::where('top',1)->get();
        view()->share('topclient', $this->topclient);

    }

}
