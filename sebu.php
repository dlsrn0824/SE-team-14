<html>

<head>
    <link href="sebu.css" rel="stylesheet" type="text/css" />
    
    <title>TEAM NO.14의 게임 쇼핑몰</title>
    <meta name="description" content="TEAM NO.14의 게임 쇼핑몰" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a5f3739fb3.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://d1p7wdleee1q2z.cloudfront.net/post/search.min.js"></script>
</head>

<body>
    
    <header>
        <ul class="top">
            <li><a href="Log_in.html">로그인</a></li>
            <li><a href="log-in">회원가입</a></li>
            <li><a href="log-in">마이페이지</a></li>
            <li><a href="log-in">장바구니</a></li>
        </ul>
    
        <div class="logo_search">
            <div class="logo">
                <a href="index.html"><i class="fas fa-dice-d6 fa-2x"></i></a>
            </div>
            
            <form action="#" accept-charset="utf-8" id="search" name="search" method="post">
                <input type="text" name="need_search">
                
                <button type="submit" form="search"><i class="fas fa-search fa-2x"></i></button>
            </form>
    
        </div>
    
        <div class="category">
            <ul>
                <a href="1"><li>예약상품</li></a>
                <a href="2"><li>PlayStation5</li></a>
                <a href="3"><li>PlayStation4</li></a>
                <a href="4"><li>PlayStationVR</li></a>
                <a href="5"><li>PlayStation3</li></a>
                <a href="6"><li>닌텐도Switch</li></a>
                <a href="7"><li>닌텐도3DS</li></a>
                <a href="8"><li>할인상품</li></a>
                <a href="9"><li>기타상품</li></a>
            </ul>
        </div>
    </header>

    <div>
        <div class="prod">
            <div class="product">
                <div id="cate">
                    category
                </div>
                <div id="pro_image">
                    <img src="">
                </div>
            </div>
            
            <div class="product">
                <div id="name">
                    name
                </div>
                
                <div id="price">
                    price
                </div>
                
                <div id="address">
                    address
                </div>

                <form action="" method="POST">
                    @csrf
                    <div id="keep">
                        <div id="amount">
                            <input name="amount" id="num" type="text" value="1" readonly="readonly" style="text-align:center;"/>
                            <ul>
                                <li>
                                    <button class="num_button" type="button" onclick="fnCalCount('p',this);">+</button>
                                </li>
                                <li>
                                    <button class="num_button" type="button" onclick="fnCalCount('m', this);">-</button>
                                </li>
                            </ul>
                        </div>
                        <div id="cart">
                            <button class="cart_button">장바구니 담기</button>
                        </div>
                        <div id="buy">
                            <button class="buy_button" formaction="">바로 구매</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="info">
            <div class="information">
                information
            </div>
        </div>
    </div>

    <footer class="others">
        <ul>
            <li>1111</li>
            <li>2222</li>
            <li>3333</li>
            <li>4444</li>
        </ul>

        <ul>
            <li>111</li>
            <li>222</li>
            <li>333</li>
            <li>444</li>
        </ul>

        <ul>
            <li>11</li>
            <li>22</li>
            <li>33</li>
            <li>44</li>
        </ul>

        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
        </ul>

    </footer>
</body>
<script src="sebu.js"></script>
</html>