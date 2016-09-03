<HTML>
	<HEADER>
		<TITLE> SIGAVM </TITLE>

		<meta charset="UTF-8">
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="/bootstrap/css/style.css" rel="stylesheet" media="screen">
	</HEADER>

<body>
	<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="/bootstrap/img/avatar.jpg" />
            <p id="profile-name" class="profile-name-card"></p>


            <form class="form-signin" method="post" action='/auth/login'>

                {!! csrf_field() !!}


                <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Senha" id="paswword" required>
               <!--<div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> I'm Awesome, Remember Me!
                    </label>
                </div> -->
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Logar</button>
            </form><!-- /form -->



            <!--<a href="#" class="forgot-password">
                Forgot your password?
            </a> -->
        </div><!-- /card-container -->
    </div><!-- /container -->  

    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/main.js"></script>
	<script src="bootstrap/js/loginjs.js"></script>
</body> 
</body>
</HTML>