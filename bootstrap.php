<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <h1>Hello, world!</h1>
            <div class="row text-center">
                <div class="col-md-3 col-12" style="background-color:red">
                    Tes
                </div>
                <div class="col-md-3 col-12" style="background-color:blue">
                    Tes
                </div>
                <div class="col-md-3 col-12" style="background-color:green">
                    Tes
                </div>
                <div class="col-md-3 col-12" style="background-color:yellow">
                    Tes
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Kolom</th>
                            <th>Kolom</th>
                            <th>Kolom</th>
                            <th>Kolom</th>
                            <th>Kolom</th>
                            <th>Kolom</th>
                            <th>Kolom</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                        </tr>
                        <tr>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                        </tr>
                        <tr>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea perspiciatis commodi maxime tempora debitis maiores consequuntur expedita tenetur ipsam quam enim, inventore reprehenderit impedit sapiente placeat distinctio dolorem molestiae unde.</td>
                            <td>Isi kolom</td>
                            <td>Isi kolom</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email"/>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass"/>
                </div>
            </form>

            <form class="row g-3">
                <div class="col-auto">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email"/>
                </div>
                <div class="col-auto">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass"/>
                </div>
            </form>

            <form class="form-horizontal">
                <div class="mb-3 row">
                    <label for="email" class="form-label col-md-2">Email Address</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="email"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pass" class="form-label col-md-2">Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="pass"/>
                    </div>
                </div>
            </form>

            <select class="form-select">
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
            </select>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox">
                <label class="form-check-label">
                    Checkbox 1
                </label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox">
                <label class="form-check-label">
                    Checkbox 2
                </label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="radio" id="radio">
                <label class="form-check-label">
                    Radio 1
                </label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="radio" id="radio">
                <label class="form-check-label">
                    Radio 2
                </label>
            </div>
        </div>

        <a class="btn btn-primary btn-sm">Button Primary</a>
        <button class="btn btn-success btn-lg">Button Success</button>
        <input type="button" class="btn btn-info" value="Button Info">

        <br/><br/><br/><br/><br/><br/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>