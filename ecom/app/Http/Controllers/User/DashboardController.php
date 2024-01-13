<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
	public function Index()
	{
		return view('user.dashboard_user');
	}
    public function About()
    {
        return view('user.about');
    }
    public function MostAsked()
    {
        return view('user.most-asked-questions');
    }
    public function PrivacyPolicy()
    {
        return view('user.privacy-policy');
    }
    public function TermOfUse()
    {
        return view('user.terms-of-use');
    }
    public function Contact()
    {
        return view('user.contact');
    }
    public function DeliveryPolicy()
    {
        return view('user.delivery-policy');
    }
    public function ReturnPolicy()
    {
        return view('user.return-policy');
    }
    public function Blog()
    {
        
        return view('user.blog');
    }
}

