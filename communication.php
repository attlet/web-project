<?php include $_SERVER['DOCUMENT_ROOT']."/db.php";?>

<!DOCTYPE html>
<html>
 <head>
   <title>My webpage</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <link type="text/css" rel="stylesheet" href="css/shared_design.css">


   <style>
   body{
     width : 100%;
     height : 100%;
   }
   a#write{
     display: inline-block;
     min-width: 80px;
     margin-left: 10px;
     padding: 10px;
     border: 1px solid #000;
     border-radius: 2px;
     font-size: 1.4rem;
     background-color: black;
     color : white;
     decoration = none;
     text-align: center;
   }
   a#write:hover{
     decoration :
   }


   </style>
 </head>
 <body>
   <div id="head">
     <nav class="navbar navbar-default">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
           <a class="navbar-brand" href="#">Me</a>
         </div>
         <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="nav navbar-nav navbar-right">
             <li><a href="communication.html">소통 및 거래게시판</a></li>
             <li><a href="mapview.html">복지 시설 위치</a></li>
             <li><a href="MedicalTreatment.html">관련 정책</a></li>
             <li><a href="First.html">후원</a></li>
           </ul>
         </div>
       </div>
     </nav>

   </div>
   <a id="write" href="communication_write.html">글 작성</a>
   <table class="table table-hover table-striped text-center">
     <thead>
     <tr>
       <th>번호</th>
       <th>제목</th>
       <th>작성자</th>
       <th>날짜</th>
       <th>조회수</th>
     </tr>
     </thead>
     <?php
     // board테이블에서 idx를 기준으로 내림차순해서 10개까지 표시
         $sql = query("select * from mytable order by idx desc limit 0,10");
           while($mytable = $sql->fetch_array())
           {
             //title변수에 DB에서 가져온 title을 선택
             $title=$mytable["title"];
             if(strlen($title)>30)
             {
               //title이 30을 넘어서면 ...표시
               $title=str_replace($mytable["title"],mb_substr($mytable["title"],0,30,"utf-8")."...",$mytable["title"]);
             }
      ?>
     <tbody id="table_body">
       <tr>
         <td><?php echo $mytable['num']; ?></td>
         <td><?php echo $mytable['title']; ?></td>
         <td><?php echo $mytable['id']; ?></td>
         <td><?php echo $mytable['date']; ?></td>
         <td><?php echo $mytable['access']; ?></td>
       </tr>
     </tbody>
   </table>


 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


 </body>
</html>
