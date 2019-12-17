<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Message extends Model
{
    protected $fillable =[
        'user_id',

        'name',
        'email',
        'phone',

        'image',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public static function add($fields) // Добавление секции
    {
        $section = new static;
        $section->fill($fields);
        $section->save();

        return $section;
    }

    public function uploadImage($image)
    {
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('public/image', $filename);
        $this->image = $filename;
        $this->save();
        return $this->image;
    }

    public function getImage() // вывод картинки
    {
        if($this->image == null)
        {
            return '/img/no-logo.png';
        }

        $urlImage = 'image/' . $this->image;
        $urlImage = Storage::url($urlImage);

        return $urlImage;
    }
}
