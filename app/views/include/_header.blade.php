<header id="main-header" class="st_menu">
    <div class="header-top ">
        <div class="container">
            <div class="">
                <div class="float_left">
                    <a class="logo" href="#">
                        <img src="{{Asset('assets/img/ic_logo.png')}}" alt="logo" title="Viet Step Travel">
                    </a>
                </div>
                <div class="float_right social_site_list">
                    <div class="row">
                        <a href="https://www.youtube.com/" class="social_site">
                            <img src="{{Asset('assets/img/ic_youtube.png')}}">
                        </a>
                        <a href="https://plus.google.com" class="social_site">
                            <img src="{{Asset('assets/img/ic_google.png')}}">
                        </a>
                         <a href="https://www.facebook.com/buocdiviettravel" class="social_site">
                            <img src="{{Asset('assets/img/ic_fb.png')}}">
                        </a>

                        @if(!isset($data['user']))
                            <a href="#" class="social_site" data-toggle="modal" data-target="#modal_login">
                                <img src="{{Asset('assets/img/ic_login_red.png')}}">
                            </a>
                        @endif
                    </div>
                </div>
             </div> <!--/end row-->     
        </div> <!--/end container-->     
    </div> <!--/end header-top-->      
    
    <div id="menu1-sticky-wrapper" class="sticky-wrapper">
        <div class="main_menu_wrap" id="menu1">
            <div class="container">
                <div class="nav">
                    <ul id="slimmenu" class="menu slimmenu" >
                        <li id="mn_home" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/">TRANG CHỦ</a></li>
                         <li id="mn_about" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/about">GIỚI THIỆU</a></li>
                        <li id="mn_internal" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-submenu dropdown ">
                            <a href="#">
                                TOUR TRONG NƯỚC
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-content" style="left:0;">
                                <a href="/tour-type/mien-bac">Du Lịch Miền Bắc</a>
                                <a href="/tour-type/mien-trung">Du Lịch Miền Trung</a>
                                <a href="/tour-type/mien-nam">Du Lịch Miền Nam</a>
                                <a href="/tour-type/tet">Du Lịch Tết</a>

                            </div>
                            <span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        </li>

                         <li id="mn_external" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-submenu dropdown ">
                            <a href="#">
                                TOUR NGOÀI NƯỚC
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-content" style="left:0;">
                                <a href="/tour-type/chau-a">Du Lịch Châu Á</a>
                                <a href="/tour-type/chau-au">Du Lịch Châu Âu</a>
                                <a href="/tour-type/chau-my">Du Lịch Châu Mỹ</a>
                                <a href="/tour-type/chau-uc">Du Lịch Châu Úc</a>
                            </div>
                            <span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        </li>
                        <li id="mn_team_building" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tour-type/9">TEAM BUILDING</a></li>
                        <li id="mn_contact" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/contact">LIÊN HỆ</a></li>
                    </ul>

                </div><!--/end nav-->
            </div><!--/end container-->
        </div>
    </div><!--/end menu1-sticky-wrapper-->
</header>

<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
            </div>
            {{ Form::open(array('url' => 'login')) }}
                <div class="modal-body">

                    <p>
                        {{ $errors->first('email') }}
                        {{ $errors->first('password') }}
                    </p>
                    <div class="row">
                        <div class="col-xs-4">
                            {{ Form::label('email', 'Email Address') }}
                        </div>
                        <div class="col-xs-8 form-group">
                            {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">
                            {{ Form::label('password', 'Password') }}
                        </div>
                        <div class="col-xs-8 form-group">
                            {{ Form::password('password',array( 'class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>