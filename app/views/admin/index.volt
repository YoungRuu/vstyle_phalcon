
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	{{ stylesheet_link('filesadmin/login-form/css/normalize.css')}}
  {{ stylesheet_link('css/bootstrap.css')}}
  {{ stylesheet_link('filesadmin/login-form/css/style.css')}}
</head>
<body class="overflow-page">
    <div class="form">
        <div id="signup">   
          <h1>Login</h1>
        <form action="{{ url() }}admin/index" method="post">
          <p>{{ flash.output() }}</p>
            <div class="field-wrap">
            <input type="text" name="User_Username" placeholder="Username" />
          </div>
          
          <div class="field-wrap">
            <input type="password" name="User_Password" placeholder="Password" />
          </div>
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          <button class="button button-block"/>Login</button>
          </form>

        </div>
      
</div> <!-- /form -->
   {{ javascript_include('js/jquery.min.js')}}
   {{ javascript_include('js/bootstrap.min.js')}}
</body>
</html>