<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRrequest;
use App\Models\admin\About;
use App\Models\admin\Admin;
use App\Models\admin\Education;
use App\Models\admin\Experience;
use App\Models\admin\Fact;
use App\Models\admin\Home;
use App\Models\admin\Portfolio;
use App\Models\admin\PortfolioCategory;
use App\Models\Admin\Skill;
use App\Models\admin\SocialMedia;
use App\Models\admin\Sumary;
use App\Models\front\ContactUs;
use App\Notifications\NewMessageForContact;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $data=[];

        $data['home']  = Home::Selection()->first();
        $data['about'] = About::Selection()->first();
        $data['fact'] = Fact::Selection()->first();
        $data['skill'] = Skill::Selection()->first();
        $data['summary'] = Sumary::Selection()->first();
        $data['educations'] = Education::Selection()->OrderBy('id', 'desc')->get();
        $data['experiences'] = Experience::Selection()->OrderBy('id', 'desc')->get();
        $data['portfolios'] = Portfolio::Selection()->OrderBy('id', 'desc')->get();
        $data['categories'] = PortfolioCategory::Selection()->OrderBy('id', 'desc')->get();
        $data['socials'] = SocialMedia::Selection()->OrderBy('id', 'desc')->get();

        return view('site.index',$data);
    }


    public function storeContactUs(ContactUsRrequest $request)
    {
        //

            $message = ContactUs::create([

                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,


            ]);


              if ($message){
                  $user = Admin::first();
                  $message->latest()->get();
                  $user->notify(new NewMessageForContact($message));


              }


            return redirect()->back()->with([
                'message' => 'Sent Succesfully',
                'alert-type' => 'success',
            ]);




    }




    public function portfolioDetails($id)
    {


        $data=[];

        $data['portfolios']  = Portfolio::where('id',$id)->first();
        $data['categories']  =  $data['portfolios']->category->pluck('id');
        return view('site.portfolio-details', $data);


    }


    protected function uploadImage($folder, $image)
    {
        $image->store('/', $folder);
        $filename = $image->hashName();
        return $filename;

    }

}
