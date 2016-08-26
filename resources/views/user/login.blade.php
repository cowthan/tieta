<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>铁塔--账号</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="Ashok">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{ URL::asset('/') }}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="{{ URL::asset('/') }}/assets//font-awesome/font-awesome.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="{{ URL::asset('/') }}/assets/app/css/style.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
		
		<style>
			#title{
				width:100%;
				height: 100px;
				background-color: #369;
				color: white;
				text-align: center;
				line-height: 100px;
			}
		</style>
	</head>
	
	<body>
		
		<!-- Combined Form starts -->
		<h1 id="title">铁塔发电统计平台--账号管理</h1>
		<div class="combined-form">
			<div class="cb-inner">
				<!-- Combined Form Content -->
				<div class="combined-form-content">
					<ul class="nav nav-tabs nav-justified">
						  <li class="active link-one"><a href="#login-block" data-toggle="tab"><i class="fa fa-sign-in"></i>登录</a></li>
						  <li class="link-two"><a href="#register-block" data-toggle="tab"><i class="fa fa-pencil"></i>注册</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active fade in" id="login-block">
							<!-- Login Block Form -->
							<div class="login-block-form">
								<!-- Heading -->
								<h4>登录</h4>
								<!-- Border -->
								<div class="bor bg-green"></div>
								<!-- Form -->
								<form class="form">
									<!-- Form Group -->
									<div class="form-group">
										<!-- Label -->
										<label class="control-label">账号</label>
										<!-- Input -->
										<input type="text" name="username" id="in_username" class="form-control" placeholder="Enter Username">
									</div>
									<div class="form-group">
										<label class="control-label">密码</label>
										 <input type="password" name="password" id="in_password" class="form-control" placeholder="Enter Password">
									</div>
									<div class="form-group">
										<div class="checkbox">
											<label>
												<input type="checkbox"> 记住我
											</label>
										</div>
									</div>
									<div class="form-group">
										<!-- Button -->
										<button type="submit" id="btnSignIn" class="btn btn-red">登录</button>&nbsp;
										<!-- <button type="submit" class="btn btn-lblue">重置</button> -->
									</div>
									<div class="form-group">
										<!-- <a href="#" class="black">Forget Password ?</a> -->
									</div>
								</form>
							</div>
						</div>
						<div class="tab-pane fade" id="register-block">
							<div class="register-block-form">
								<!-- Heading -->
								<h4>注册</h4>
								<!-- Border -->
								<div class="bor bg-lblue"></div>
								<!-- Form -->
								<form class="form">
									<!-- Form Group -->
									<div class="form-group">
										<!-- Label -->
										<label class="control-label">账号</label>
										<!-- Input -->
										<input type="text" name="username" id="username" class="form-control"  placeholder="手机号">
									</div>
									<div class="form-group">
										<label class="control-label">姓名</label>
										<input type="text" name="realname" id="realname" class="form-control" placeholder="姓名">
									</div>
									<div class="form-group">
										<label class="control-label">密码</label>
										<input type="password" name="password" id="password" class="form-control" placeholder="密码">
									</div>

									<div class="form-group">
										<label class="control-label">所属公司</label>
										<input type="password" name="company" id="company" class="form-control" placeholder="所属公司">
									</div>

									{{--<div class="form-group">
										<label class="control-label">所属公司</label>
										<select class="form-control" id="country">
											<option>Select Your Country</option>
											<option>India</option>
											<option>USA</option>
											<option>London</option>
											<option>Canada</option>
										</select>
									</div>--}}
									{{--<div class="form-group">
										<!-- Checkbox -->
										<div class="checkbox">
											<label>
												<input type="checkbox"> 同意条款
											</label>
										</div>
									</div>--}}
									<div class="form-group">
										<!-- Buton -->
										<button type="submit" id="btnSignUp" class="btn btn-red">注册</button>&nbsp;
										<!-- <button type="submit" class="btn btn-lblue">重置</button> -->
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<footer class="text-center">
			Copyright &copy; - <a href="#">Your Site</a>
		</footer>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="{{ URL::asset('/') }}/assets/jquery/jquery.js"></script>
		<script src="{{ URL::asset('/') }}/assets/jquery/html5shiv.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ URL::asset('/') }}/assets/bootstrap/js/bootstrap.min.js"></script>
	    <script src="{{ URL::asset('/') }}/assets/layer/layer.js"></script>
	    <script src="{{ URL::asset('/') }}/assets/layer/extend/layer.ext.js"></script>
		
		<script>
		

/* 
* 用来遍历指定对象所有的属性名称和值 
* obj 需要遍历的对象 
* author: Jet Mah 
*/ 
function allPrpos ( obj ) { 
// 用来保存所有的属性名称和值 
var props = "" ; 
// 开始遍历 
for ( var p in obj ){ 
// 方法 
if ( typeof ( obj [ p ]) == " function " ){ 
obj [ p ]() ; 
} else { 
// p 为属性名称，obj[p]为对应属性的值 
props += p + " = " + obj [ p ] + " \t " ; 
} 
} 
// 最后显示所有的属性 
alert ( props ) ; 
} 

			var signup_username = null;
			var signup_password = null;
			var signup_realname = null;
			var signup_company = null;

			var signin_username = null;
			var signin_password = null;

			$(document).ready(function(){

				signup_username = $("#username");
				signup_password = $("#password");
				signup_realname = $("#realname");
				signup_company = $("#company");

				signin_username = $("#in_username");
				signin_password = $("#in_password");

				$("#btnSignIn").click(function(){
					$.get('login', {
						"username": signin_username.val(),
						"password" : signin_password.val()
					 }, function(data, status) {
						 var res = data; //JSON.parse(data);
						 if(status === "success"){
							 if(res.code == '0'){
								 layer.msg("成功了！");
								// layer.msg(allPrpos(res.result));
								 window.location.href="listTask.html?sid=" + res.result.sid;
							 }else{
								 layer.msg("登录失败：" + res.msg);
								 //fillPhotos(res.result);
							 }
						 }else{
							 layer.alert("失败--" + res.msg);
						 }
					 });

					return false;
				});

				$("#btnSignUp").click(function(){
					$.get('regist', {
						"username": signup_username.val(),
						"password" : signup_password.val(),
						"realname" : signup_realname.val(),
						"company" : signup_company.val()
					 }, function(data, status) {
						//allPrpos(data);
						var res = data; //JSON.parse(data);
						if(status === "success"){

							if(res.code == '0'){
								layer.msg("成功了！");
								window.location.href="login.html";
							}else{
								layer.msg("注册失败：" + res.msg);
								//fillPhotos(res.result);
							}

							 
						 }else{
							 layer.alert("注册失败--" + res.message);
						 }
					 });
					return false;
				});
			});
		
		</script>
		
		
		<!-- Custom JS -->
		
	</body>	
</html>