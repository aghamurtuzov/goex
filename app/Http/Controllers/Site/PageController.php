<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteMailRequest;
use App\Mail\SendMail;
use App\Models\About;
use App\Models\Annotation;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Faq;
use App\Models\ForbiddenProduct;
use App\Models\Information;
use App\Models\Service;
use App\Models\Shop;
use App\Models\Slider;
use App\Models\Tariff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function getHome(){
        $sliders = Slider::where(["status"=>true,"delete"=>false])->get();
        $services = Service::where(["status"=>true,"delete"=>false])->get();
        $informations = Information::where(["status"=>true,"delete"=>false])->limit(3)->get();
        $annotations = Annotation::where(["status"=>true,"delete"=>false])->get();
        $tariffs = Tariff::where(["status"=>true,"delete"=>false])->get();
        $shops = Shop::where(["status"=>true,"delete"=>false,"is_partner"=>true])->get();
        $countries = Country::where(["status"=>true,"delete"=>false])->get();
        return view("site.home.home")->with([
            "sliders"=>$sliders,
            "services"=>$services,
            "informations"=>$informations,
            "annotations"=>$annotations,
            "tariffs"=>$tariffs,
            "shops"=>$shops,
            "countries"=>$countries
        ]);
    }
    public function getAbout(){
        $abouts = About::where(["status"=>true,"delete"=>false])->get();
        return view("site.about.about")->with(["abouts"=>$abouts]);
    }
    public function getServices(){
        $services = Service::where(["status"=>true,"delete"=>false])->get();
        return view("site.services.services")->with(["services"=>$services]);
    }
    public function getCarriage(){
        $conditions = Condition::where(["status"=>true,"delete"=>false])->get();
        return view("site.carriages.carriage")->with(["conditions"=>$conditions]);
    }
    public function getContact(){
        $contacts = Contact::where(["status"=>true,"delete"=>false])->get();
        return view("site.contact.contact")->with(["contacts"=>$contacts]);
    }
    public function getFaq(){
        $faqs = Faq::where(["status"=>true,"delete"=>false])->get();
        return view("site.faq.faq")->with(["faqs"=>$faqs]);
    }
    public function getForbidden(){
        $forbbidens = ForbiddenProduct::where(["status"=>true,"delete"=>false])->get();
        return view("site.forbidden.forbidden")->with(["forbiddens"=>$forbbidens]);
    }
    public function getInformation(){
        $informations = Information::where(["status"=>true,"delete"=>false])->get();
        return view("site.information.information")->with(["informations"=>$informations]);
    }
    public function getShop(){
        $shops = Shop::where(["status"=>true,"delete"=>false,"category_id"=>true])->get();
        $categorys = Category::where(["status"=>true,"delete"=>false])->get();
        return view("site.shops.shops")->with(["shops"=>$shops,"categorys"=>$categorys]);
    }
    public function getCountry(){
        $countries = Country::where(["status"=>true,"delete"=>false])->get();
        $tariffs = Tariff::where(["status"=>true,"delete"=>false])->get();
        return view("site.country.country")->with(["countries"=>$countries,"tariffs"=>$tariffs]);
    }
    public function postSiteShop(Request $request){
        try{
            $shops = Shop::where(["category_id"=>$request->get("id"),"status"=>true,"delete"=>false])->get();
            return response()->json([
                'status' => 'true',
                'error' => '',
                'success' => 200,
                "shops"=>$shops,
            ]);
        }
        catch (\Exception $e){
            return response()->json(['status' => 'false', 'message' => $e->getMessage(), 'line' => $e->getLine()]);
        }

    }
    public function postSiteCountry(Request $request){
        try{
            $tariff = Tariff::where(["country_id"=>$request->get("id"),"status"=>true,"delete"=>false])->get();
            return response()->json([
                'status' => 'true',
                'error' => '',
                'success' => 200,
                "tariff"=>$tariff,
            ]);
        }
        catch(\Exception $e){
            return response()->json(['status' => 'false', 'message' => $e->getMessage(), 'line' => $e->getLine()]);
        }

    }

    public function postContact(SiteMailRequest $request){
        $request->validated();
        try{
            $fullname=$request->fullname;
            $email=$request->email;
            $phone=$request->phone;
            $message=$request->message;

            Mail::to("info@goex.az")->send(new SendMail($fullname,$phone,$email,$message));
            return response()->json(["status"=>"success","title"=>" ","content"=>"Mesajınız göndərildi"]);
        }
        catch (\Exception $e){
            return response()->json(["status"=>"error","title"=>"Xəta","content"=>"Bir xəta yarandı!"]);
        }
    }

}
