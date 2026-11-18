<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Requests\PageRequest;

class MainController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $this->data['page-title'] = 'Dashboard';
        return view('portal.dashboard', $this->data);
    }

    // public function login(PageRequest $request)
    // {
    //     $this->data['page-title'] = 'Portal Login Page';
    //     return view('portal.login', $this->data);
    // }

    // public function register(PageRequest $request)
    // {
    //     $this->data['page-title'] = 'Portal Register Page';
    //     return view('portal.register', $this->data);
    // }

    // public function home(PageRequest $request)
    // {
    //     $this->data['page-title'] = 'Portal Home Page';
    //     return view('portal.home', $this->data);
    // }

    // public function about(PageRequest $request)
    // {
    //     $this->data['page-title'] = 'Portal About Page';
    //     return view('portal.about', $this->data);
    // }

    // public function contact(PageRequest $request)
    // {
    //     $this->data['page-title'] = 'Portal Contact Page';
    //     return view('portal.contact', $this->data);
    // }
}
