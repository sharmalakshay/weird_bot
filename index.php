<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 <!-- Full JQuery -->
 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>

 <title>WEIRD_BOT, WELCOME!</title>
</head>

<body>
 <div class="jumbotron">
   <!-- <h1 class="display-4">WEIRD_BOT, WELCOME!</h1> -->
 </div>

<div class="container">
  <form id="main_form">
   <div class="form-group">
     <label for="input_field">Input:</label>
     <input type="text" id="input_field" name="input_field" class="form-control"/>
   </div>
   <button type="button" id="send_button" class="btn btn-primary" onclick="send_ajax()">Send</button>
   <button type="button" class="btn btn-success" onclick="train_the_bot()">Load training file</button>
   <div class="form-group">
     <label for="output_field">Output:</label>
     <input type="text" id="output_field" name="output_field" class="form-control" readonly />
   </div>
  </form>
</div>

<script>

  function send_ajax(){
    var $form = $("#main_form");
    var serializedData = $form.serialize();
    $.post('send_ajax.php', serializedData, function(response) {
      console.log("Response: "+response);
      $("#output_field").val(response);
    });
  }

  async function start_training(text){
    var array = text.split("\n");
    for(var i=0; i<array.length; i++){
      $("#input_field").val(array[i]);
      send_ajax();
      let promise = new Promise((resolve, reject) => {
        setTimeout(() => resolve("done!"), 500)
      });
      let result = await promise;
    }
    console.log("Training complete");
  }

  function train_the_bot(){
    fetch('training_data.txt')
    .then(response => response.text())
    .then(text => start_training(text));
  }

</script>

</body>

</html>
