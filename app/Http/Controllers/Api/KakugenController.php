<?php
    
    namespace App\Http\Controllers\Api;
    
    use App\TKakugen;
    use App\Http\Controllers\Controller;
    
    use Illuminate\Http\Request;
    
    class KakugenController extends Controller
    {
        public function index() {
            // 最小値
            $min = 1;
            // 最大値
            $max = 10;
            
            $id = rand($min, $max);
            
            // ランダムで格言を取得
            $kakugen = TKakugen::find($id);
            
            return json_decode($kakugen, true);
            
        }
        public function store(Request $request) {
            $article = new TKakugen;
            $article->kakugen_text = $request->kakugen_text;
            $article->save();
            return redirect('api/v1/kakugen');
        }
    }
