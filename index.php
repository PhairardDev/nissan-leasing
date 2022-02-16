<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>NISSAN LEASING | นิสสัน ลีสซิ่ง</title>
  </head>
  <body>

  <div class="container">
      <div class="row">
      <h1 class="mt-4">NISSAN LEASING | นิสสัน ลีสซิ่ง</h1>
        <form class="row g-3" action="#" method="post" validate>
            <div class="col-md-4">
                <label for="customerName" class="form-label">ชื่อ-นามสกุล (Customer Name)</label>
                <input type="text" class="form-control" id="customerName" name="customerName" value="<?php echo ($_POST['customerName']!=''? $_POST['customerName'] : ''); ?>" >
            </div>
            <div class="col-md-4">
                <label for="contactNo" class="form-label">สัญญาเลขที่ (Contract No)</label>
                <input type="text" class="form-control" id="contactNo" name="contactNo" value="<?php echo ($_POST['contactNo']!=''? $_POST['contactNo'] : ''); ?>" >
            </div>
            <div class="col-md-4">
            <label for="bookingDate" class="form-label">วันทำสัญญา (Booking Date)</label>
                <input type="text" class="form-control datepicker_input" id="bookingDate" name="bookingDate" value="<?php echo ($_POST['bookingDate']!=''? $_POST['bookingDate'] : ''); ?>" >
            </div>
            <div class="col-md-4">
                <label for="installment" class="form-label">ค่างวด (Installment)</label>
                <input type="number" class="form-control" id="installment" name="installment" value="<?php echo ($_POST['installment']!=''? $_POST['installment'] : ''); ?>" required/>
            </div>
            <div class="col-md-4">
                <label for="term" class="form-label">จำนวนงวด (Term)</label>
                <input type="number" class="form-control" id="term" name="term" value="<?php echo ($_POST['term']!=''? $_POST['term'] : ''); ?>" >
            </div>
            <div class="col-md-4">
                <label for="eff" class="form-label">Eff</label>
                <input type="text" class="form-control" id="eff" name="eff" value="<?php echo ($_POST['eff']!=''? $_POST['eff'] : ''); ?>">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>
        </form>

      </div>
<?php
if(isset($_POST['submit'])){
    $i=1;
    $j=0;
    $installment = $_POST['installment'];
    $paymentDate = ['25/11/2021','25/12/2021','29/01/2022'];
    $term = $_POST['term'];
    $bookingDate = $_POST['bookingDate'];
    $eff = $_POST['eff'];
    $start = $month = strtotime($bookingDate);
    $end = strtotime("+".$term."month",$start);

    function calOverDue($date1,$date2){
        
        $date1=str_replace('/', '-', $date1);
        $date2=str_replace('/', '-', $date2);
        $due=date_create($date1);
        $paid=date_create($date2);
        $diff=date_diff($due,$paid);
        $overDate = $diff->format("%a");
        return $overDate;
    }

    function calInterest($installment,$eff,$overDate){
        $interarstCost = ($installment*$eff*$overDate)/365;
        return $interarstCost;
    }



?>
      <div class="row">
      <table class="my-4 table table-striped">
        <thead>
            <tr>
                <th scope="col">Type Payment</th>
                <th scope="col">Term</th>
                <th scope="col">Due date</th>
                <th scope="col">Installment</th>
                <th scope="col">Customer Payment</th>
                <th scope="col">Late Interest</th>
            </tr>
        </thead>
        <tbody>
<?php 

while($month < $end)
{
    
    $month = strtotime("+1 month", $month);
    $dueDate = date('d/m/Y', $month). PHP_EOL;
    
?>
            <tr>
                <td>Installment</td>
                <td><?php echo $i++ ?></td>
                <td><?php echo $dueDate?></td>
                <td><?php echo number_format($installment,2,'.',',')?></td>
                <td><?php echo (isset($paymentDate[$j])? $paymentDate[$j++] : '-')?></td>
                <td><?php echo calInterest ($installment, $eff, (isset($paymentDate[$j])? calOverDue($dueDate,$paymentDate[$j++]) : '0')) ;?></td>
            </tr>
<?php } ?>
        </tbody>
        </table>
      </div>
  </div>
<?php } ?>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>

        // set varaible
        const customerName = document.getElementById("customerName");
        const contactNo = document.getElementById("contactNo");
        const bookingDate = document.getElementById("bookingDate");
        const installment = document.getElementById("installment");
        const term = document.getElementById("term");
        const eff = document.getElementById("eff");

    function showResult(){


        //alert(customerName.value);
        //set value for form field
            
    }


    </script>
  </body>
</html>