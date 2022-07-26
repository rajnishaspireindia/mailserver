<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Contact Us Form</title>
</head>
<body>
    <section class="movers-details pt-8">
    <div class="container" >
   <div class="row">
  <div class="col-md-12"> 
    <div id="message" style=""></div>
    <div class="panel panel-primary" id="form"> 
      <div class="panel-heading"> Your Moving Information 
        <div class="pull-right">Your Contact Information</div>
      </div>
      <div class="panel-body"> 
        <form    method="post" id="contact-form">
          <div class="row"> 
            <div class="col-md-6"> Type of Move: 
              <select name="whichtype" required class="form-control">
                <option value="">Select</option>
                <option value="Residential">Residential</option>
                <option value="Residential_Car">Residential+Car</option>
                <option value="Auto">Car</option>
                <option value="ResAuto">Corporate Relocation</option>
                <option value="ResAuto">Factory Relocation</option>
                <option value="ResAuto">Bike Relocation</option>
              </select>
              <br>
              Moving From : 
              <input type="text" id="MovingFrom" maxlength="31" name="MovingFrom"  class="form-control" required />
              <br>
              Moving To :<br>
              <input type="text" class="form-control"  maxlength="31" name="MovingTo" required />
              <br>
              Moving Date:<br>
              <input class="form-control" type="date"  maxlength="31" name="MovingDate" placeholder="dd-mm-yyyy" />
              <br>
              Moving Details:<br>
              <textarea class="form-control"  name="MovingDetails" ></textarea>
            </div>
            <div class="col-md-6"> Name: <br>
              <input class="form-control"  maxlength="31" name="CostumerName" type="text" required  />
              <br>
              Phone: 
              <input class="form-control" pattern="^\d{10}$"  maxlength="10"  name="Costumerphone"  type="text" placeholder="Fill 10 digit phone no" required/>
              <br>
              Email : 
              <input class="form-control"  maxlength="31" name="CostumerEmail" type="email"  required/>
              <br>
              Address: 
              <textarea class="form-control"  name="address" required></textarea>
              <br>
              <input type="submit" value="Submit" id="send" class="btn btn-primary btn-lg"/>
            </div>
          </div>
        </form>
      </div>
    </div>
    </section>
</body>
<script src="assets/js/jquery.js"></script>
<script>
      $('#contact-form').on('submit',function(e){
          $('#send').val('Please wait...');
          $('#send').attr('disabled',true);
            $.ajax({
                url:'formprocess.php',
                type:'post',
                data:$('#contact-form').serialize(),
                success:function(result)
                {
                    $('#message').html(result);
                    $('#form').hide();
                    $('#contact-form')['0'].reset();
                    $('#send').val('Submit');
                    $('#send').attr('disabled',false);
                }

            });
            e.preventDefault();
        });
    </script>
</html>

