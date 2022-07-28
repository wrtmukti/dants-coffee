<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('admin.dashboard', compact('user'));
        } else {
            return redirect('/login');
        }
    }
    public function table()
    {
        return view('admin.table');
    }
    public function updateTable(Request $request, $id)
    {
        if ($request->status == 1) {
            $table = Table::where('id', $id)->update(['status' => 1]);
        } else {
            $table = Table::where('id', $id)->update(['status' => 0]);
        }

        return view('admin.table');
    }
}
