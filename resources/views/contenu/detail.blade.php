detail <?php 
$id = $_GET{"id"};
echo $id;
use App\Livre;
$book=Livre::find($id);
echo $book;
?>