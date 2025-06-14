<!doctype html>
<html>

    <head>
        <!-- set charset เพื่อการแสดงผลภาษาไทย -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        
        <!-- สร้างชื่อของ Web โดยปรากฏด้านบน url -->
        <title>sutitar-03:ฝึกเขียนเว็บด้วย HTML</title>
     
        <!-- 
            link file Style มาแสดงผลใน web ซึ่งเป็นการเติมสีสันต่าง ๆ ใน web
            file style จะถูกจัดเก็บใน .css -->
            <link rel="stylesheet" href="mystyle.css" type="text/css">
    </head>

<body>
    <h1 id="promotion">เรียนรู้การสร้างตารางข้อมูล </h1>
    <ol>
        <li><h3>เรียนรู้การสร้างตารางข้อมูลใน web</h3>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Score</th>
                </tr>
                <tr>
                    <td>620405001</td>
                    <td>Meena</td>
                    <td>82</td>
                </tr>
                <tr>
                    <td>620405002</td>
                    <td>MeSa</td>
                    <td>65</td>
                </tr>
                <tr>
                    <td>620405003</td>
                    <td>Kanya</td>
                    <td>74</td>
                </tr>
            </table>
        <li><h3>เรียนรู้การแสดงผลตารางข้อมูลจาก database </h3>
            <!-- เชื่ีอมต่อฐานข้อมูล-->    
            <?php
                require('connect.php');
            ?>
            <ul>
                <li><h4>แสดงข้อมูลทั้งหมดใน database </h4>   
                    <!-- เลือกตารางใน database ออกมาแสดงผล -->
                    <?php
                        $sql = '
                            SELECT * 
                            FROM volleyball.team;
                            ';
                        $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                    ?>
                    <!-- สร้าง hearder ของตารางเพื่อแสดงข้อมูล-->
                    <table border="1">
                        <tr>
                             
                             
                                

                            <th width="50">
                                <div align="center">Team_id</div>
                            </th>
                            <th width="100">
                                <div align="center">Team_name</div>
                            </th>
                            <th width="100">
                                <div align="center">Coach"</div>
                            </th>
                            <th width="100">
                                <div align="center">Home_city</div>
                            </th>
                           
                        </tr>
                        <?php
                            $i = 1;
                            while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                        <tr>
                           
                            <td><?php echo $objResult["Team_id"]; ?></td>
                            <td><?php echo $objResult["Team_name"]; ?></td>
                            <td><?php echo $objResult["Coach"]; ?></td>
                            <td><?php echo $objResult["Home_city"]; ?></td>
                            
                        </tr>
                        <?php
                            $i++;
                            }
                        ?>
                    </table>
                <li><h4>แสดงข้อมูลบาง column ใน database </h4> 
                    <!-- เลือกตารางใน database ออกมาแสดงผล -->
                    <?php
                        $sql = '
                            SELECT * 
                            FROM volleyball.Player;
                            ';
                        $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                    ?>
                    <!-- สร้าง hearder ของตารางเพื่อแสดงข้อมูล-->
                    <table border="1">
                        <tr>
                           
                            </th>
                            <th width="100">
                                <div align="center">Player_id </div>
                            </th>
                            <th width="100">
                                <div align="center">Player_name</div>
                            </th>
                            <th width="100">
                                <div align="center"> Position </div>
                            </th>
                            <th width="100">
                                <div align="center"> Team_id </div>
                            </th>
                            
                            
                            
                        </tr>
                        <?php
                            $i = 1;
                            while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                        <tr>
                            
                            <td><?php echo $objResult["Player_id"]; ?></td>
                            <td><?php echo $objResult["Player_name"]; ?></td>
                            <td><?php echo $objResult["Position"]; ?></td>
                            <td><?php echo $objResult["Team_id"]; ?></td>
                            
                        </tr>
                        <?php
                            $i++;
                            }
                        ?>

                    <table>

            <ul>
                    
    </ol>
    <hr>
    <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="sutitar-03.php">เรียนรู้การแสดงผลการคำนวณและการสร้าง Chart ข้อมูล</a></button>
    <hr>   
    <br>
    <ol>
        <li><h3>เรียนรู้การแสดงผลการคำนวณจาก Database </h3>
            <?php 
                $sql = '
                    SELECT *
                    FROM volleyball.rank
                    ';
                $query_sql = mysqli_query($conn, $sql);
                $rs_sql=mysqli_fetch_assoc($query_sql);
            ?> 
            <!-- คำนวณคะแนนรวมทั้งหมด -->
            <?php 
                $sum="SELECT SUM(Total_Score ) AS Total_Score  FROM volleyball.rank ";
                $query_sum=mysqli_query($conn,$sum);
                $rs_sum=mysqli_fetch_assoc($query_sum);
            ?> 
            <table border="1">
                <tr>
                    <td> คะแนนรวมทั้งหมด :  <?php echo $rs_sum['Total_Score'] ?> </td>
                </tr>
            </table> 
            <br>
             <!-- คำนวณคะแนนรวมเฉลี่ย -->
             <?php 
                $avg="SELECT avg(Total_Score ) AS Total_Score  FROM volleyball.rank ";
                $query_avg=mysqli_query($conn,$avg);
                $rs_avg=mysqli_fetch_assoc($query_avg);
            ?> 
            <table border="1">
                <tr>
                    <td>คะแนนรวมเฉลี่ย :  <?php echo $rs_avg['Total_Score'] ?> </td>
                </tr>
            </table>
            <br>
            <!-- คำนวณคะแนนรวมที่น้อยที่สุด -->
            <?php 
                $min="SELECT min(Total_Score ) AS Total_Score  FROM volleyball.rank ";
                $query_min=mysqli_query($conn,$min);
                $rs_min=mysqli_fetch_assoc($query_min);
            ?> 
            <table border="1">
                <tr>
                    <td>คะแนนรวมที่น้อยที่สุด :  <?php echo $rs_min['Total_Score'] ?> </td>
                </tr>
            </table>
            <br>
            <!-- คำนวณคะแนนรวมที่มากที่สุด -->
            <?php 
                $max="SELECT max(Total_Score ) AS Total_Score  FROM volleyball.rank ";
                $query_max=mysqli_query($conn,$max);
                $rs_max=mysqli_fetch_assoc($query_max);
            ?> 
            <table border="1">
                <tr>
                    <td>คะแนนรวมที่มากที่สุด :  <?php echo $rs_max['Total_Score'] ?> </td>
                </tr>
            </table>
            <br> 
            <li><h3>เรียนรู้การสร้าง Chart ข้อมูล </h3>
            <!-- คิวรี่ข้อมูลจากตาราง -->
            <?php 
                $query = "SELECT Team_id, SUM(Total_Score ) as total FROM  volleyball.rank GROUP BY  Team_id";
                $result = mysqli_query($conn, $query);
                //นำข้อมูลที่ได้จากคิวรี่มากำหนดรูปแบบข้อมุลให้ถูกโครงสร้างของกราฟที่ใช้ *อ่าน docs เพิ่มเติม
                $datax = array();
                foreach ($result as $k) {
                $datax[] = "['".$k['Team_id']."'".", ".$k['total']."]";
                }
                //cut last commar
                $datax = implode(",", $datax);
                //แสดงข้อมูลก่อนนำไปแสดงบนกราฟ 
                // echo $datax; //ถ้าอยากเอาออก ก็ใส่ double slash ข้างหน้าครับ
                //<!-- คิวรี่ข้อมูลจากตาราง -->
                //<?php 
                $query2 = "SELECT Team_id,Total_Score as total FROM volleyball.rank GROUP BY Team_id ";
                $result2 = mysqli_query($conn, $query2);
                //นำข้อมูลที่ได้จากคิวรี่มากำหนดรูปแบบข้อมุลให้ถูกโครงสร้างของกราฟที่ใช้ *อ่าน docs เพิ่มเติม
                $datax2 = array();
                foreach ($result2 as $k2) {
                $datax2[] = "['".$k2['Team_id']."'".", ".$k2['total']."]";
                }
                //cut last commar
                $datax2 = implode(",", $datax2);
                //แสดงข้อมูลก่อนนำไปแสดงบนกราฟ 
                // echo $datax2; //ถ้าอยากเอาออก ก็ใส่ double slash ข้างหน้าครับ
            ?>
            <!-- เรียก js มาใช้งาน -->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});

                /*เรียกแสดงผลนฟังก์ชันของกราฟ */
                google.charts.setOnLoadCallback(drawChart1);
                google.charts.setOnLoadCallback(drawChart2);
                google.charts.setOnLoadCallback(drawChart3);
                
                /*เขียนฟังก์ชันเพื่อการเรียกใช้งานในการแสดงกราฟ */
                function drawChart1() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Summary per Team'],
                        <?php echo $datax;?>
                    ]);
                    var options = {
                        title: 'Score REPORT'
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                }
                function drawChart2() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Summary per Team'],
                        <?php echo $datax;?>
                    ]);
                    var options = {
                        title: 'Score REPORT'
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
                    chart.draw(data, options);
                    }
                function drawChart3() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Score Each'],
                        <?php echo $datax2;?>
                    ]);
                    var options = {
                        title: 'Score REPORT'
                    };
                    var chart = new google.visualization.BarChart(document.getElementById('barchart'));
                    chart.draw(data, options);
                }      
                </script>
                <!-- แสดงผล Chart ข้อมูล -->
               <div id="piechart" style="width: 900px; height: 500px;"></div>
               <div id="columnchart" style="width: 900px; height: 500px;"></div>
               <div id="barchart" style="width: 900px; height: 800px;"></div>  

                <?php 
                   $avg="SELECT avg(Total_Score ) AS Total_Score  FROM volleyball.rank ";
                   $query_avg=mysqli_query($conn,$avg);
                   $rs_avg=mysqli_fetch_assoc($query_avg);
              ?> 
               <table border="1">
                <tr>
                    <td>คะแนนรวมเฉลี่ย :  <?php echo $rs_avg['Total_Score'] ?> </td>
                </tr>
            </table>
            <br>

            <h2> เรียนรู้การ Delete ข้อมูลใน Database </h2>
    <ol>
        <li><h3>สร้าง form เพื่อ Delete Team_id </h3>
        <form style=" width: 33%; margin-left : 33%;" action="deleteID.php" method="post" name="Team">
        <table border="1">
            <tr>
                <td>Team id : </td>
                <td><input type="text" name="Team_id"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Delete Data">
    </form>
        <li><h3>สร้าง form เพื่อ Delete Team name </h3>
    <form style=" width: 33%; margin-left : 33%;" action="deleteName.php" method="GET" name="Team">
        <table border="1">
            <tr>
                <td>Team Name : </td>
                <td><input type="text" name="Team_Name"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Delete Data">
    </form>

    <li><h3>สร้าง form เพื่อ Delete Team ID แบบ Dropdown list </h3>
        <?php 
          $sql = '
            SELECT * 
            FROM  volleyball.rank ;
            ';
          $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
        ?> 
        <form style=" width: 33%; margin-left : 33%;" action="deleteID.php" method="post" name="Team_id">
          <table border="1">
            <tr>
                <td>EmployeeID : </td>
                <td><select name="Team_id">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["Team_id"]; ?>><?php echo $objResult["Team_id"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
          </table>
          <br>
          <input type="submit" value="Delete Data">
        </form> 

    </ol>
    <hr>
    <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="sutitar-05.php">เรียนรู้การสร้าง form เพื่อ delete และ search ข้อมูลใน database</a></button>
    <hr>
    <br>
    
    <h1 id="promotion">เรียนรู้การ Insert ข้อมูลใน Database </h1>
<h2>Insert Data : Team </h2>

<form style="width: 33%; margin-left: 33%;" action="insertdata.php" method="post" name="Team">
    <table border="1">
        <tr>
            <td>Team_id :  </td>
            <td><input type="text" name="Team_id"></td>
        </tr>
        <tr>
            <td>Team_name : </td>
            <td><input type="text" name="Team_name"></td>
        </tr>
        <tr>
            <td>Coach : </td>
            <td><input type="text" name="Coach"></td>
        </tr>
        <tr>
            <td>Home_city : </td>
            <td><input type="text" name="Home_city"></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Insert Data">
</form>


     <h2> เรียนรู้การ Search ข้อมูลใน Database </h2>
    <form style=" width: 33%; margin-left : 33%;" action="searchdata.php" method="GET" name="Team">
        <table border="1">
            <tr>
                <td>Team_id or Team_name keyword : </td>
                <td><input type="text" name="keyword"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Search Data">
    </form>     



    
                    
    </body>

</html>