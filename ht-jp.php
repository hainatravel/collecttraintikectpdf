<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>AraChinaによる列車旅行の手引き</title>
<style type="text/css">
*{ font-family:Calibri;}
.content{
  width:210mm;
  margin:0 auto;
}
.header{
  border-bottom:8px solid #a31022!important; padding-bottom:5px; height:100px;
} 
.haderRight{
  float:right; text-align:right; margin-top:30px;
}
.schedule .White{ background-color:#FFFFFF}
.schedule .WhiteFont{ color:#FFFFFF}
</style>
</head>
<body>
<div class="content">
  <div class="header">
    <div class="haderRight">
       Tel: 86-773-285339  
      <br/>
      E-mail: contact@arachina.com
    </div>
    <a href="http://www.chinahighlights.com/" title="http://www.chinahighlights.com/"><img border="0" width="136" height="100" src="http://data.arachina.com/information-view/information/css/img/logo-132x104-jp.png"/></a>
  </div>
  <h1 align="center">AraChinaによる列車旅行の手引き</h1>
  <p align="left">
    <strong>目次</strong>: <br/>
    <a href="#Part-1_How_to"><strong>１．時刻表</strong></a><br/>
    <a href="#Part-2_How_to"><strong>２．乗車方法</strong></a><br/>
    <a href="#Part-3_Travel_tips"><strong>３．豆知識</strong></a><br/>
    <a href="#Part-4_Timetable_of"><strong>４．チケットの種類について</strong></a>
  </p>
  <div>
    <h2>&nbsp;</h2>
    <h2><a name="Part-4_Timetable_of" id="Part-4_Timetable_of"></a>1．時刻表</h2>
    <p align="left">
      時刻表はあくまでの参考のため、実際の時刻情報については駅に直接お尋ねください。
    </p>
        <?php
        $codes = explode(",",$_GET['code']);
        $d     = explode(",",$_GET['d']);

        $result = array();
        foreach($codes as $key=>$val){
          if($val != ""){
            $d_tmp = isset($d[$key])?$d[$key]:'';
            $url = "http://www.chinahighlights.com/api/api.php?method=train.schedule&nc=$val&d=$d_tmp&j=1";
            $result[] = file_get_contents($url);
          }
        }
        foreach($result as $strVal){
        $val = json_decode($strVal);
        ?>
        <table width="90%" border="0" align="center" cellpadding="5" cellspacing="2" bgcolor="#999999" class="schedule">
          <tr>
            <td colspan="6" bgcolor="#CE403F" class="WhiteFont">The Time Table Of&nbsp;<?php echo $val->data->trainNo?></td>
          </tr>
          <tr>
            <td bgcolor="#CE403F" class="WhiteFont">列車番号</td>
            <td bgcolor="#CE403F" class="WhiteFont">都市</td>
            <td bgcolor="#CE403F" class="WhiteFont">中国語</td>
            <td bgcolor="#CE403F" class="WhiteFont">到着時間</td>
            <td bgcolor="#CE403F" class="WhiteFont">出発時間</td>
            <td bgcolor="#CE403F" class="WhiteFont">滞留時間</td>
          </tr>
          <?php foreach ($val->data->Schedule as $item){?>
          <tr class="White">
            <td><?php echo $item->trainOrder ?></td>
            <td><?php echo $item->Station ?></td>
            <td><?php echo $item->trainStation ?></td>
            <td><?php echo $item->trainArrive ?></td>
            <td><?php echo $item->trainDepart ?></td>
            <td><?php echo str_replace(":"," 時間 ",$item->trainOrder)." 分" ?></td>
          </tr>
          <?php } ?>
        </table>
        <p></p>
       <?php } ?>
  </div>
  <h2 align="left"><a name="collect_tickets" id="collect_tickets"></a><a name="Part-1_How_to" id="Part-1_How_to"></a>2．チケットの種類について</h2>
  <h3 align="left">①紙チケット手配の時期</h3>
  <p align="left">
 準備の段階でチケットも忘れず用意しましょう。
 ギリギリではなく少なくとも<strong>出発の2時間前</strong>までに紙チケットを受け取ってください。
 </p>
  <p>
 駅の窓口営業時間（一般）：8:00～22:00、チケット代理店では受け取ることはできません。
  </p>
  <p>
 駅によっては駅に入る前またはチケットを受け取る前にセキュリティ・チェックがあります。駅の入り口ではＸ線検査があり、場合によってはパスポートかチケットの提示を求められます。
  </p>
  <h3 align="left">②紙チケットを受け取りに際し、必要なもの </h3>
  <p>
    発券が完了するとEチケット番号（お問い合わせ番号ではありません。）がメールで発行されます。もし複数件の予約がある場合、それぞれの予約によって番号が異なります。<strong>Eチケット番号とパスポート</strong>を持参のうえ、駅の窓口かチケット売り場で受け取ることができます。Eチケット番号をメモしたものを持参すれば間違いありません。
  </p>
 
  <h3 align="left">③駅のチケット受け取り窓口</h3>
  <p align="left">
 駅にはたくさんの窓口があります。しかし実際にチケットを受け取れる箇所はそのうちのいくつかだけです。スピーディーに見つけるためには<strong>"电话订票、网络订票取票窗口(Ticket collection window for telephone and online bookings)"</strong>と書かれた窓口を探してください。そしてパスポートを提示しEチケット番号を告げるとチケットを受け取ることができます。パスポート、チケットはきちんと管理してください。
  </p>
  <p align="left">
    注: Ara Chinaでは手違い防止のためチケットが発券されるまでの間の案内書があります。しかしまれに列車のチケットを受け取ることができないといったトラブルに遭遇することもあります(中国の列車システムの問題や人為的な問題によって)。そのような場合に備えチケットのスクリーンショット件やそれを印刷したものを口頭で伝えるだけではなく、提示したほうがよいでしょう。もしそのようなトラブルに遭遇した際には直接、私たちAra Chinaにお電話ください。電話をかわりすぐに対処いたします。<br/>
    このような場合に備え、出発前まで必ずご確認ください。ただし列車出発後のこの点に関する件やお客様ご自身によるチケット受け取りのトラブルにつきましては責任を負いかねますのでご了承ください。
  </p>
  <p align="left">
     チケットの受け取り窓口を間違えないために、このようなフレーズを書いた紙を提示するとよいでしょう。
  </p>
  <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="559" valign="top">
      <p>
        <br/>
        <strong>请问网络购票的取票窗口在哪？</strong><strong></strong><br/>
          (ネット購入したチケットの受け取り窓口はどこですか？)
        <br/>
      </p>
    </td>
  </tr>
  </table>
  <p align="center">
    <img border="0" width="473" height="259" src="howTo_clip_image004.jpg"/>
  </p>
  <h2><a name="board_train" id="board_train"></a><a name="Part-2_How_to" id="Part-2_How_to"></a>3．乗車方法 </h2>
  <h3>①準備するもの </h3>
  <p align="left">
      
    <strong>パスポートと紙チケット</strong>が必要です<br/>
    乗車前に保安検査でもチケットを提示する必要があります。パスポートは保安検査のみで必要です。取り出しやすいようにしておくとよいでしょう。しかしその後は必要ありませんのできちんとしまっておいてください。<br/>
  列車での食事は食堂車での食事やお弁当がありますがあまりおすすめはできません。長距離旅行では何か食べるもの、お菓子やカップ麺、果物などを用意されたほうがよいでしょう。また車内にはトイレットペーパーや使い捨ての便座シートなどはありませんので必要ならばご持参ください。
  </p>
  <h3>②保安検査 </h3>
  <p align="left">
    保安検査は待合室に入る前にあります。また駅によっては駅に入る時点で行われるところもあります。保安検査では人・荷物ともに検査を受けます。駅での保安検査は空港よりも簡単です。液体類やライターを持ちこむこともできます。しかし以下のものに関しては持ち込み禁止です。銃類、爆発物、銃や爆弾の模造品、毒ガスなど人体に悪影響を及ぼすもの、燃えやすい薬物、政府によって禁じられているもの、乗客や公共の衛生を害する生きた動物や虫などです。
  </p>
  <h3>③待合室 </h3>
  <p align="left">
    乗車前は待合室に入ります。ほとんどの駅では待合室は列車ごとに分かれています。大きいホールで待つこともできます。高速列車または高包ではチケットに待合室が記載されています(サンプル写真)。
  </p>
  <p align="center">
    <br/>
    <img border="0" width="543" height="206" src="howTo_clip_image006.jpg" alt="dddd.jpg"/><br/>
    <img border="0" width="500" height="166" src="howTo_clip_image007.jpg" alt="未标题-2.jpg"/>
  </p>
  <p align="left">
    <br/>
    また待合室を確認しておく必要があります。スクリーンでは順次、列車の待合室について表示しています。このような表示なっています。 <br/>"XXX train waiting section (xxx次列车在此候车) " (サンプル写真)
  </p>
  <p align="center">
    <br/>
    <img border="0" width="571" height="249" src="howTo_clip_image009.jpg"/>
  </p>
  <p align="left">
    <br/>
    もし場所がわからない時には、この紙を駅員やその他周りに人に見せ、教えてもらってください。
  </p>
  <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="712" valign="top">
      <br/>
      <strong>我搭乘这趟火车，请问我的候车室在哪里？</strong><strong></strong><br/>
        (この列車に乗りたいのですが待合室はどこですか？)
    </td>
  </tr>
  </table>
  <h3>④検札</h3>
  <p align="left">
    <strong>出発５～10分前に検札が終了します。それまでにはすべてのことを済ましておいてください。</strong>. 改札は待合室の出口にあり、ホームに直結しています。スクリーンに現在の状態が表示されます：『waiting (正在候车)』（まもなく開始）,『ticket checking (正在检票)』（検札中）,『ticket checking over (停止检票)』（終了） <br/>
    検札開始の混雑を避けるために<strong>青色のチケットでは自動ゲートが利用できます。赤色は駅員に検札されることが必要です。</strong>チケットの種類をご確認ください。<br/>
    また駅によっては待合室のないところもあります。その場合にはこの紙を駅員やその他周りに人に見せ、教えてもらってください。
  </p>
  <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="712" valign="top">
      <br/>
      <strong>我搭乘这趟列车，请问我在哪里候车？</strong><strong></strong><br/>
        （この列車に乗りたいのですが、どこで待っていればよいですか？）
    </td>
  </tr>
  </table>
  <h3>⑤ホームで </h3>
  <p align="left">
    階段を通り、ホームへ行きます。最近では新しく建設された駅や改装された駅で、大きな荷物の人や年配者のためにエスカレーターやエレベーターが設置されています。スクリーンには列車の番号によってどこの場所へ行くのかが表示されています。
  </p>
  <p align="center">
    <br/>
    <img border="0" width="567" height="274" src="howTo_clip_image011.jpg"/>
  </p>
  <p align="left">
    <br/>
    日本と違い、中国ではホームにはゲートがありません。小さいお子さんを連れている場合は気をつけてください。１つのホームで両脇に２本の列車が入ってきます。乗車の際にはチケットを確認してください。
  </p>
  <p align="center">
    <br/>
    <img border="0" width="560" height="247" src="howTo_clip_image013.jpg"/>
  </p>
  <p align="left">&nbsp;
    
  </p>
  <h3>⑥乗車する </h3>
  <p align="left">
    チケットに記載されている車両番号、座席番号を確認してください。見かたは下の写真で説明しています。
  </p>
  <p align="center">
    <br/>
    <img border="0" width="642" height="707" src="howTo_clip_image015.jpg"/>
  </p>
  <p align="left">
    <br/>
    もし大きい荷物を持って乗車する場合、荷物の置き場を確保してください。高速鉄道では荷物置き場（上下二段、２～４個収納できる）は列車の連結部近くにあります。この荷物置き場は予約できず早い者勝ちです。そのほか、座席下および上にも置くことができます。
貴重品は常に携帯もしくは身の回りで保管してください。
  </p>
  <p align="center">
    <br/>
    <img border="0" width="643" height="302" src="howTo_clip_image017.jpg"/>
  </p>
  <p align="left">
    座席が見つからない、他の席と換わりたいといった場合にはこのように尋ねてみましょう。
  </p>
  <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="712" valign="top">
      <br/>
        (1) 
      <strong>请问我的座位在哪里？</strong><strong></strong><br/>
        ( (チケットを提示しながら)この席はどこですか？)
    </td>
  </tr>
  <tr>
    <td width="712" valign="top">
      <p align="left">
        (2) 
        <strong>对不起，我和我的同伴座位不在一起，请问你是否愿意和我们换一下座位？</strong><br/>
        (すみません。私と連れが別々の席になってしまいました。こちらと交換していただけますか？)
      </p>
    </td>
  </tr>
  </table>
  <h2><a name="travel_tips" id="travel_tips"></a><a name="Part-3_Travel_tips" id="Part-3_Travel_tips"></a>&nbsp;</h2>
  <h2>&nbsp;</h2>
  <h2>3.豆知識</h2>
  <h3>①安全</h3>
  <p align="left">
    中国の列車旅行は安全です。しかし他の交通手段に比べ時間がかかります。
ここでは安全に列車旅行するための豆知識を挙げておきます。
    <br/>
  (1)貴重品は身の回りから離さず、そのまま置きっぱなしにしないようにしましょう。現金、クレジットカード、パスポートといった貴重品は常に携帯しましょう。車内では小銭や100元程度のお金しか使うことはないと思います。小銭だけを取り出しやすいようにし、あとはカバンにしまうと安全です。
    <br/>
    (2)子供連れの場合、子供から目を離さないようにしてください。ホームはもちろんのこと、トイレのドアや給湯器などにも気を付けてください。また駅には年長者向けの特別優待措置がありません。そのため人に揉まれなければならない場合もあります。高速列車を除きほとんどの場合、駅でたくさん歩いたりとかなりきついかもしれません。
    <br/>
    (3)足踏みの水飲み機はありません。飲み物を携帯するか、給水所で補給してください。給水所の水が子供には可能か否かは必ず確認してください。
    <br/>
    (4)旅慣れた方であれば日中の旅行に関しては問題ないと思います。車内で宿泊する場合には盗難に注意してください。スーツケースは必ず鍵をかけてください。寝るときはカバンやリュックサックの紐を腕などにくくりつけるか、体にくくりつけてください。そうすれば、何か異常があった際にすぐ気が付きます。現金やカード、パスポートといった貴重品類は上着の中、もしくはファスナーの閉まるところに入れてください。できることならば個室に鍵をかけましょう。
  </p>
  <h3>②.食堂車</h3>
  <p align="left">
    一等席、ビジネスクラス、ファーストクラスではミニマフィンやパン、お菓子といった軽食が無料です。また食堂車（たいてい５号車）で食事をしたり、車内販売でお弁当（できたてホカホカではなく、味もいまいちです）を購入することも可能です。列車の種類により多少異なります。一般的に注文を受けてから作ります。高速鉄道の食堂車では一皿30～50人民元くらいです。またお弁当は１つ15～45人民元です。普通車では注文を受けてから作るシステムはありません。たいていの場合、果物やカップヌードル、おせんべい、飲み物などを持って乗ります。多くの駅ではマクドナルドやケンタッキーが近くにあります。液体の食べ物や飲み物、ハンバーガーのソースが保安検査中にこぼれたりしないように注意してください。
  </p>
  <h3>③. トイレ</h3>
  <p align="left">
    一般的にトイレは普通車では和式、高速鉄道では洋式です。洗面所は全車両の端にあります。駅に到着する前と停車中の10分間ほど使用できません。駅に着く時がわからないときは休憩所に行くとよいでしょう。おそらくそこでも待つかもしれません。
    <br/>
    高速列車では使用済みのティッシュとゴミはごみ箱に捨ててください。普通車では流してしまって構いません。貴重品は常に携帯し、トイレに入った時にはドアを閉めた後ろにフックがありますのでそこにかけてトイレを利用してください。高速列車には使い捨てのシートカバーとティッシュがあります。洗面所には石鹸や手をふく紙もあります。もし替えがない場合は乗務員に申し出てください。これらのものは高速列車のみです。
    <br/>
    長距離列車の場合、和式トイレは本当にきたいないです。そのため赤ちゃんのおしりふきや消毒液、ティッシュなどは必須アイテムです。
    <br/>
    子供や年配者が使用する場合は見てあげてください。年配者のためにトイレの中には手すりがあります。またトイレのドアの留め金やフックにも注意してください。床はすべりやすいので段差に注意してください。
  </p>
  <h3>④降車準備</h3>
  <p align="left">
    降車の際は早めに準備したほうがよいでしょう。乗務員に降車する旨をあらかじめ伝えておくとよいです。その際はこの文を見せてください。
  </p>
  <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="712" valign="top">
      <br/>
      <strong>请在到站前</strong><strong>10</strong><strong>分钟提醒我准备下车，谢谢！</strong><strong></strong><br/>
      （降車の10分前になったらお声をかけていただけますか？）
    </td>
  </tr>
  </table>
  <p>
    チケットは出口でも必要かもしれませんので落として紛失しないよう注意してください。
  </p>
  <h3>⑤役立つフレーズ</h3>
  <p>
    中国語ができなくても大丈夫。この文章を書いた紙を見せて聞いてくだい！
    <br/>
    (1)  駅に行くとき
  </p>
  <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="712" valign="top">
      <br/>
      <strong> </strong><strong>请问去火车站的公车</strong><strong>/</strong><strong>地铁在哪里乘坐？</strong><strong></strong><br/>
      (駅に行くバス/地下鉄はどこで乗れますか？)
      <strong></strong>
    </td>
  </tr>
  <tr>
    <td width="712" valign="top">
      <p>
        <strong> </strong><strong>请带我去火车站，谢谢！</strong><br/>
        (駅までお願いします。)
      </p>
    </td>
  </tr>
  </table>
  <p>
    (2)駅で
  </p>
  <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="712" valign="top">
      <br/>
      <strong>请问去哪里退票？</strong><strong></strong><br/>
      (チケットの払い戻し窓口はどこですか？)
    </td>
  </tr>
  <tr>
    <td width="712" valign="top">
      <p>
        <strong>请问候车大厅在哪里？</strong><strong></strong><br/>
        (待合ロビーはどこですか？ )
      </p>
    </td>
  </tr>
  <tr>
    <td width="712" valign="top">
      <p>
        <strong>请问卫生间在哪里？</strong><strong></strong><br/>
        (お手洗いはどこですか？ )
      </p>
    </td>
  </tr>
  </table>
  <p>
    (3)列車で
  </p>
  <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="712" valign="top">
      <br/>
      <strong>请问餐车在哪里？</strong><strong></strong><br/>
     (食堂車はどこですか？ )
    </td>
  </tr>
  <tr>
    <td width="712" valign="top">
      <p>
         
        <strong>请问去哪里补票？</strong>(どこで乗車券が買えますか？)<br/>
    (乗り越し料金はどこで払えますか？ )
      </p>
    </td>
  </tr>
  <tr>
    <td width="712" valign="top">
      <p>
        <strong>请问有盒饭吗？多少钱？</strong><strong></strong><br/>
        (お弁当はありますか？おいくらですか？)
      </p>
    </td>
  </tr>
  <tr>
    <td width="712" valign="top">
      <p>
        <strong>请问有矿泉水吗？多少钱？</strong><strong></strong><br/>
        (ミネラルウォーターはありますか？おいくらですか？)
      </p>
    </td>
  </tr>
  </table>
  <p>
    (4)下車後
  </p>
  <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="657" valign="top">
      <strong>请问这是我的终点站吗？</strong>(チケットを提示して尋ねる)<br/>
       (ここがこの私の下車駅ですか？)<br/>
    </td>
  </tr>
  <tr>
    <td width="657" valign="top">
      <p>
        <strong>请问出站口在哪里？</strong><strong></strong><br/>
        (出口はどこですか？)
        <strong></strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="657" valign="top">
      <p>
        <strong>请问公车站怎么走？</strong><strong></strong><br/>
        (バスはどこから乗れますか？)
        <strong></strong><br/>
      </p>
    </td>
  </tr>
  <tr>
    <td width="657" valign="top">
      <p>
        <strong>请问地铁站怎么走？</strong><strong></strong><br/>
        (地下鉄の駅へはどう行ったらいいですか？)
      </p>
    </td>
  </tr>
  <tr>
    <td width="657" valign="top">
      <p>
        <strong>请问这附近有</strong><strong>ATM</strong><strong>取款机吗？</strong><br/>(この近くにATMはありますか？)
      </p>
    </td>
  </tr>
  </table>
</div>
</body>
</html>