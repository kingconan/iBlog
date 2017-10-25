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
            "title" => "iBlog",
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
            "title" => "iBlog",
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
            "title" => "iBlog",
            "arts" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
    public function rectory(Request $request){
        $page = "frontend.index";
        $agent = new Agent();
        $is_mobile = $agent->isMobile();
        return view($page, [
            "title" => "iBlog",
            "rectory" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
    public function awards(Request $request){
        $page = "frontend.index";
        $agent = new Agent();
        $is_mobile = $agent->isMobile();
        return view($page, [
            "title" => "iBlog",
            "awards" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
    public function community_services(Request $request){
        $page = "frontend.index";
        $agent = new Agent();
        $is_mobile = $agent->isMobile();
        return view($page, [
            "title" => "iBlog",
            "community_services" => "nav_focus",
            "keyword" => IndexController::META_KEYWORD,
            "description" => IndexController::META_DESCRIPTION,
            "is_mobile" => $is_mobile
        ]);
    }
}
