<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Jenssegers\Agent\Agent;
class IndexController extends Controller
{
    //
    const META_KEYWORD = "";
    const META_DESCRIPTION = "";
    public function index(Request $request){
        $page = "frontend.index";
        $agent = new Agent();
        $is_mobile = $agent->isMobile();
        return view($page, [
            "title" => "Home",
            "home" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
    public function athletics(Request $request){
        $page = "frontend.athletics";
        $agent = new Agent();
        $is_mobile = $agent->isMobile();
        return view($page, [
            "title" => "Athletics",
            "athletics" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
    public function arts(Request $request){
        $page = "frontend.arts";
        $agent = new Agent();
        $is_mobile = $agent->isMobile();
        return view($page, [
            "title" => "Art",
            "arts" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
    public function rectory(Request $request){
        $page = "frontend.life";
        $agent = new Agent();
        $is_mobile = $agent->isMobile();
        return view($page, [
            "title" => "Life at Rectory",
            "rectory" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
    public function awards(Request $request){
        $page = "frontend.award";
        $agent = new Agent();
        $is_mobile = $agent->isMobile();
        return view($page, [
            "title" => "Awards",
            "awards" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
    public function community_services(Request $request){
        $page = "frontend.community";
        $agent = new Agent();
        $is_mobile = $agent->isMobile();
        return view($page, [
            "title" => "Community Services",
            "community_services" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
}
