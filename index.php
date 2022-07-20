 BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3> All Booking</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>dashboard"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="<?php echo base_url() ?>dashboard">Admin</a></li>
                        <li class="active"><a href="#">Booking</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php if($this->session->flashdata('success')){?>
        <div class="alert alert-success mb-4" role="alert"> <i class="flaticon-cancel-12 close" data-dismiss="alert"></i> <strong>Success!</strong> <?php  echo $this->session->flashdata('success');?>  </div>
        <?php  }            ?>
        
        <div class="row" id="cancel-row">
            
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-6 col-6"   >
                                <h4>Booking</h4>
                            </div>
                            <!-- <div class="col-xl-6 col-md-6 col-sm-6 text-right col-6">
                                <a class="btn btn-sm btn-info mt-3 mr-2" href="<?php echo base_url('banner_add'); ?>">Add</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%">                                        <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Subcategory</th>
                                    <th>Order ID </th>
                                    <th>Booking Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($data) {
                            $number = 1;
                            foreach ($data as $set ) {
                            
                            ?>
                            
                                
                                <tr>
                                    
                                    <td class="text-primary">  <?php echo $number; $number++; ?></td>
                                    <td><?php echo $set['category_title']?></td>
                                    <td><?php echo $set['product_title']?></td>
                                    <td><?php echo $set['booking_id']?></td>
                                    <td><?php echo $set['booking_date']?></td>
                                    <td>
                                        <ul class="table-controls">
                                        <li>
                                            <select class="form-control update_status" style="border-radius:10px" id="<?php echo $set['booking_id'];  ?>" >
                                     <option > Update status </option>
                                     <option value="1" class="text-info"> In Progress </option>
                                     <option value="2" class="text-success"> Approved </option>
                                     <option value="3" class="text-danger"> Rejected</option>
                                </select>
                                        </li>
                                        <li>
                                                 
                             <?php 
                             if($set['booking_status']==1){
                                   ?>
                                   <button class="btn btn-info" type="button">In Progress</button>
                                   <?php
                                   }
                                   else if($set['booking_status']==2){
                                   ?>
                                   <button class="btn btn-success " type="button">Approved</button>
                                   <?php
                                   }
                                   else if($set['booking_status']==3){
                                   ?>
                                   <button class="btn btn-danger " type="button">Rejected</button>
                                   <?php
                                   }
                                  
                               ?>
                           
                                        </li>
                                    </ul>
                             
                                    </td>
                                    <td><ul class="table-controls">
                                        <li>
                                            <a href="<?php echo base_url('view_booking'); ?>/<?php echo $set['booking_id']?>" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-info">
                                                View
                                            </a>
                                        </li>
                                        
                                    </ul></td>
                                    
                                </tr>
                                
                            
                            <?php }
                            }?>
                            </tbody>
                            <tfoot>
                            <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Subcategory</th>
                                    <th>Order ID </th>
                                    <th>Booking Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                   
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--  END CONTENT PART  -->
</div>
<!-- END MAIN CONTAINER