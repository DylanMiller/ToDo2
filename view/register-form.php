<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="POST" action="<?php echo $path . "../Sublime Text 3/ToDo2/controller/create-user.php"; ?>">
    <div>
        <label for="email">E-mail: </label>
        <input type="text" name="email"/>
    </div>
    
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

