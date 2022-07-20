 BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Booking</h3>
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
                                <h4>User Booking Details</h4>
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
                                   
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Proof Of Installation</th>
                                    <th>Proof of Delivery</th>
                                    <th>Booking Date</th>
                                    
                                </tr>sfsdfsdff
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
                                    <td><?php echo $set['name']?></td>
                                    <td><?php echo $set['phone']?></td>
                                    <td><?php echo $set['address']?></td>
                                    <td><img style ="width:100px; height: 100px;"src="<?=base_url()?>images/booking_img/<?php echo $set['proof_of_installation']?>"></td>
                                    <td><img style ="width:100px; height: 100px;"src="<?=base_url()?>images/booking_img/<?php echo $set['proof_of_delivery']?>"></td>
                                    <td><?php echo $set['booking_date']?></td>
                                </tr>
                                
                            
                            <?php }
                            }?>
                            </tbody>
                            <tfoot>
                            <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Subcategory</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Proof Of Installation</th>
                                    <th>Proof of Delivery</th>
                                    <th>Booking Date</th>
                                    
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