<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA DARI TABLE PRODUCTS
        return Inertia::render('product', ['data' => $products]); //RENDER DATA TERSEBUT MENGGUNAKAN INERTIA.
        //PARAMETER PERTAMA YAKNI product ADALAH NAMA FILE .VUE YANG NANTINYA AKAN KITA BUAT
        //PARAMETER BERIKUTNYA ADALAH DATA YANG AKAN DIPASSING BERISI SELURUH DATA PRODUCTS
    }
}
