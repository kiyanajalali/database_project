<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">

	<form action="addUser.php" method="POST">

    <p>
    <label>userName:</label>
    <input type="text" id="userName" name="userName"/>
	</p>

    <p>
    <label>Email:</label>
    <input type="text" id="Email" name="Email"/>
	</p>

    <p>
    <label>last_name:</label>
    <input type="text" id="last_name" name="last_name"/>
	</p>

    <p>
    <label>first_name:</label>
    <input type="text" id="first_name" name="first_name"/>
	</p>

    <p>
    <label>password:</label>
    <input type="text" id="password" name="password"/>
	</p>
    

    <p>
    <label>nationality:</label>
    <input type="text" id="nationality" name="nationality"/>
	</p>

    <p>
    <label>user_type:</label>
    <input type="text" id="user_type" name="user_type"/>
	</p>

    <p>
    <label>q_id:</label>
    <input type="text" id="q_id" name="q_id"/>
	</p>

    <p>
    <label>answer:</label>
    <input type="text" id="answer" name="answer"/>
	</p>

    <p>
    <input type="submit" id="btn" value="add user"/>
	</p>
	</form>
    </div>

</body>
</html>