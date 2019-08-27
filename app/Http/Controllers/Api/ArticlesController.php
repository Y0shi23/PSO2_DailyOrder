<?php
    
    namespace App\Http\Controllers\Api;
    
    use Illuminate\Http\Request;
    use Auth;
    use App\TDaylyOrder;
    use App\TReferenceDate;
    use App\Http\Controllers\Controller;
    
    class ArticlesController extends Controller {
        
        public function index() {
            // 基準日の取得
            $jsondate = TReferenceDate::get(['reference_date']);
            $datetime = $jsondate[0]->reference_date;
            
            // 本日の日付の取得
            $today = date('Y-m-d');
            
            $day1 = new \DateTime($datetime);
            $day2 = new \DateTime($today);
            
            $interval = $day1->diff($day2);
            $interval_days = $interval->days+1;
            
            // 93日周期の終了
            if($interval_days == 94) {
                // 基準日テーブルの更新
                $update_reference_date = TReferenceDate::find(1);
                $update_reference_date->reference_date = $day2;
                $update_reference_date->save();
                // 1日目のデータを取得
                $dayly = TDaylyOrder::find(1);
            }
            
            // 93日周期内
            else {
                $dayly = TDaylyOrder::find($interval_days);
            }
            return json_decode($dayly, true);
        }
        
        public function tomorrow() {
            // 基準日の取得
            $jsondate = TReferenceDate::get(['reference_date']);
            $datetime = $jsondate[0]->reference_date;
            
            // 本日の日付の取得
            $today = date('Y/m/d');
            
            $day1 = new \DateTime($datetime);
            $day2 = new \DateTime($today);
            
            $interval = $day1->diff($day2);
            $interval_days = $interval->days + 2;
            
            // 93日周期の終了
            if($interval_days == 94) {
                $dayly = TDaylyOrder::find(1);
            }
            
            // 93日周期内
            else {
                $dayly = TDaylyOrder::find($interval_days);
            }
            return json_decode($dayly, true);
        }
    }
