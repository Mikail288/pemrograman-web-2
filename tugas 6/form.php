<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Form tukar sampah</title>
  </head>
  <body>
    <div class="container mt-5 d-flex justify-content-center">
      <div class="card" style="width: 50vw">
        <div class="card-body">
          <h5 class="card-title">Form tukar sampah</h5>
          <form method="post" action="checkout.php">
            <div class="form-group row">
              <label for="jenis" class="col-4 col-form-label"
                >Jenis sampah</label
              >
              <div class="col-8">
                <select id="jenis" name="jenis" class="custom-select">
                  <option value="plastik">Plastik</option>
                  <option value="kayu">Kayu</option>
                  <option value="kertas">Kertas / kardus</option>
                  <option value="kain">kain</option>
                  <option value="kaca">kaca</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4 col-form-label" for="berat"
                >Berat sampah</label
              >
              <div class="col-8">
                <input
                  id="berat"
                  name="berat"
                  type="number"
                  class="form-control"
                  aria-describedby="textHelpBlock"
                  required
                />
                <span id="textHelpBlock" class="form-text text-muted"
                  >dalam satuan Kilogram</span
                >
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
