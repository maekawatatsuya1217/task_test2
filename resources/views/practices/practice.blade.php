<!DOCTYPE html>

<html>
    <head>
        <meta charset=”UTF-8″>
        <link rel="stylesheet" type="text/css" href="/css/practice.css">
        <title>practice.blade.php</title>
    </head>
    <body>
        <!-- ヘッダー -->
        <header class="p_header">
            <div class="p_header_inner">
                <div class="p_header_logo">
                    <a href="#">logo</a>
                </div>
                <nav>
                    <ul class="p_nav">
                        <li><a href="#">nav1</a></li>
                        <li><a href="#">nav2</a></li>
                        <li><a href="#">nav3</a></li>
                        <li><a href="#">nav4</a></li>
                        <li><a href="#">nav5</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- ヘッダー -->

        <!-- メイン -->
        <main>
            <div class="p_main_inner">
                <form method="#" action="#">
                    <!-- 氏名 -->
                    <input type="text" name="your_name" placeholder="氏名" class="field"><br>
                    <!-- メールアドレス -->
                    <input type="email" name="email" placeholder="メールアドレス" class="field"><br>
                    <!-- 年齢 -->
                    <div>
                        <select name="age" class="field">
                            <option value="">年齢を選択してください</option>
                            <option value="1">〜19歳</option>
                            <option value="2">20歳〜29歳</option>
                            <option value="3">30歳〜39歳</option>
                            <option value="4">40歳〜49歳</option>
                            <option value="5">50歳〜59歳</option>
                            <option value="6">60歳〜</option>
                        </select> 
                    </div>
                    <!-- お問い合わせ内容 -->
                    <div>
                        <textarea name="contact" placeholder="お問い合わせ内容" class="t_field"></textarea>
                    </div>

                    <!-- 送信ボタン -->
                    <input type="submit" name="submit_btn" value="送信" class="s_field">
                </form>
            </div>
        </main>
        <!-- メイン -->

        <!-- フッター -->
        <footer class="p_footer">
            <div class="p_footer_inner">
                <p>Copyright © 2022 TatsuyaMaekawa All Rights Reserved.</p>
            </div>
        </footer>
        <!-- フッター -->

    </body>
</html>