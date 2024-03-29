<?php 

$mysqli = new mysqli("localhost", "root", "", "phpoop");

if($mysqli->connect_errno == 0) {
    // CRUD
    $username = "sara";
    $pass = password_hash("123", PASSWORD_BCRYPT);

    // CREATE
    $sql = "INSERT INTO `test` (`username`, `pass`) VALUES ('$username', '$pass')";
    
    // READ
    $sql = "SELECT * FROM `test`";
    $result = $mysqli->query($sql);
    $results = [];
    
    if($result->num_rows) {
        while($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    } else {
         echo "Table is empty!";
    }


    // DELETE
    if(isset($_GET['id'])) {
        $sql = "DELETE FROM `test` WHERE `id`=".$_GET['id'];
        if($mysqli->query($sql)) {
            header("Location: 1-mysqli.php?status=1");
        } else {
            header("Location: 1-mysqli.php?status=0");
            //echo "Error: " .$mysqli->error;
        }
    }
} else {
    echo "mysqli error!";
}

if(isset($_GET['action'])) {
    $action = $_GET['action'];

    switch($action) {
        case "close":
            header("Location: 1-mysqli.php");
        break;
    }
}
?>


<?php if(isset($_GET['status'])): ?>
    <?php if($_GET['status'] == 1): ?>
        <p>
            <strong>Notice:</strong> User was deleted successfully.
            <a href="?action=close">Close</a>
        </p>
    <?php else: ?>
        <p>
            <strong>Error:</strong> Something want wrong!
        </p>
    <?php endif; ?>
<?php endif ?>

<?php if(count($results )): ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>pass</th>
            <th></th>
        </tr>
        <?php foreach($results as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['pass'] ?></td>
            <td><a href="?id=<?= $row['id'] ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>