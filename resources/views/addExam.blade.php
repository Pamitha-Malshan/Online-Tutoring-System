<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>Add Exam</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

        section {
            width: 100%;
            display: inline-block;
            background: #ccc;
            height: 60vh;
            text-align: center;
            font-size: 22px;
            font-weight: 700;
            text-decoration: underline;
        }

        .footer-distributed {
            background-color: #292c2f;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: normal 16px sans-serif;
            padding: 45px 50px;
        }

        .footer-distributed .footer-left p {
            color: #8f9296;
            font-size: 14px;
            margin: 0;
        }
        /* Footer links */

        .footer-distributed p.footer-links {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            margin: 0 0 10px;
            padding: 0;
            transition: ease .25s;
        }

        .footer-distributed p.footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
            transition: ease .25s;
        }

        .footer-distributed .footer-links a:before {
            content: "·";
            font-size: 20px;
            left: 0;
            color: #fff;
            display: inline-block;
            padding-right: 5px;
        }

        .footer-distributed .footer-links .link-1:before {
            content: none;
        }

        .footer-distributed .footer-right {
            float: right;
            margin-top: 6px;
            max-width: 180px;
        }

        .footer-distributed .footer-right a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background-color: #33383b;
            border-radius: 2px;
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-left: 3px;
            transition:all .25s;
        }

        .footer-distributed .footer-right a:hover{transform:scale(1.1); -webkit-transform:scale(1.1);}

        .footer-distributed p.footer-links a:hover{text-decoration:underline;}

        /* Media Queries */

        @media (max-width: 600px) {
            .footer-distributed .footer-left, .footer-distributed .footer-right {
                text-align: center;
            }
            .footer-distributed .footer-right {
                float: none;
                margin: 0 auto 20px;
            }
            .footer-distributed .footer-left p.footer-links {
                line-height: 1.8;
            }
        }
    </style>
</head>
<body>

    <header class="header">

        <div class="text-center">
            <img src="{{URL('/images/logo.png')}}" alt="">
        </div>
        <div class="topnav" id="myTopnav">
            <a href="#home">Home</a>
            <a href="#news">Classes</a>
            <a href="#about">Attendance</a>
            <a href="#contact">Resourses</a>
            <a href="#about" class="active">Exams</a>
            <a href="#about">Payments</a>
            <a href="#about">Notices</a>
            <a href="#about">Timetable</a>
            <a href="#about">Feedback</a>
            <a href="#about">Sign up</a>
            <a href="#about">Log in</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

    </header>

    <div class="container" style="width: 60%;">

        <div class="text-center">
            <br>
            <h2> Exam Management </h2>
        </div>

        <div class="border border-dark border-2" style="padding: 20px; margin: 10px;">

            <div class="text-center">
                <h4> Add Exam </h4>
                <br>
            </div>

            <form action="/insertExam" method="POST">
            {{csrf_field()}}
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Class</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="selectClass">
                            <option selected>Select Class</option>
                            <option value="Grade 06">Grade 06</option>
                            <option value="Grade 07">Grade 07</option>
                            <option value="Grade 08">Grade 08</option>
                            <option value="Grade 09">Grade 09</option>
                            <option value="OL">OL Classes</option>
                            <option value="AL">AL Classes</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Exam</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="selectExam">
                            <option selected>Select Exam</option>
                            <option value="Mathamathics">Mathamathics</option>
                            <option value="Science">Science</option>
                            <option value="IT">IT</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Exam Type</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="selectType">
                            <option selected>Select Exam Type</option>
                            <option value="MCQ">MCQ</option>
                            <option value="Structerd">Structerd</option>
                            <option value="Mix">Mix</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputDate" name="examDate">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col">
                              <input type="time" class="form-control" name="startTime">
                            </div>
                            <div class="col-sm-1"> <p style="text-align: center;"> to </p> </div>
                            <div class="col">
                              <input type="time" class="form-control" name="endTime">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputDuration" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputDuration" placeholder="00 min" name="duration" min="0">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputTotMarks" class="col-sm-2 col-form-label">Total Marks</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputTotMarks" name="totMarks" min="0">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputNoQues" class="col-sm-2 col-form-label">No of Questions</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputNoQues" name="noOfQues" min="0">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success" style="width: 40%;">Add Exam</button>
                </div>

            </form>
      
        </div>
    
    </div>
    
    <br><br>
    <footer class="footer-distributed">

        <div class="container-lg">

            <div class="footer-right">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

            <div class="footer-left">
                <p>Tutoring Tube &copy; 2021</p>
            </div>
            
        </div>
                
    </footer>
            
    

    
</body>
</html>