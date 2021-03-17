<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
<center>
    <h1 style="color:red">WelCome to Registration Form</h1>
    <form action="action.php" method ='post' enctype="multipart/form-data">
    <table border="1" cellspacing="5px" cellpadding="5px">


    <tr>
    <td colspan="2" align=center><b>User Registration :</b></td>
    </tr>

    <tr>
    <td><b>Name :</b></td>
    <td><input type="text" name="name"></td>
    </tr>

    <tr>
    <td><b>Email:</b></td>
    <td><input type="email" name="email"></td>
    </tr>

    <tr>
    <td><b>Password :</b></td>
    <td><input type="password" name="password"></td>
    </tr>

    <tr>
    <td><b>Gender :</b></td>
    <td><input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    </td>
    </tr>

    <tr>
    <td><b>Date Of birth :</b></td>
    <td><input type="date" name="dob" id="dob"></td>
    </tr>

    <tr>
    <td><b>Address :</b></td>
    <td><textarea cols="10" rows="5"  name="address"></textarea></td>
    </tr>


    <tr>
    <td><b>Course :</b></td>
    <td><select name="course">
    <option>---Select---</option>
    <option value="btech">B.Tech</option>
    <option value="mtech">M.Tech</option>
    <option value="bba">BBA</option>
    <option value="bca">BCA</option>
    <option value="mca">MCA</option>
    </select>
    </td>
    </tr>

    <tr>
    <td><b>Langauge :</b></td>
    <td><input type="checkbox" name="language[]" value="bengali">Bengali
    <input type="checkbox" name="language[]" value="hindi">Hindi
    <input type="checkbox" name="language[]" value="english">English
    </td>
    </tr>


    <tr>
    <td><b>Upload Image :</b></td>
    <td><input type="file" name="img" ></td>
    </tr>


    <tr>
    <td colspan="2" align="center"><input type="submit" name="sub" value="Submit">
    <input type="reset" name="reset" value="reset">
    </tr>


    </table>
    </form>
</center>
    
</body>
</html>