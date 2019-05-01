<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $responseType = $request->header('responseType');
        DB::table('book')
            ->Insert(
                [
                    'category' => $request->category,
                    'title' => $request->title,
                    'author' => $request->author,
                    'ISBN' => $request->ISBN,
                    'year' => $request->year,
                    'price' => $request->price,
                    'publisher' => $request->publisher
                ]
            );
        if($responseType==='application/xml'){
            return response()->xml($request, 201);
        }
        else{
            return response()->json($request, 201);
        }
    }

    public function update(Request $request,$id)
    {
        $responseType = $request->header('responseType');
        DB::table('book')
            ->where('id',$id)
            ->update(
                [
                    'category' => $request->category,
                    'title' => $request->title,
                    'author' => $request->author,
                    'ISBN' => $request->ISBN,
                    'year' => $request->year,
                    'price' => $request->price,
                    'publisher' => $request->publisher
                ]
            );
        if($responseType==='application/xml'){
            return response()->xml($request, 200);
        }
        else{
            return response()->json($request, 200);
        }

    }

    public function get($id,Request $request)
    {
        $responseType = $request->header('responseType');
        $book = DB::table('book')->where('id', $id)->get();
        if($responseType==='application/xml'){
            return response()->xml($book, 200);
        }
        else{
            return response()->json($book, 200);
        }
    }

    public function delete($id)
    {
        DB::table('book')->where('id', $id)->delete();
        return response()->json($id, 204);
    }


}
