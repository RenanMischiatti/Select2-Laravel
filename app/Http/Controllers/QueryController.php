<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function main()
    {
        return $this->{$this->request->function}();    
    }

    protected function products()
    {
        return Product::where('name', 'like', "%{$this->request->search}%")
        ->select(['id', 'name as text', 'image_path', 'description'])
        ->paginate(10);
    }
}
