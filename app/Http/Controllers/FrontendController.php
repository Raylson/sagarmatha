<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\ContactUs;
use App\Slider;
use App\Testimonial;
use App\Product;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use App\Mail\MailContactUs;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
    	$sliders = Slider::where('active', '1')->get();
    	$testimonials = Testimonial::where('active', '1')->get();

    	return view('homepage', compact('sliders', 'testimonials'));
    }

    public function page($slug)
    {
    	$page = Page::where([['slug', $slug], ['status', '1']])->first();
    	return view('pages', compact('page'));
    }

    public function gallery()
    {
    	$galleries = Gallery::where('active', '1')->get();
    	return view('gallery', compact('galleries'));
    }

    public function products()
    {
    	$products = Product::where('status', '1')->get();
    	return view('products', compact('products'));
    }

    public function productDetail($slug)
    {
        $product = Product::where([['slug', $slug], ['status', '1']])->first();
        return view('product-detail', compact('product'));
    }

    public function contact()
    {
    	$galleries = Gallery::where('active', '1')->get();
    	return view('contactus', compact('galleries'));
    }

    public function submitContact(Request $request)
    {
    	if($request->email_code != '')
    		return redirect('contact')->with('error_message', 'Error in sending contact email. Spam detected.');

    	$mail = Mail::to(setting('site.admin_email'))->send(new MailContactUs($request));

    	if($mail)
    		return redirect('contact')->with('success_message', 'Contact email has been received. We will contact you soon.');
    	else
    		return redirect('contact')->with('error_message', 'Error in sending contact email. Please try again.');
    }
}
