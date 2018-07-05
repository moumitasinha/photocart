<html>
    <head>
        <title>login_form</title>
        <link rel="stylesheet" href = "css/bootstrap.css"/>
    </head>
    <body>
    <div class = "container-fluid  " >
        <div class = " text-center border border-primary p-3 mb-2 bg-light text-dark">
            <form method="post" action="login_submit.php" >
                <fieldset>
                    <legend><h1 class = "font-weight-bold"> LOGIN FORM </h1></legend>
                    <label style = "color: #383d41e6" > EMAIL : </label>
                    <input type="text" placeholder="Enter Email" name="email" required/>
                    <hr/>
                    <label style = "color: #383d41e6" >PASSWORD : </label>
                    <input type="password" placeholder="Enter Password" name="password" required/>
                    <hr/>
                    <div>
                    <button class="btn btn-lg btn-primary button-block" type="submit" name="submit" >submit</button>
                </fieldset>
            </form>
            <form action="/photocart/register_form.php" >
                <button class="btn btn-secondary" type="submit" > NOT REGISTERED?    SIGN UP </button> 
            </form>
        </div> 
    </div>    
    </body>
</html>
