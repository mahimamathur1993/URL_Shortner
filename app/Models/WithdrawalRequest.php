<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalRequest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'payment_method', 'status', 'admin_charges', 'repurchase_charges', 'tds', 'transaction_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
