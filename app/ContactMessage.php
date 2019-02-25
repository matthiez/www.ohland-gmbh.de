<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    public $table = 'contact_message';

    public $fillable = ['name', 'email', 'message'];
}
