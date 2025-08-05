<?php
// Q1 変数と文字列
$name = '「糸永」';
echo '私の名前は' . $name . 'です。';

// Q2 四則演算
$num = (5 * 4);
echo $num . "\n";
echo ($num / 2);

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device == 'windows') {
  echo '使用OSは、windowsです。';
} else {
  if ($device == 'mac') {
    echo '使用OSは、macです。';
  } else {
    echo 'どちらでもありません。';
  }
}

// Q5 条件分岐-2 三項演算子
$age = 17;
$message = ($age >= 18) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$kanto = [
  '東京都',
  '埼玉県',
  '神奈川県',
  '栃木県',
  '千葉県',
  '群馬県',
  '茨城県'
];
echo $kanto[3] . 'と' . $kanto[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
foreach ($kanto as $ken => $kencho) {
  echo $kencho . "\n";
}

// Q8 連想配列-2
$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
foreach ($kanto as $ken => $kencho) {
  if ($ken == '埼玉県') {
    echo $ken . 'の県庁所在地は、' . $kencho . 'です。';
  }
}

// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>