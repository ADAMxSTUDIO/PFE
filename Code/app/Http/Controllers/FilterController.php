<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // This controller will handle pictures filtering in the pictures.index page
        
        $this->validate($request, [
            'filter' => [
                'required',
                'regex:/^(trending|new|liked|free|license)$/',
            ],
        ]); ;

        switch($request->filter){
            case 'trending' :
                $pictures = DB::table('pictures')->orderByDesc('views')->get();
                break;
            case 'new' :
                $pictures = DB::table('pictures')->orderByDesc('created_at')->get();
                break;
            case 'liked' :
                $pictures = DB::table('pictures')->join('likes', 'pictures.id', '=', 'likes.picture_id')->get();
                break;
            case 'free' :
                $pictures = DB::table('pictures')->where('license', 0)->get();
                break;
            case 'license' :
                $pictures = DB::table('pictures')->where('license', 1)->get();
                break;
            default :
                return redirect()->route('picture.index');
        }
        
        return redirect('/#explore')->with('pictures', $pictures);
    }
}