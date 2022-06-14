

<?
include_once 'connection.php';
$name=$_GET["name"] ;

$sql = "DELETE FROM vote  WHERE name='" .$_GET["name"]."'";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>