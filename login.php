<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <fieldset style="">
                <legend>Log In</legend>
                <form autocomplete="off" 
                method="post" action="login_action.php" onsubmit=" return confirm('Are you sure to login?'); ">
                    <p>User Id</p>
                    <input type="text" id="stuId" name="user_id" required/>

                    <p>Password</p>
                    <input type="password" id="pass" name="pass" required/>
                    <br/>
                    <br/>
                    <input type="submit" value="Log In"/>
                </form>
            </fieldset>

        </div>
    </div>
</div>
</body>
</html>
<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->
