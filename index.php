<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>NISSAN LEASING: นิสสัน ลีสซิ่ง</title>
  </head>
  <body>

  <div class="container">
      <div class="row">
      <h1 class="mt-4">NISSAN LEASING: นิสสัน ลีสซิ่ง</h1>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="customerName" class="form-label">ชื่อ-นามสกุล (Customer Name)</label>
                <input type="text" class="form-control" id="customerName" name="customerName" value="" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="contactNo" class="form-label">สัญญาเลขที่ (Contract No)</label>
                <input type="text" class="form-control" id="contactNo" name="contactNo" value="" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
            <label for="bookingDate" class="form-label">วันทำสัญญา (Booking Date)</label>
                <input type="text" class="form-control datepicker_input" id="bookingDate" name="bookingDate" value="" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="installment" class="form-label">ค่างวด (Installment)</label>
                <input type="number" class="form-control" id="installment" name="installment" onchange="setTwoNumberDecimal" min="0" max="5" step="0.25" value="0.00" required/>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="term" class="form-label">จำนวนงวด (Term)</label>
                <input type="number" class="form-control" id="term" name="term" value="" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="eff" class="form-label">Eff</label>
                <input type="number" class="form-control" id="eff" name="eff" onchange="setThreeNumberDecimal" min="0" max="5" step="0.255" value="0.000" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>

      </div>
      <div class="row">
      <table class="table table-striped caption-top">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Type Payment</th>
                <th scope="col">Term</th>
                <th scope="col">Due date</th>
                <th scope="col">Installment</th>
                <th scope="col">Customer Payment</th>
                <th scope="col">Late Interest</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Installment</td>
                <td>1</td>
                <td>25/12/2021</td>
                <td>4338</td>
                <td>25/12/2021</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Installment</td>
                <td>2</td>
                <td>25/01/2022</td>
                <td>4338</td>
                <td>25/12/2021</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Installment</td>
                <td>3</td>
                <td>25/02/2022</td>
                <td>4338</td>
                <td>25/02/2021</td>
                <td></td>
            </tr>
            
        </tbody>
        </table>
      </div>
  </div>
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        function setTwoNumberDecimal(event) {
            this.value = parseFloat(this.value).toFixed(2);
        }
        function setTwoNumberDecimal(event) {
            this.value = parseFloat(this.value).toFixed(3);
        }

        const elems = document.querySelectorAll('.datepicker_input');
        for (const elem of elems) {
            const datepicker = new Datepicker(elem, {
                'format': 'dd/mm/yyyy', // UK format
            });
        }

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
  </body>
</html>