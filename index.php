<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <title>Upload File</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5">
                <div class="card">
                <div class="card-header"><h3 class="text-center">Upload a file</h3></div>
                    <form action="upload.php" method="post" enctype="multipart/form-data" class="text-center">
                        <div class="input-group mb-3 text-left">
                        <input type="file" name="files[]" multiple>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-upload"></i> Upload</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    
</body>
</html>