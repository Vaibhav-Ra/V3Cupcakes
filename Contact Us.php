<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.f
{
  padding-left:60px;
}
.nam
{
  padding-right: 300px;
}
</style>
</head>
<body>

<div class="container">
  <div style="text-align:center">
    <h2>Contact us</h2>
    <p>Swing by for a cupcakes, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/contact.jpg" style="width:100%">
    </div>
    
<div class="contain">
        <h1 class="t"> <strong>Ask Any Thing,Have Some question?</strong>  </h1>
        <form class="f"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <div class="nam">NAME: </div><div><input id="name" type="text" placeholder="Name"></div><br>
            LAST NAME:  <div><input id="last" type="text" placeholder="Last Name"></div><br>
            EMAIL:  <div><input id="email" type="text" placeholder="What's your email? "></div><br>
            ASK: <div><textarea name="text" id="question" cols="30" rows="8" placeholder="Your question..."></textarea></div><br>
            <br><br><br><br><br>

            <div class="submit"><a href="#"><button>Send Message</button></a></div></div>
          </form>

</body>
</html>
