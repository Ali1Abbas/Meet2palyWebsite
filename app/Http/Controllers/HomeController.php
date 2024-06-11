<?php
namespace App\Http\Controllers;

use App\Models\ContentManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController
{
    public function getContent($slug)
    {
        $data['content'] = ContentManagement::getBySlug($slug);
        if( !isset($data['content']->id) )
            return redirect('/');

        return view('content', $data);
    }
	
	public function contactUs(Request $request)
    {
        if( $request->isMethod('post') )
            return $this->__submitContactUs($request);

        return view('contact-us');
    }

    private function __submitContactUs($request)
    {
        $params = $request->all();
        $data = [
            'fullname'  => $params['fullname'],
            'email'     => $params['email'],
            'mobile_no' => $params['mobile_no'],
            'contact_message'   => $params['message'],
        ];
        Mail::send('email.contact', $data, function ($message) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $message->to(env('CONTACT_US_EMAIL'));
        });
        return redirect()->back()->with('success','Your message has been submitted successfully');
    }
}
