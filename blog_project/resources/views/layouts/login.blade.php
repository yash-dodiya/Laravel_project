<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">


    <style>
          html,body { 
	height: 100%; 
          }

          .global-container{
                    height:100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #f5f5f5;
          }

          form{
                    padding-top: 15px;
                    font-size: 20px;
                    margin-top: 35px;
          }

          .card-title{ font-weight:300; }

          .btn{
                    font-size: 14px;
                    margin-top:20px;
          }


          .login-form{ 
                    width:330px;
                    margin:20px;
          }

          .sign-up{
                    text-align:center;
                    padding:20px 0 0;
          }

          .alert{
                    margin-bottom:-30px;
                    font-size: 13px;
                    margin-top:20px;
          }
    </style>

</head>
<body>
     <div class="global-container">
       <div class="card login-form">
          <div class="card-body">
            <h3 class="card-title text-center">Login page</h3>
               <div class="card-text">
                              <!--
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
          <form name="rform" id="rform"  method="POST" >
                    {{-- onsubmit="event.preventDefault()" --}}
                    
                              <!-- to error: add class "has-danger" -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                    <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                              </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    
                    <div class="sign-up">
                              Don't have an account? <a href="/regis">Not registered?Create an Account</a>
                              </div>
          </form>
                </div>
              </div>
             </div>
          </div>



</body>
</html>