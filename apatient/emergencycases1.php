<?php include 'head.php'; 
        
include 'aside.php'; ?>

    
        <div class="page-wrapper">
      
       
             <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="btn-list">
                                  <a href="emergencycases1.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">New Collection</button></a>
                          
                              <a href="emergencycases.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">View Collection</button></a>
                                                        
                            
                                                        
                              
                            
                                       
                                </div>
                            </div>
                        </div>
                    </div>                   



       
       
            <div class="container-fluid">
               
                <div class="row">

                   
 <?php 
                            $sq=mysqli_query($con,"SELECT * FROM clients");
                            ?>


                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                            </div>
                           <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Pay Type</th>
                                            <th>Category</th>
                                            <th>Junk Type</th> 
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Status</th>
                                          
                                        </tr>
                                       
                                </thead>


                                <?php $k=1;
									while($hk=mysqli_fetch_array($sq))
									{ ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $k;?></th>
                                            <td><a href="emergency.php?id=<?php echo $hk['id']; ?>"><?php echo $hk['names'];?></a></td>
                                            <td><?php echo $hk['pay_type'];?></td>
                                            <td><?php echo $hk['client_type'];?></td>
                                            <td><?php echo $hk['gabage_type'];?></td>
                                            <td><?php echo $hk['location'];?></td>
                                            <td><?php echo $hk['contact'];?></td>
                                            <td><?php echo $hk['status'];?></td>
                                           
                                           
                                            </tr> 
                                        <?php  $k++; } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>








                
                    
                </div>
                
            <?php include 'footer.php'; ?>