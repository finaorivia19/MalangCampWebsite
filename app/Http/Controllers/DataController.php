<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DataController extends Controller
{
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data has been deleted');
    }
}
