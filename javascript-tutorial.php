
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript Tutorial for Beginners by website development specialist in Bangladesh</title>
  <meta name="description" content="Javascript Tutorial for beginners by website development specialist in Bangladesh">
  <meta name="keywords" content="HTML Tutorial, CSS Training, JavaScript Learning">

<?php include('myhead.php'); ?>
<div style="overflow:auto">
  <div class="menu">

<?php include('mylink.php'); ?>
<p>Please start learning JavaScript after you learned HTML and CSS.</p>
</div>

  <div class="main">

    <h2>Javascript Tutorial</h2>
        <p>
    <b>        Javascript starts with </b>
    </p>
    <p>
            <textarea cols="70" rows="1">
                <script type="text/javascript">
            </textarea>
       </p>
<p>       
            <b>Javascript ends with </b></p>
<p>            <textarea cols="70" rows="1">
                </script>
            </textarea>
            </p>
            <p>
<b>            If we want to show something on the website in Javascript we have to write</b> </p>
            <p>
            <textarea cols="70" rows="1">
                document.write("This text will show on website");
            </textarea>
            </p>
<p>    <b>So the full script to show something on the website is</b> </p>
<p>
            <textarea cols="70" rows="5">
                <script type="text/javascript">

                document.write("This text will show on website");

                </script>
            </textarea>
            </p>
            <p>
<b>Here is the screenshot of website after writing above code</b></p>
<img width="100%" src="http://myakub.com/javascripttest.jpg">
    </p>

<p>We can also show something on the website by the following javascript code 
document.getElementById("idName").innerHTML = "Text to show on the website"; </p>

<p>
            <textarea cols="70" rows="10" width="100%">
<p id="view"></p>

<script>
document.getElementById("view").innerHTML = "Javascript code getElementById is showing text on the website";
</script>
            </textarea>
            </p>
            <p>
<b>Here is the screenshot of the browser after writing above code</b></p>
<img width="100%" src="http://webtutorial.myakub.com/getElementById.jpg">
    </p>

<p>Now lets create a function with above code.</p>
<p> Function is a block of code then can be called by event like by clicking a button.</p>
<p>We will create a function and will call it by click. </p>
<p>To create a function we will have to write function functionName() {code}</p>
<p>To call function we will have to write onclick="funcionName()"</p>
<p>
            <textarea cols="70" rows="10" width="100%">
<script>
function showText() {
  document.getElementById("view").innerHTML = "Show Text";
}
</script>

<p id="view"></p>
<button type="button" onclick="showText()">Click to Show Text</button>

            </textarea>
            </p>
           <p>
<b>Here is the screenshot of the browser after writing above code</b></p>
<img width="100%" src="http://webtutorial.myakub.com/function.jpg">
    </p>

<b>After clicking the button the text shows</b></p>
<img width="100%" src="http://webtutorial.myakub.com/functionClick.jpg">
    </p>
<p>We can put the javascript code in the head of HTML documents.</p>
<p>In this example we will put the function in the head and call the function in the body by clicking button.</p>
<p>
            <textarea cols="70" rows="15" width="100%">
<html>
<head>
<script>
function showText() {
  document.getElementById("view").innerHTML = "Show Text";
}
</script>
</head>
<body>
<p id="view"></p>
<button type="button" onclick="showText()">Click to Show Text</button>
</body>
</html>
            </textarea>
            </p>


  </div>

  <div class="right">
<?php include('right.php'); ?>    
    
  </div>
</div>

<?php include('footer.php'); ?>    

</body>
</html>

