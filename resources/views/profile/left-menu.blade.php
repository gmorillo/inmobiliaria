<div class="user-profile-box" id="menuLeft" >

    <div class="header clearfix">
        <h2>Bienvenido, </h2>
        <h4>{%$profileleftmenu.datos.name%}</h4>
        <img src="https://sg.fiverrcdn.com/photos/71305301/original/2fc2a768e8c6a5aad70c09b9865c6df8eb9e07bc.png?1482539327" alt="avatar" class="img-fluid profile-img">
    </div>
    <div class="detail clearfix">
        <!-- se llama al alias del controlador en el ng-click -->
        <div class="list-group" id="list-tab" role="tablist">
            <a 
                class="list-group-item list-group-item-action  MenuLeft" 
                id="dashboard-list" 
                data-toggle="list" 
                role="tab" 
                aria-controls="home"
                ng-click="$profileleftmenu.menuClick($event) ">
                <i class="fas fa-chart-pie"></i>&nbsp;&nbsp;
                Principal
            </a>
            <a 
                class="list-group-item list-group-item-action MenuLeft" 
                id="list-profile-list" 
                data-toggle="list"
                role="tab" 
                aria-controls="profile" 
                ng-click="$profileleftmenu.menuClick($event)">
                <i class="far fa-user"></i>&nbsp;&nbsp;
                Mi cuenta
            </a>
            <a 
                class="list-group-item list-group-item-action MenuLeft" 
                id="list-messages-list" 
                data-toggle="list" 
                role="tab" 
                aria-controls="messages"
                ng-click="$profileleftmenu.menuClick($event)"><i class="fas fa-plus"></i>&nbsp;&nbsp;
                Agregar una propiedad
            </a>
            <a 
                class="list-group-item list-group-item-action MenuLeft" 
                id="list-settings-list" 
                data-toggle="list" 
                role="tab" 
                aria-controls="settings"
                ng-click="$profileleftmenu.menuClick($event)"><i class="fas fa-home"></i>&nbsp;&nbsp;
                Mis propiedades
            </a>
            <a 
                class="list-group-item list-group-item-action MenuLeft" 
                id="password-change" 
                target="_blank"
                ng-click="$profileleftmenu.menuClick($event)"><i class="fas fa-key"></i>&nbsp;&nbsp;
                Cambiar contraseña
            </a>
        </div>
    </div>
</div>
@section('stylesheet')
    <style>
        .user-profile-box {
            background: #fff;
            box-shadow: 0 0 20px rgba(38,38,38,.2);
            margin: 0 auto 50px;
        }
        .user-profile-box .header {
            padding: 30px 20px 120px;
            text-align: center;
            position: relative;
            background-repeat: no-repeat;
            border: none;
            margin: 0;
            background:linear-gradient( to bottom, rgba(0, 42, 104, 0.69), rgba(2, 146, 252, 0.51) ), url(http://tartanhomes.com/wp-content/uploads/2015/03/980x480_homes_Newburgh_A-480x260.jpg) top left repeat;
            background-size: cover;
            color: #fff;
        }
        .user-profile-box .header h2 {
            margin: 0 0 8px;
            color: #fff;
            font-size: 24px;
        }
        .user-profile-box .header h4 {
            font-size: 16px;
            color: #fff;
            font-weight: 400;
        }
        .user-profile-box .profile-img {
            border-radius: 50%;
            background-clip: padding-box;
            border: 5px solid #fff;
            bottom: -75px;
            float: left;
            height: 160px;
            width: 160px;
            left: 50%;
            margin-left: -75px;
            position: absolute;
            box-shadow: 0 0 0 0 rgba(0,0,0,.1), 0 3px 3px 0 rgba(0,0,0,.1);
            object-fit: cover;
        }
        .user-profile-box .detail {
            padding-top: 100px;
        }
        ul, ol {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }
        ul li, ol li {
            list-style: none;
        }
        .user-profile-box .detail ul li .active, .user-profile-box .detail ul li a:hover {
            color: #3490DD;
        }
        .user-profile-box .detail ul li .active {
            background: #fafafa;
            color: #3490DD;
            font-weight: 500;
        }
        .user-profile-box .detail ul li a:hover {
            background: #fafafa;
            color: #3490DD;
        }
        .user-profile-box .detail ul li a {
            color: #727272;
            border-bottom: 1px solid #f5f5f5;
            padding: 12px 20px;
            display: block;
            font-size: 14px;
            font-weight: 500;
        }
        .user-profile-box .detail ul li a i {
            margin-right: 10px;
        }
        .lni-files:before {
            content: "\e972";
        }
        a:hover {
            text-decoration: none;
            cursor: pointer;
        }
        .list-group-item.active {
            z-index: 2;
            color: #3490dc;
            background-color: #fafafa;
            border-color: transparent;
            box-shadow: 0 0 15px transparent;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            margin-bottom: 0px;
            background-color: #fff;
            border-bottom: 0.5px solid rgba(0, 0, 0, 0.125) !important;
            border: none;
        }

        #page-wrap { 
          width: auto; 
          margin: 15px auto; 
          position: relative; 
        }

        #sidebar { 
          width: auto; 
          position: fixed; 
          margin-left: 410px; 
        }
    </style>
@endsection
