<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    
    public function akademik(){
        return $this->hasOne(Akademik::class);
    }

    public function datadaftar(){
        return $this->hasOne(Datadaftar::class);
    }
    
    public function dataidentity(){
        return $this->hasOne(Dataidentity::class);
    }

    public function datapribadi(){
        return $this->hasOne(Datapribadi::class);
    }

    public function kesehatan(){
        return $this->hasOne(Kesehatan::class);
    }

    public function keuangan(){
        return $this->hasOne(Keuangan::class);
    }

    public function kontak(){
        return $this->hasOne(Kontak::class);
    }
    public function orangtua(){
        return $this->hasOne(Orangtua::class);
    }

    public function sekolah(){
        return $this->hasOne(Sekolah::class);
    }

    public function tambahan(){
        return $this->hasOne(Tambahan::class);
    }

    public function datapendukung(){
        return $this->hasOne(Datapendukung::class);
    }
    public function kontakdarurat(){
        return $this->hasOne(Kontakdarurat::class);
    }

 

}
