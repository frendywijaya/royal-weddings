<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    use HasFactory;

    protected $table = 'static_page';

    /**
     * Display a listing of the resource.
     * @string $section
     * @return array
     */
    public static function getData($section)
    {
        $data = StaticPage::where('section', $section)->first();
        if (!empty($data)) {
            $data = json_decode($data->data);
        } else {
            $data = [];
        }

        return $data;
    }
}
