<! DOCTYPE HTML>
<html>
    <head>
        <title>REGISTER FORM</title>
        <link rel="stylesheet" href = "css/bootstrap.css"/>
    </head>
    
    <body>
        <div class = "container-fluid" style="background-image: url('img/milkyway.jpg') " >
            <div class = " text-center">
                <div class="thumbnail">
                    <fieldset>
                        <legend><h1 class = "font-weight-bold" style = "color: #dee2e6"> REGISTRATION FORM </h1></legend>
                        <form method = "post" action = "register_submit.php">
                            <label style = "color: #dee2e6" > EMAIL : </label>
                            <input type = "text" placeholder = email name = "email"/>
                            <hr/>
                            <label style = "color: #dee2e6" >PASSWORD : </label>
                            <input type ="password" placeholder = password name = "password"/>
                            <hr/>
                            <label style = "color: #dee2e6" >NAME : </label>     
                            <input type = "text" placeholder = name name = "name"/>
                            <hr/>
                            <label style = "color: #dee2e6" >ADDRESS : </label> 
                            <input type = "text" placeholder = address name = "address"/>
                            <hr/>
                            <label style = "color: #dee2e6" >CONTACT NO. :  </label> 
                            <input type = "text" placeholder = contact_no name = "contact_no"/>
                            <hr/>
                            <label style = "color: #dee2e6" >AGE : </label> 
                            <input type = "text" placeholder = age name = "age"/>
                            <hr/>
                            <label style = "color: #dee2e6" >DATE_OF_BIRTH : </label> 
                            <input type = "text" placeholder = dd/mm/yyyy name = "dob"/>
                            <hr/>
                            <label style = "color: #dee2e6" >GENDER :</label> 
                            <input type="radio" name="gender" value="male"/> 
                            <label style = "color: #dee2e6" >Male</label>
                            <input style = "color: grey" type="radio" name="gender" value="female"/> 
                            <label style = "color: #dee2e6" >Female</label> 
                            <input style = "color: #dee2e6" type="radio" name="gender" value="other"/>
                            <label style = "color: #dee2e6" > Other</label> <br/>
                            <hr/>
                            <label style = "color: #dee2e6" >CATEGORY </label>         
                            <input style = "color: #dee2e6" type = "radio" name = "category" value = "landscape"/>
                            <label style = "color: #dee2e6" >landscape </label>
                            <input style = "color: #dee2e6" type = "radio" name = "category" value = "street"/>
                            <label style = "color: #dee2e6" >street</label>
                            <input style = "color: #dee2e6" type = "radio" name = "category" value = "wild_life"/>
                            <label style = "color: #dee2e6" >wild_life</label>
                            <input style = "color: #dee2e6" type = "radio" name = "category" value = "abstruct"/>
                            <label style = "color: #dee2e6" >abstract</label>
                            <hr/>
                            <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
                            </div>
                        </form>
                    
                    </fieldset>
                    <div class="row align-items-start">
                        <form action="/photocart/login_form.php"  >
                            <button class="btn btn-success" type="submit"> ALREADY REGISTERED?      login</button>
                        </form>
                    </div>      
                </div>               
            </div>
        </div>            
    </body>
</html>

