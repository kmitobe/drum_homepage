<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @component('components.head')
        @endcomponent
    </head>
    <body>
        <div id="navber">
        @component('components.navber')
        @endcomponent
        </div>
        <div id="header" class="header-image">
            <img src="{{ asset('images/header.jpg') }}" class="header-image">
        </div>
        <!-- コンテンツ -->
        <div class="container">
            <div id="profile">
                <h1>Profile</h1>
                <div class="row row-cols-2">
                    <div class="col">
                        <img src="images/yadon.png" class="profile-image" alt="プロフィール画像">
                    </div>
                    <div class="col">
                        <div class="profile-detail">
                            <p>名前:KOU</p>
                            <p>職業:旦那　&　エンジニア</p>
                            <p>趣味:空手、映画、妻に作る料理、ゲーム</p>
                            <p>独学３ヶ月で業界に入り、何とかかんとか生きている</p>
                            <p>趣味の為に生きていて、自分が楽しいと感じる物には超がつくほど素直</p>
                            <p>リングフィットアドベンチャーで毎日フィットネス中</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about">
                <h1>About</h1>
                <div class="row row-cols">
                    <div class="col">
                        <div class="biography-text">
                            <h2>Biography</h2>
                            <p>東京都は中野区育ち</p>
                            <p>大学卒業後、アルバイトでTSUTAYAに入り数年で、その後契約社員に</P>
                            <p>社員になってすぐに精神を病んでK.O、</p>
                            <p>そして転職、お酒の配達業でバンを運転、配達中に瓶を割るわ、遅れるわ、挙げ句の果てには塀に車をぶつけるw</p>
                            <p>それでもどっこい約３年。</p>
                            <p>独学で約３ヶ月HTML、CSS、JavaScript、Ruby、PHPを学習し、エンジニアの世界に入る。</p>
                        </div>
                        <div class="favorite-text">
                            <h2>favorite</h2>
                            <p>とにかく映画が大の好物！</p>
                            <p>大学を卒業するまでは、周りがあまりに自分の映画好きについて来れない為（温度感の違い）</p>
                            <p>映画好きを隠していた、そしてTSUTAYAに入った時一生の友たちと出会い映画好きを公表し始める。</p>
                            <p>一番はアクション、漢のリトマス紙ことシルベスタ・スタローンの大大大ファン！！！</p>
                            <p>主に８０年〜９０年代の映画を主食とし、仲間内からは「暑苦しい」と言われる。</p>
                            <p>世界のどこかにエクスペンダブルズランドが建設されるのを心待ちにしている３０歳</p>
                            <p>ジョーズや、ダイハード、コマンドー、ロッキーなどの映画は小学校までの義務教育の範囲だと思っているwww</p>
                            <p>時間が許せば、1日中映画館に入り浸るほどで、1日五本以上見ることもしばしば（映画館五本、家帰って二本とか）</p>
                        </div>
                    </div>
                </div>

            </div>
            <div id="content">
                <h1>Contents</h1>
                <div class="row row-cols-3">
                    <div class="col-md-4">
                        <a href="#" class="content-image"><h2>コンテンツ１</h2><img src="images/content.png"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="content-image"><h2>コンテンツ２</h2><img src="images/content.png"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="content-image"><h2>コンテンツ２</h2><img src="images/content.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
        @component('components.footer')
        @endcomponent
        </div>
        
        @component('components.script')
        @endcomponent
    </body>
</html>
