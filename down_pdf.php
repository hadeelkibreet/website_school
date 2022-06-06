
<?php
    if (isset($_POST["submit"])) {
        $file_url = $_POST["url"];
        $file_name = basename($file_url);

        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file_name");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        readfile($file_url);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <title>Pdf Downloader</title>
    <style>
    body{
    max-width: 100%;
    margin:  20px auto;
    background:#e0ebeb;
    text-align: center;


}
    .btn1 {
  background-color: green;
  border: none;
  color: white;
  padding: 15px 15px;
  cursor: pointer;
  font-size: 15px;
  border-radius: 8px;
  
}

.btn1:hover {
  background-color: MediumSeaGreen;
}
</style>
</head>

<body>

    <div class="container bg-white wrapper shadow p-4">
        <h2 class="title text-center mb-4">Pdf Downloader</h2>
        <form action="" method="post" class="form">
            <div class="mb-3">
                <input type="url" name="url" id="url" class="form-control" placeholder="Enter your URL"
               
                required>
            </div>
            <button type="submit" name="submit" class="btn1" ><i class="fa fa-download"></i> Download</button>

        </form>
    </div>
    <script>
        document.getElementById('url').value="https://hadilnibalmobashe.000webhostapp.com/<?php echo $_GET['link'];?>" ; 

    </script>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>