<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Get all books
    public function index()
    {
        $buku = Buku::all();
        return response()->json([
            'success' => true,
            'data' => $buku
        ]);
    }

    // Get recommended books
    public function recommended()
    {
        $buku = Buku::inRandomOrder()->limit(5)->get();
        return response()->json([
            'success' => true,
            'data' => $buku
        ]);
    }

    // Search books
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $buku = Buku::where('title', 'like', "%$query%")
                   ->orWhere('author', 'like', "%$query%")
                   ->get();

        return response()->json([
            'success' => true,
            'data' => $buku
        ]);
    }

    // Get book detail
    public function show($id)
    {
        $buku = Buku::find($id);
        
        if (!$buku) {
            return response()->json([
                'success' => false,
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $buku
        ]);
    }
}