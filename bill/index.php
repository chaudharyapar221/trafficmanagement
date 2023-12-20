<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRAFFIC MANAGEMENT SYSTEM OF NEPAL</title>
    <link rel="icon" href="https://logos-download.com/wp-content/uploads/2021/07/Emblem_of_Nepal.png" class="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
    <div class="row">
     <div class="col-md-12 mt-4">
      <div class="card-header">
      <center>
      <marquee direction="left"> नेपाल जस्तो देशमा साँघुरो सडकमा सवारी चालकको चाप धेरै हुने भएकाले ट्राफिक नियम पालना गर्नु निकै जरुरी छ ।

यस ब्लग पोष्टमा, हामी सबै ट्राफिक नियम उल्लङ्घनहरूलाई तिनीहरूको जरिवाना सहित सूचीबद्ध गर्दैछौं।


लाइसेन्स बिना ड्राइभिङदेखि लिएर लाइसेन्स नभएका नागरिकलाई तपाईंको गाडी चलाउन दिनुसम्म उल्लङ्घनहरू मान्न सकिन्छ।

तपाईंले काठमाडौं उपत्यका ट्राफिक प्रहरी कार्यालयले नेपालमा २०२३ को लागि आफ्नो वेबसाइटमा अपलोड गरेका उल्लङ्घनहरूको पूर्ण सूची हेर्न सक्नुहुन्छ।

</marquee>
 <img style="height:100px;" src="https://logos-download.com/wp-content/uploads/2021/07/Emblem_of_Nepal.png"></center>
       <h4 class="card-title">Fine Bill Statement</h4>
      </div>
       <div class="card-body">
        <form action="" method="post">
         <div class="row">
          <div class="col-md-6">
           <div class="form-group">
            <input type="text" class="form-control" name="officer_id" placeholder="Enter Licience No" require>
            </div>
            </div>
          <div class="col-md-6">
           <button  type="submit" name="filter_btn" class="btn btn-primary">Watch</button>
           <button onclick="window.print()" class="btn btn-primary">Print</button>
           </div>
          </div>
            </form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Driver's Name</th>
      <th scope="col">Licience No</th>
      <th scope="col">RegisterNo</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">Remark</th>
     


    </tr>
  </thead>
  <tbody>
   <?php
   $i = 1;
   $connection = mysqli_connect("localhost","root","","traffic_offense_db");
   if(isset($_POST['filter_btn']))
   {
    $officer_id = $_POST['officer_id'];
    $query = "SELECT * FROM `offense_list`  WHERE officer_id='$officer_id'  order by unix_timestamp(date_created) desc ";
    $query_run = mysqli_query($connection, $query);

    

    if(mysqli_num_rows($query_run) > 0)
    {
       while($row = mysqli_fetch_array($query_run))
       {
        
         ?>
          <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php  echo $row['officer_name']; ?> </td>
        <td><?php  echo $row['officer_id']; ?> </td>
         <td><?php  echo $row['ticket_no']; ?> </td>
      <td>Rs  <?php  echo $row['total_amount']; ?> </td>
          <td><?php echo ($row['status'] == 1) ? "Paid" : 'Pending' ?></td>
      <td><?php echo date("Y-m-d H:i",strtotime($row['date_created'])) ?></td>
      <td><?php  echo $row['remarks']; ?> </td>
      <td class="text-center">
            </tr>
        <?php
       }
    }else{
     ?>
<tr>
 <td colspan="8">No Record Found !</td>
  
     <?php
    }
   }
   ?>
   
    </tbody>
 </table>

<footer style="margin-top:40%" class="main-footer text-sm">
        <center><strong>All Right © Website Design By <a style="text-decoration:none; color:black;" href="https://chaudharyapar.com.np/">Mr.Arya Singh</a> </br>
        <!-- <a href=""></a> -->
        </strong>
        This Website for Nepal Traffic Managements
            </footer></center>

       </div>
     </div>

    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>