<html>
    <head>
        <title>Registration form</title>
    </head>
    <body>
        <form action="" method="POST">
            Click submit to start our PHP program
            <br>
            Your name : 
            <input type="text" name="name" size="15" maxlength="20">
            <br> 
            Password :
            <input type="password" size="15" maxlength="20" name="pw">
            <br> 
            Email :
            <input type="Email"  maxlength="30" name="email">
            <br>
            Birth year : 
            <select name="year" size="1">
                <option>1997</option>
                <option selected>1998</option>
                <option>1999</option>
                <option>2000</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
            </select>
            <br>
            Birthday:
            <input type="date" id="birthday" name="birthday">
            
            <br>Gender :
            <input type="radio" value="male" name="gender"> Male
            <input type="radio" value="female" name="gender"> Female
            <br>
            Programming languages :
            <input type="checkbox" value="C" name="pl"> C
            <input type="checkbox" value="Java" name="pl"> Java
            <input type="checkbox" value="PHP" name="pl"> PHP
            <input type="checkbox" value="Python" name="pl"> Python
            <br>
            Button:<input type="button" onclick="alert('Hello World!')" value="Click Me!">
            <br>
            Select your favorite color:
            <input type="color" id="favcolor" name="favcolor">
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
        
    </body>
</html>