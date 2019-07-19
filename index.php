<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

</head>
<body>

<p id = "text">Click the button to check the testing array.</p>

<button type="button" onclick="myFunction()" class="btn btn-outline-success">Testing array</button>

<p id="tests"></p>


<script>
function myFunction() {
    let c = "c = ['key1'=>'k', 'key2'=>'e', 'key3'=>'y', 0 =>2, 1 =>5, 2 =>34, 3 =>76, 4 =>8, 5 =>6, 6 =>15, 7 =>102, 8 =>228, 9 =>24];";
           document.getElementById("tests").innerHTML = c;
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>