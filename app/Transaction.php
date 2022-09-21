<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];
    protected $appends = ['status_label'];
    public function payment()
    {
    	return $this->hasOne(Payment::class);
    }
    public function getStatusLabelAttribute()
    { 
    if ($this->status == 1) {
        return '<span class="label label-success">Selesai</span>';
    }
    	return '<span class="label label-primary">Proses</span>'; 
    }
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
