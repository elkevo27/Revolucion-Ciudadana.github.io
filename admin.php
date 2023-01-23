<!DOCTYPE html>
<html lang="en">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<body>

    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">

            Select image to upload:

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                <input type="text" name="descrip" class="form-control" id="exampleFormControlInput1" placeholder="Descripción">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Link</label>
                <input type="text" name="link" class="form-control" id="exampleFormControlInput1" placeholder="Link">
            </div>

            <input type="file" name="image" />
            <input type="submit" name="submit" value="UPLOAD" />
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>