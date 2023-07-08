<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    use HasFactory;

    protected $table = 'SEO';

    /**
     * Display a listing of the resource.
     * @string $section
     * @return array
     */
    public static function getData($page)
    {
        $data = SEO::where('page', $page)->first();
        if (!empty($data)) {
            $data = json_decode($data->data);
        } else {
            $data = [];
        }

        return $data;
    }
}
