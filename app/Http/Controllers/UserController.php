<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //======================= PRAKTIKUM 1 ==============================

        // $data = [
        //     // 'level_id' => 2,
        //     // 'username' => 'manager_dua',
        //     // 'nama' => 'Manager 2',
        //     // 'password' => Hash::make('12345'),

        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::create($data);

        // $user = UserModel::all(); // ambil semua data dari tabel m_user

        //======================= PRAKTIKUM 2.1 ==============================

        // $user = UserModel::find(1);

        // $user = UserModel::where('level_id', 1)->first();

        // $user = UserModel::firstWhere('level_id', 1);

        // $user = UserModel::findOr(1, ['username', 'nama'], function () {
        //     abort(404);
        // });

        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });

        //======================= PRAKTIKUM 2.2 ==============================

        // $user = UserModel::findOrFail(1);

        //$user = UserModel::where('username', 'manager9')->firstOrFail();

        //======================= PRAKTIKUM 2.3 ==============================

        $user = UserModel::where('level_id', 2)->count();
        return view('user', ['data' => $user]);
    }
}
