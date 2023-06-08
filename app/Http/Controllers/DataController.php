<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{

    public function user(){
        $user = Auth::user(); // Mendapatkan objek pengguna yang sedang login
        
        return view('account', compact('user'));
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data has been deleted');
    }
}
