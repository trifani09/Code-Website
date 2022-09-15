<?php require_once('header.php')?>

<style>

    body {
        overflow: hidden;
    }
    .header {
        display: none;
    }

    .footer {
        display: none;
    }

    .login-page {
        width: 100%;
        min-height: 100vh;
    }

    .login-page .table {
        background-color:#E199A5;
        min-height: 100vh;
    }

    .border-login-register {
        display: block;
        margin: auto;
        height: 500px;
        background-color: #fff;
        width: 900px;
        box-shadow: 4px 8px 31px -7px rgba(0,0,0,0.64);
        -webkit-box-shadow: 4px 8px 31px -7px rgba(0,0,0,0.64);
        -moz-box-shadow: 4px 8px 31px -7px rgba(0,0,0,0.64);
    }

    .pink {
        background-color:#E199A5;
        border:transparent;
        width: 150px;
        border-radius: 0;
        letter-spacing: 1px;
        font-weight: 600;
    }

    .image-banner{
        height:500px;
    }

    @media(max-width:800px) {
        .border-login-register {
            display: block;
            margin: auto;
            height: 350px;
            background-color: #fff;
            width: 100%;
            border-radius: 5px;
        }

        .image-banner{
            height: 120px;
        }

        .border-login-register {
            display: block;
            margin: auto;
            height: auto;
            background-color: #fff;
            width: 100%;
            box-shadow: 4px 8px 31px -7px rgba(0,0,0,0.64);
            -webkit-box-shadow: 4px 8px 31px -7px rgba(0,0,0,0.64);
            -moz-box-shadow: 4px 8px 31px -7px rgba(0,0,0,0.64);
        }

    }
</style>

<div class="login-page" >
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="border-login-register">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image-banner" style="background-image: url('assets/login.jpg'); background-position:center; background-size:cover; ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-login" style="padding: 30px; margin-top:50px">
                                        <h2 class="mb-4"><b style="color: #E199A5;">Login</b> Page</h2>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Username</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Password</label>
                                                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                                            </div>
                                        </form>
                                        <button type="button" class="btn btn-primary mt-3 pink">Login</button>
                                        <p class="mt-4" style="font-size: 13px; letter-spacing:1px">you don't have a account? <a href="register.php">create new account</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php')?>