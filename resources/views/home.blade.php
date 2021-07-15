<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset = "uft-8">
    <title> Home </TITLE>

    <style type="text/css">

        .header {
            background-image: url("/js/code.GIF");
            background-size:cover;
            background-position: center center;
            position:relative;


        }


        .menu{
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            font-weight: bold;
            background-color:black;

        }


        .menu a{
            float: right;
            color: white;
            padding: 1px 13px;
            text-decoration: none;

        }


        .menu  a:hover {
            color: black;
            padding-top: 5px;
            padding-bottom: 9px;
            background:white;
            text-decoration: none;

        }


        .menu img {
            width: 10%;
            height: auto ;
        }



        .container {
            position: relative;
            text-align: center;
            color: white;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color:black;
            font-size:500%;
        }


        div.gallery {
            margin: 20px;
            border: 1px solid white;
            float: left;
            width: 200px;


        }


        div.gallery img {
            width: 100%;
            height: 150px;
            position: relative;
            left: 200px;
            border: 10px solid darkblue;
        }
        .desc{

            margin: 10px;
            float: center;
            position: relative;
            left: 200px;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical
        }


        input[type=submit] {
            background-color: #04AA6D;
            color: black;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


        input[type=submit]:hover {
            background-color: #45a049;
        }


        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: lightgray;
            color: white;
            text-align: center;
        }




    </style>
</head>


<body style="background-color: lightgary">
<div class="header" style="width: 100%; height: 90px;">
</div>

<div class="menu">


    <img src="/js/logo.jpg ">
    <a href="#">Contact</a>
    <a href="#">AboutMe</a>
    <a href="#">Home</a>



</div>


<div class="container">
    <img src="/js/b.png" style="width: 100%; height:300px;">
    <div class="centered">Fatimah Alqahtani</div>
</div>


<p style="  color:black; font-size:200%; font-family:georgia; float:right;">
    <img src="/js/who.jpg" style="width: 50%; height:300px;  float:left;">
    My name is fatimah alqahtani. I'm a recently graduated from Imam Mohammad Ibn Saud Islamic University (IMSIU)
    .collage of computer scince and information scince ,
    bechelor's in information system </p>

<br>



<p style="  color:black; font-size:280%; font-family:georgia; float:center;"> My Intrest </p>

<div class="gallery"style="padding: 30px">
    <img src="/js/w.png"  width="600" height="400">
    <div class="desc" style="font-size:30px ;color:black ;" >Web programming </div>
</div>

<div class="gallery"style="padding: 30px">
    <img src="/js/h.jpg"  width="600" height="400">
    <div class="desc" style="font-size:30px ;color:black ; " >Hiking </div>
</div>

<div class="gallery"style="padding: 30px">
    <img src="/js/d.jpg"  width="600" height="400">
    <div class="desc" style="font-size:30px ;color:black ;" >drawing </div>
</div>
<br>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br>

<p style="  color:black; font-size:280%; font-family:georgia; float:center;"> Contact Me </p>

<div class="container">
    <form action="action_page.php">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="saudiarabia">Saudi Arabia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">

    </form>
</div>


<div class="footer">
    <p> Copyright &copy; 2021 By fatimah</p>
</div>


</body>
</html>
