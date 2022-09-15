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

    .reigster-page {
        width: 100%;
        min-height: 100vh;
    }

    .reigster-page .table {
        background-color:#E199A5;
        min-height: 100vh;
    }

    .border-login-register {
        display: block;
        margin: auto;
        height: 670px;
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
        height: 670px;
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

        body {
            overflow: scroll;
        }
    }
</style>

<div class="reigster-page" >
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="border-login-register">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image-banner" style="background-image: url('assets/regist.jpg'); background-position:center; background-size:cover; ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-login" style="padding: 30px; margin-top:30px">
                                        <h2 class="mb-4"><b style="color: #E199A5;">Register</b> Page</h2>
                                        <form>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">First Name</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Last Name</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                                                    </div>                                                
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Username</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username">
                                            </div>    
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Email</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Password</label>
                                                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Confirm Password</label>
                                                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                                            </div>
                                        </form>
                                        <button type="button" class="btn btn-primary mt-3 pink">Login</button>
                                        <p class="mt-4" style="font-size: 13px; letter-spacing:1px">Have a account? <a href="login.php">please login!</a></p>
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