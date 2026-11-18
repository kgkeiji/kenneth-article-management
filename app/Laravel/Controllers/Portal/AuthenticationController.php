<?php

namespace App\Laravel\Controllers\Portal;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Laravel\Requests\PageRequest;
use PhpParser\Node\Stmt\TryCatch;
use App\Laravel\Models\Admin;
use DB;


class AuthenticationController extends Controller
{
    public function __construct() {}

    public function login(PageRequest $request)
    {
        $this->data['page_title'] = "Login Page";
        return view('portal.auth.login', $this->data);
    }

    public function authenticate(PageRequest $request)
    {
        $credentials = $request->only("email", "password");

        if (!auth('admin')->attempt($credentials)) {
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Invalid credentials. Please try again.");
            return redirect()->back();
        } else {
            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully logged in. Welcome back!");
            return redirect()->route('portal.dashboard');
        }
    }

    public function register(PageRequest $request)
    {
        $this->data['page_title'] = "Register Page";
        return view('portal.auth.register', $this->data);
    }

    public function store(PageRequest $request)
    {
        DB::beginTransaction();

        try {
            $user = new Admin();
            $user->name = strtoupper($request->input('name'));
            $user->email = strtolower($request->input('email'));
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully registered. Please login to continue.");
            return redirect()->route('portal.auth.login');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server failed. Please try again later.");
            return redirect()->back();
        }
    }

    public function logout(PageRequest $request)
    {
        Auth('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "You have been signed out.");
        return redirect()->route('portal.auth.login');
    }
}
