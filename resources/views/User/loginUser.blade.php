<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button:hover{
    background-color: #929fa2;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: black;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
    border-radius: 6px;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
    margin-top: 7%;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.image {
    position: absolute;
    top: 6%;
    right: 9%;
    width: 35%;
}
.forgot{
    margin-left: 85px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.regis{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
a.button{
    border-radius: 20px;
    border: 1px solid #bed7dc;
    background-color: #bed7dc;
    color: black;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    margin-top: 8%;
}
    </style>
    <title>Perpustakaan</title>
  </head>
  <body>
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Login</h1>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<div class="register-forget opacity">
                <a href="{{ route('register') }}" class="regis">Register </a>
                <a href="{{ route('lupa') }}" class="forgot">Forgot Password? </a>
            </div>
            <a href="{{ route('dashboard') }}" class="button" >Login</a>
		</form>
	</div>
    <div class="overlay-panel overlay-right">
        <img class="image" src="{{ asset('images/user.png') }}">
    </div>
</div>
  </body>
</html>
