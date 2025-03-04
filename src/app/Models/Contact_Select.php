<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Select extends Model
{
    use HasFactory;
        protected $fillable = [
            'contact_id',
            'select_id',
        ];

        public function contact()
        {
            return $this->belongsTo(Contact::class);
        }

        public function select()
        {
            return $this->belongsTo(Select::class);
        }
}
