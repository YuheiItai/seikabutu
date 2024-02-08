<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class OnsenTableSeeder extends Seeder
{
    public function run()
    {
         DB::table('onsens')->insert([
                'name' => '別府温泉',
                'body' => '大分県別府市を中心に広がる温泉であり、日本一の源泉数・湧出量を誇る。豊後三大温泉のひとつである。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('onsens')->insert([
                'name' => '湯布院温泉',
                'body' => '大分県由布市にある由布岳の麓に広がる温泉である。 温泉湧出量、源泉数ともに全国2位の豊富な湯量を誇る。豊後三大温泉のひとつである。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('onsens')->insert([
                'name' => '湯平温泉',
                'body' => '大分県由布市湯布院町湯平にある温泉である。伝承では鎌倉時代に始まるとされ、史料でも室町時代には存在していたことが確認できる',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('onsens')->insert([
                'name' => '大分市温泉',
                'body' => '大分の県庁所在地である大分市。湧き出る温泉は「大深度地熱温泉」と呼ばれ、約600∼800ｍの地下から湧き出る深層熱水です。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('onsens')->insert([
                'name' => '筋湯温泉',
                'body' => '九重連山に抱かれたのどかな山里に湧く温泉地。山麓にもくもくと立ち上る湯煙が温泉情緒を一層高める。1000年以上の歴史を誇る筋湯温泉の名物は「打たせ湯」。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('onsens')->insert([
                'name' => '天ヶ瀬温泉',
                'body' => '、大分県日田市にある温泉である。別府、由布院と並ぶ豊後三大温泉のひとつである。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('onsens')->insert([
                'name' => '日田温泉',
                'body' => '大分県日田市（旧国豊後国）にある温泉である。主に隈一丁目田中町・紺屋町付近に温泉街が広がり、8軒の旅館が存在する。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('onsens')->insert([
                'name' => '宝泉寺温泉',
                'body' => '大分県玖珠郡九重町（旧国豊後国）にある温泉であり、九重九湯の主力である。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('onsens')->insert([
                'name' => '日出温泉',
                'body' => '連山に育まれた大分県・日出町に湯けむりを上げる温泉である。県内でも指折りの名水の郷として歴史深い。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('onsens')->insert([
                'name' => '長湯温泉',
                'body' => '大分県竹田市直入町（旧国豊後国）にある温泉である。炭酸濃度、湧出量、温度から世界屈指の炭酸泉や日本有数の炭酸泉とされ、その効能（飲泉含む）で知られている。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('onsens')->insert([
                'name' => '牧の戸温泉',
                'body' => '大分県玖珠郡九重町にある温泉地である。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('onsens')->insert([
                'name' => '臼杵温泉',
                'body' => '臼杵温泉」が湧く臼杵市は、古くはキリシタン大名として知られた大友宗麟が1563年に築城した臼杵城の城下町として栄えた歴史を持つ。',
                'image_url' => now(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          
    }
}
