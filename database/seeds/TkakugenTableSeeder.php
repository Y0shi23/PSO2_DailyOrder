<?php
    
    use Illuminate\Database\Seeder;
    
    class TKakugenTableSeeder extends Seeder
    {
        
        /**
         * Auto generated seed file
         *
         * @return void
         */
        public function run()
        {
            \DB::table('t_kakugen')->delete();
            
            \DB::table('t_kakugen')->insert(array (
                                                   0 =>
                                                   array (
                                                          'id' => 1,
                                                          'kakugen_text' => 'このまま眠り続けて死ぬ。',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   1 =>
                                                   array (
                                                          'id' => 2,
                                                          'kakugen_text' => '全ては自分から始まる。',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   2 =>
                                                   array (
                                                          'id' => 3,
                                                          'kakugen_text' => '人間がこの世に生まれてくるのは、金持ちになるためではなく、幸福になるためである。',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   3 =>
                                                   array (
                                                          'id' => 4,
                                                          'kakugen_text' => '出来るか出来ないかではない。やるかやらないかだ。',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   4 =>
                                                   array (
                                                          'id' => 5,
                                                          'kakugen_text' => '人間の能力は、それが属している社会の質に影響される。',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   5 =>
                                                   array (
                                                          'id' => 6,
                                                          'kakugen_text' => '一生に間違いも正解も無いだろう',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   6 =>
                                                   array (
                                                          'id' => 7,
                                                          'kakugen_text' => '自らの恐怖心を理解することが、物事を本当に見るということの始まりである。',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   7 =>
                                                   array (
                                                          'id' => 8,
                                                          'kakugen_text' => '結論を急ぎすぎて経過を楽しまない。',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   8 =>
                                                   array (
                                                          'id' => 9,
                                                          'kakugen_text' => '方法論は環境に応じて変化させる必要がある。',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   9 =>
                                                   array (
                                                          'id' => 10,
                                                          'kakugen_text' => '傷つけられた時こそ、生き方は試される。',
                                                          'created_at' => NULL,
                                                          'updated_at' => NULL,
                                                          ),
                                                   ));
            
            
        }
    }
