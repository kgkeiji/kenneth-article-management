<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Requests\PageRequest;
use App\Laravel\Models\Admin;
use DB;


class AccountManagementController extends Controller
{
    public function __construct()
    {
        $this->data['page-title'] = "Account Management";
    }

    // index
    public function index(PageRequest $request)
    {
        $this->data['records'] = Admin::paginate(10);

        return view('portal.account-management.index', $this->data);
    }

    // show
    public function show(PageRequest $request, $id = null)
    {
        $this->data['record'] = Admin::find($id);

        return view('portal.account-management.show', $this->data);
    }

    // create
    public function create(PageRequest $request)
    {
        return view('portal.account-management.create', $this->data);
    }

    // store
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
            return redirect()->route('portal.account-management.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server failed. Please try again later.");
            return redirect()->back();
        }
    }

    // edit
    public function edit(PageRequest $request, $id = null)
    {
        $this->data['record'] = Admin::find($id);

        return view('portal.account-management.edit', $this->data);
    }

    // update
    public function update(PageRequest $request, $id = null)
    {
        DB::beginTransaction();

        try {
            $user = Admin::find($id);
            $user->name = strtoupper($request->input('name'));
            $user->email = strtolower($request->input('email'));
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully updated.");
            return redirect()->route('portal.account-management.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server failed. Please try again later.");
            return redirect()->back();
        }
    }
}
