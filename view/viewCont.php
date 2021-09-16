<?php

require('viewContInner.php');

?>

<html>
    <head></head>
    <body>
        <div>
            <?php if($result->num_rows >0) {
                $ctr=0;
                ?>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Sl. No.</th>
						<th>Title</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($row=$result->fetch_array()){
                    // print_r($row);//exit;  
                   $ctr++;
                   $name=$row['vchName'];
                  // echo $name;exit;
                   $phn=$row['vchPhn'];
                   $email=$row['vchEmail'];
                   $mesg=$row['vchMsg'];
                   ?><tr>
                       <td><?php echo $ctr;?></td> 
                       <td><?php echo $name;?></td>
                       <td><?php echo $phn;?></td>
                       <td><?php echo $email;?></td>
                       <td><?php echo $mesg;?></td>
                       <td><?php echo 'edit';?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            
            <?php } else { ?>
            <div>No record found</div>
                <?php } ?> 
            </table>
        </div>
        
        
        
    </body>
</html>