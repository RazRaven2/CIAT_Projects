<?php
session_start();

$name = '';
$value = '';

if (!isset($_SESSION[$name])){
    $SESSION[$name] = [];
}

$action = filter_input(INPUT_POST, 'action');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch($action){
    case 'Submit':
        $name = filter_input(INPUT_POST, 'name');
        $value = filter_input(INPUT_POST, 'value');

        $_SESSION[$name] = $value;
        print_r($_SESSION);
        $names = $_SESSION[$name];

        break;
    case 'Clear':
        $remove = filter_input(INPUT_POST, 'removal');
        unset($_SESSION[$remove]);

        print_r($_SESSION);
    case 'End':
        session_destroy();
        session_start();
    
    default:
        break;
    }



?>

<html>
    <head>Session Data</head>

<main>
    
    <form action="." method="post">

        <label>Name:</label>
        <input type="text" name="name" value=""><br>

        <label>Value:</label>
        <input type="text" name="value" value=""><br>

        <label>&nbsp;</label>
        <input type="submit" name='action' value='Submit'/><br>

    </form>

    <p>Selection</p>
    <form action="." method="post">
    <select name="removals">
        <?php foreach ( $names as $n ) { ?>
            <option value="<?php echo $_SESSION[$n]; ?>"> <?php echo $_SESSION[$n]; ?></option>
        <?php } ?>
        </select>
        <label>&nbsp;</label>
        <input type="submit" name='action' value='Clear'/><br>


    </form>
    <form action = "." method = "post">

        <label>&nbsp;</label>
        <input type="submit" name='action' value='End'/><br>

    </form>
</main>



</html>