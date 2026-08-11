<?php

namespace App\Http\Controllers\Frontend;
use App\Domains\Products\Models\Product;
use Illuminate\Http\Request;
/**
 * Class HomeController.
 */
use App\Models\Info;
use App\Models\Notice;
use App\Models\Event;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Brand;
use App\Models\Donate;
use App\Models\Activity;
use App\Models\Gallery;
use Mail;
use App\Mail\ContactMail;
use App\Mail\EventMail;
use App\Mail\VolentiarMail;
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
      
        $product = Product::all();
                $sliders = Slider::
                    where('is_active', 1)
                    ->get();
                    

        $event = Event::where('status', 1)
            ->take(1)
            ->orderBy('id', 'DESC')
            ->first();
                
                            $brands =Brand::where('is_active', 1)
                                ->orderBy('id', 'DESC')
                                ->get();

        return view('frontend.index', compact('product','sliders','event','brands'));
    }
    public function noticedetails($id)
    {
        $notice=Notice::find($id);
        return view('frontend.content.noticedetails',compact('notice'));
    }
    public function infodetails($id)
    {
        $info=Info::find($id);

        return view('frontend.content.infodetails',compact('info'));
    }
    public function team()
    {
    
   
                        $activities = Activity::where('is_active',1)
                            ->orderBy('id', 'DESC')
                            ->get();
               
        return view('frontend.content.team',compact('activities'));
      
    }
    public function clients()
    {
    
   
                          $brands =Brand::where('is_active', 1)
                                ->orderBy('id', 'DESC')
                                ->get();
               
        return view('frontend.content.clients',compact('brands'));
      
    }
    public function protfolio()
    {
    
   
                          $brands =Brand::where('is_active', 1)
                                ->orderBy('id', 'DESC')
                                ->get();
               
        return view('frontend.content.clients',compact('brands'));
      
    }
    public function about()
    {
    

        return view('frontend.content.aboutus');
    }
    public function noticeall()
    {
        $notices=Notice::orderBy('id', 'DESC')->get();
        return view('frontend.content.noticeall',compact('notices'));
    }
    public function donatenow()
    {
                                        $donates = Donate::where('is_active',1)
                                            ->orderBy('title', 'DESC')
                                            ->get();
        return view('frontend.content.donatenow',compact('donates'));
    }
    public function allevent()
    {
                       
                          $brands =Brand::where('is_active', 1)
                                ->orderBy('id', 'DESC')
                                ->get();
        return view('frontend.content.allevent',compact('brands'));
    }
    public function allgallery()
    {
        $page=Page::where('slug', '/all/gallery')->get()->first();
        $images=Gallery::where('is_active', 1)->get();
        return view('frontend.content.allgallery',compact('page','images'));
    }
    public function contact()
    {
         $page=Page::where('slug', '/contact')->get()->first();
        return view('frontend.content.contact',compact('page'));
    }
    public function contactsubmit(Request $request)
    {
     
        $item=$request;
        $adminEmail = get_setting('received_email');
            Mail::to($adminEmail)->send(new ContactMail($item));
            return back()->with('status','Thank you for your message. It has been sent');
}
            
    
    public function eventsubmit(Request $request)
    {
        $item=$request;
        $adminEmail = get_setting('received_email');
            Mail::to($adminEmail)->send(new EventMail($item));
            return back()->with('status','Thank you for your message. It has been sent');
    }
    public function volunteersubmit(Request $request)
    {
        $item=$request;
        $adminEmail = get_setting('received_email');
            Mail::to($adminEmail)->send(new VolentiarMail($item));
             return back()->with('status','Thank you for your message. It has been sent');
    }
    public function eventdetails($id)
    {
        $event=Event::find($id);
        return view('frontend.content.eventdetails',compact('event'));
    }
    public function infoall()
    {
        $infos=Info::orderBy('id', 'DESC')->get();
        return view('frontend.content.infoall',compact('infos'));
    }
     public function allbrand()
    {
          $brands = Brand::where('is_active',1)
                            ->orderBy('id', 'DESC')
                            ->get();              
        return view('frontend.content.allbrand',compact('brands'));
    }
     public function allactivities()
    {

                        $activities = Activity::where('is_active',1)
                            ->orderBy('id', 'DESC')
                            ->get();
               
        return view('frontend.content.allactivities',compact('activities'));
    }
    public function pageshow($slug)
    {
        $slug='/page/'.$slug;
        $page=Page::where('slug', $slug)->get()->first();
        return view('frontend.content.dynamicpage',compact('page'));
    }

}