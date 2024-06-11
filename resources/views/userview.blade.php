<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<h1> Support Form</h1>
@if(Session::get('success'))
<div class="alert alert-success">

{{Session::get('success')}}
</div>
@endif
@if(Session::get('fail'))
<div class="alert alert-fail">

{{Session::get('fail')}}
</div>
@endif
<br><br>
<form action="submit" method="Post">
@csrf
<div class="mb-2">
  <label for="Complain" class="form-label">Complain</label>
  <input type="text" class="form-control" id="Complain" placeholder="Complain" name="Complain" required>
</div>
<div class="mb-2">
  <label for="Email" class="form-label">Email</label>
  <input type="email" class="form-control" id="Email" placeholder="Example@email.com" name="Email" required>
</div>
<div class="mb-2">
  <label for="Problem" class="form-label">Problem</label>
  <textarea class="form-control" id="Problem" rows="3" cols="50" name="Problem" width="200"></textarea>
</div>
   
<!-- <label for="Complain">Complain:</label>     
<input type="text" name="Complain" placeholder="Complain"required >
<br><br>
<label for="Email">Email:</label>     
<input type="email" name="Email" placeholder="Email" required>
<br><br>
<label for="Problem">Describe your problem:</label> <br>
<textarea id="Problem" name="Problem" rows="4" cols="50">


</textarea> -->
<br><br>
<button class=" btn btn-primary" type="submit"> Submit</button>

</form>

</body>

</html>