<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/">ikoo</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-center">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">検索<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                    
                        <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">季節</a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">春</a></li>
                                  <li><a href="#">夏</a></li>
                                  <li><a href="#">秋</a></li>
                                  <li><a href="#">冬</a></li>
                                </ul>
                        </li>
                          
                        
                        <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">自然</a>
                            <ul class="dropdown-menu">
                                  <li><a href="#">山</a></li>
                                  <li><a href="#">海</a></li>
                                  <li><a href="#">川</a></li>
                                  <li><a href="#">森</a></li>
                            </ul>
                        </li>
                    </ul>

                    @if(!Auth::check())
                        <li><a href="{{ route('signup.get') }}">新規登録</a></li>
                        <li><a href="{{ route('login.post') }}">ログイン</a></li>
                    @else 
                            <!--<ul class="dropdown-menu">-->
                                <li>
                                    <a href="#">マイページ</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout.get') }}">ログアウト</a>
                                </li>
                            <!--</ul>-->
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

                      
                   
                       
                        <!--<ul class="nav navbar-nav navbar-right">-->
                        <!--<li class="dropdown">-->
                        <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
                        <!--        <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>-->
                        <!--        検索-->
                        <!--        <span class="caret"></span>-->
                        <!--    </a>-->
                            
                             
                        <!--    <ul class="dropdown-menu">-->
                        <!--        <li class="dropdown">-->
                        <!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">季節</a>-->
                                
                        <!--            <ul class="dropdown-menu">-->
                        <!--                <li><a href="#">春</a></li>-->
                        <!--                <li><a href="#">夏</a></li>-->
                        <!--                <li><a href="#">秋</a></li>-->
                        <!--                <li><a href="#">冬</a></li>-->
                        <!--            </ul>-->
                        <!--        </li>-->
                        <!--        <li class="dropdown">自然</li>-->
                        <!--            <ul class="dropdown-menu">-->
                        <!--                <li><a href="#">春</a></li>-->
                        <!--                <li><a href="#">夏</a></li>-->
                        <!--                <li><a href="#">秋</a></li>-->
                        <!--                <li><a href="#">冬</a></li>-->
                        <!--            </ul>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        
                   
                <!--        <li class="dropdown">-->
                <!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
                                
                               
                <!--                <span class="caret"></span>-->
                <!--            </a>-->

                        <!--</li>-->