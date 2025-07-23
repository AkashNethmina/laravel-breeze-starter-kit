<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'two_factor_code',
        'two_factor_expires_at',
        'two_factor_verified',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_code',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'two_factor_expires_at' => 'datetime',
            'password' => 'hashed',
            'two_factor_verified' => 'boolean',
        ];
    }

    // Role checking methods
    public function isSuperAdmin()
    {
        return $this->role === 'super_admin';
    }

    public function isAdmin()
    {
        return $this->role === 'admin' || $this->isSuperAdmin();
    }

    public function isUser()
    {
        return $this->role === 'user';
    }

    // 2FA methods
    public function generateTwoFactorCode()
    {
        $this->two_factor_code = random_int(100000, 999999);
        $this->two_factor_expires_at = Carbon::now()->addMinutes(10);
        $this->two_factor_verified = false;
        $this->save();
    }

    public function resetTwoFactorCode()
    {
        $this->two_factor_code = null;
        $this->two_factor_expires_at = null;
        $this->two_factor_verified = false;
        $this->save();
    }

    public function verifyTwoFactorCode($code)
    {
        if ($this->two_factor_code === $code &&
            $this->two_factor_expires_at &&
            Carbon::now()->isBefore($this->two_factor_expires_at)) {
            $this->two_factor_verified = true;
            $this->save();
            return true;
        }
        return false;
    }
}
