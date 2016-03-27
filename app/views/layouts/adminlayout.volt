<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php echo $this->tag->getTitle(); ?>
    {{ stylesheet_link('filesadmin/bootstrap.min.css')}}
    {{ stylesheet_link('filesadmin/metisMenu.min.css')}}
    {{ stylesheet_link('filesadmin/sb-admin-2.css')}}
    {{ stylesheet_link('filesadmin/font-awesome.min.css')}}
    {{ stylesheet_link('filesadmin/bootstrap-datetimepicker.css')}}
    {{ javascript_include('filesadmin/jquery.min.js')}}
    {{ javascript_include('js/plugin/ckeditor/ckeditor.js')}}

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url() }}dashboard/">Caribe</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    {% if session.get('loginok') %}
                    Xin Chào :  {{ user.User_Username }}
                    {% endif %}
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url() }}admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    <!--Duyệt Menu Theo Quyền-->
                        {% for mn in menu %}
                             <li>
                                <a href="{{ url() }}{{ mn['link'] }}"><i class="fa fa-cog"></i> {{ mn['name'] }}</a>
                             </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản Lý :</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {% block hihi %}
                    
                    {% endblock %}
                </div>
            </div>
        </div>
    </div>
    
    {{ javascript_include('filesadmin/bootstrap.min.js')}}
    {{ javascript_include('filesadmin/metisMenu.min.js')}}
    {{ javascript_include('filesadmin/moment-with-locales.js')}}
    {{ javascript_include('filesadmin/bootstrap-datetimepicker.js')}}
    {{ javascript_include('filesadmin/sb-admin-2.js')}}
    

</body>
</html>
