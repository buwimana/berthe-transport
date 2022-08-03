<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./book.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1> <a href="landingpage.html" id="logo">Berthe Transport</a> </h1>
         <nav>
             <a href="./home.php">HOME</a>
             <a href="#blog"> BLOG</a>
             <a href="#services"> SERVICES</a>
             <a href="#ticket"> BOOK ticket</a>
             <a href="#contact">CONTACT ME</a>
             <a href="./login.php">SIGN IN</a>
         </nav>
  </header >
  <section class="book">
    <div class="left">
      <h1>Book</h1>
      
      <input type="text" name="username" placeholder="Enter Your First Names" />
      <input type="text" name="username" placeholder="Enter Your Last Names" />
      <select id="agencies" name="agencies"  placeholder="">
        <option value="default"selected="selected" >RFTS</option>
        <option value="">kbs</option>
        <option value="" >International</option>
        <option value="">Stella</option>
      </select>
      <select id="route" name="Routes"  placeholder="">
        <option value="default"selected="selected" >KIgali-Huye</option>
        <option value="">KIgali-Huye</option>
        <option value="" >KIgali-Musanze</option>
        <option value="">Kigali-rwamagana</option>
      </select>
      <select id="hours" name="district"  placeholder="">
        <option value="default"selected="selected" >6:00am</option>
        <option value="">6:00am</option>
        <option value="" >6:30am</option>
        <option value="">7:00</option>
      </select>
      <input type="text" name="email" placeholder="Enter YourE-mail" />
      <input type="password" name="password" placeholder="Enter Your Password" />
      <input type="password" name="password2" placeholder="Retype password" />
      
      <input type="submit" name="book " value="Book Now" />
    </div>
</section>

</body>
</html>