<?php
include './dir/db_connection.php';

function message($insertResult)
{
    global $isInsert, $isError, $text;
    if ($insertResult) {
        $isInsert = true;
        $text = "successfully updated";
    } else {
        $isError = true;
        $text = "updated";
    }

}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM notes WHERE `notes`.`id` = $id";
    $result = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['idEdit'])) {
        $title = $_POST['noteEdit'];
        $desc = $_POST['descEdit'];
        $id = $_POST['idEdit'];
        $insert = "UPDATE `notes` SET `title` = '$title', `description` = '$desc' WHERE `notes`.`id` = $id ;";
        $insertResult = mysqli_query($conn, $insert);
        message($insertResult);

    } else {
        $title = $_POST['note'];
        $desc = $_POST['desc'];
        $insert = "INSERT INTO `notes` ( `title`, `description`) VALUES ( '$title', '$desc');";
        $insertResult = mysqli_query($conn, $insert);
        message($insertResult);

    }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="
    //cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css
    ">
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js
"></script>

    <title>CRUD</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phpAngkit">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
if ($isInsert) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong>  note was ' . $text . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

}
if ($isError) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong>  note was not ' . $text . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

}

?>
<div class="container">
  <h4 class="text-center my-3">Add A note</h4>
<form action="/phpAngkit/6_crud.php" method="POST">
  <div class="mb-3 mt-3">
    <label for="note" class="form-label">Note Title</label>
    <input name="note" class="form-control" id="note" aria-describedby="note">
  </div>
  <div class="my-3 ">
    <label for="desc" class="form-label">Description</label>
    <textarea name="desc"  class="form-control"  placeholder="Leave a comment here" id="desc" aria-describedby="note">
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="container my-4">
<table class="table " id="myTable">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM `notes` ORDER BY `notes`.`createdAt` DESC
";
$result = mysqli_query($conn, $sql);
$count = 1;

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
      <th scope='row'>" . $count . "</th>
      <td>" . $row["title"] . "</td>
      <td>" . $row["description"] . "</td>
      <td>
      <button class='btn btn-primary edit' id=" . $row["id"] . " >Edit</button> <button class='btn btn-primary delete' id=" . $row["id"] . ">Delete</button>

      </td>
    </tr>";
    $count++;
}

?>

  </tbody>
</table>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodalLabel">Edit the note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form action="/phpAngkit/6_crud.php" method="POST">
    <input type="hidden" name="idEdit" id="idEdit">
    <div class="mb-3 mt-3">
    <label for="noteEdit" class="form-label">Note Title</label>
    <input name="noteEdit" class="form-control" id="noteEdit" aria-describedby="noteEdit">
    </div>
    <div class="my-3 ">
    <label for="descEdit" class="form-label">Description</label>
    <textarea name="descEdit"  class="form-control"
    rows="5"  placeholder="Leave a comment here" id="descEdit" aria-describedby="note">
    </textarea>
    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</form>
      </div>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    const edits = document.querySelectorAll('.edit')
    edits.forEach((element)=>{
    element.addEventListener('click',(e)=>{
    e.preventDefault();
    const tr = e.target.parentNode.parentNode
    const title = tr.children[1].textContent;
    const description = tr.children[2].textContent;
    const noteEdit = document.getElementById('noteEdit');
    const descriptionEdit = document.getElementById('descEdit')
    noteEdit.value = title;
    descriptionEdit.value = description;
    const id = e.target.id
    const idEdit = document.getElementById('idEdit');
    idEdit.value =id;
    const myModal = new bootstrap.Modal(document.getElementById('editmodal'))
  myModal.toggle();
})
  })
  const deleteBtn = document.querySelectorAll('.delete');
  deleteBtn.forEach(ele=>{
    ele.addEventListener('click',function(e){
    const id = e.target.id;
    if(confirm('Are you sure you want to delete?')){
    window.location = `/phpAngkit/6_crud.php?delete=${id}`
    }else{
      console.log("no");
    }

    })
  })
  </script>

  </body>
</html>
