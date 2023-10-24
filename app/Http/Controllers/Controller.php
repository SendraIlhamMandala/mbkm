<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    

    public function createusers(){

        $mahasiswas = Mahasiswa::all();
        $users = [];
        foreach ($mahasiswas as $key => $value) {
            $users[] = [
                'nimhs' => $value->nimhs,
                'name' => $value->nmmhs,
                'email' => $value->email,
                'password' => bcrypt($value->nimhs),
                'created_at' => now(),
            ];
        }
    
        User::insert($users);

        return 'success';
    }

}
