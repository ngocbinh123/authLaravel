<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">MOBILE SHOP</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    @foreach ($data['pList'] as $subMenu)
                        <li id="{{$subMenu->name}}" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$subMenu->name}}<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                @foreach($data['pType'] as $item)
                                    @if ($subMenu->id==$item->list_id)
                                        <li id="{{$item->name}}">
                                            <a href="{{Asset($item->name)}}">{{$item->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{Asset('login')}}">Login</a>
                    </li>
                    <li>
                        <a href="{{Asset('logout')}}">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
<!-- /.container -->