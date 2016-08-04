<!DOCTYPE html>
<html>
<body>

<p>Click the button to display a confirm box.</p>

<p id="demo"></p>

<script>
function myFunction() {
    var txt;
    var r = confirm("Press a button!");
    if (r == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.write(txt);
}
myFunction();
</script>

</body>
</html>
