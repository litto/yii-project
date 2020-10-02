<?php $this->beginContent('@app/views/layouts/admin.php'); ?>
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;


?>


  <div class="main-content">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="<?php echo Url::base(); ?>/home">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo Url::base(); ?>/article/index">Articles</a>
                        </li>
                        <li class="active">List</li>
                    </ul><!-- /.breadcrumb -->

                    <!-- #section:basics/content.searchbox -->
                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div><!-- /.nav-search -->

                    <!-- /section:basics/content.searchbox -->
                </div>

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">


                    <!-- /section:settings.box -->


                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
<div class="row">
<div class="col-xs-12">
                            <div class="widget-box">
                                        <div class="widget-header widget-header-small">
                                            <h5 class="widget-title lighter">Search Here</h5>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main">
                        <form class="form-search" method="post" enctype="multipart/form-data" action="<?php echo Url::base(); ?>/article/index">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="input-group">
                                                                <input type="text" name="keyword" class="form-control search-query" placeholder="Type your query" />
                                                                <span class="input-group-btn">
                                                                    <button type="submit" name="submit" class="btn btn-purple btn-sm">
                                                                        Search
                                                                        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            </div>
<div class="col-xs-12 col-sm-3">
                                <a class="btn btn-app btn-primary btn-xs radius-4" href="<?php echo Url::base(); ?>/article/create">
                                            <i class="ace-icon fa fa-pencil-square-o bigger-160"></i>

                                            Create
                                            <span class="badge badge-transparent">
                                            
                                            </span>
                                        </a>
                         


                                                    </div>      

                                                    </div>
                                                
                                            </div>
                                        </div>
                                    </div>
</div>


</div></br>

      

                        <div class="table-header">
                                Article Listings
                                    </div>

                    
  <?php 

  if(count($records) > 0){  ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center">
                                                    <label class="position-relative">
                                                        <input type="checkbox" class="ace" onclick="checkAll(this);" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </th>
                                                <th>Title </th>
                                                 <th>Image </th>
                                            <th>Date</th>

                                            
                                                <th class="hidden-480">Status</th>

                                                <th></th>
                                            </tr>
                                        </thead>
 <input type="hidden" name="count" id="count" value="<?php echo count($records);?>" />
                                        <tbody>
                                            <?php  

                                            for($i=0;$i<count($records);$i++){ 
$id=$records[$i]['id'];

$image=$records[$i]['image'];  
                                             ?>
                                          <tr>
                                                <td class="center">
                                                    <label class="position-relative">
                                                        <input type="checkbox" class="ace" name="chkId<?php echo $i;?>" id="chkId<?php echo $i;?>" value="<?php echo $records[$i]['id'];?>"  />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>
  <input type="hidden" name="id<?php echo $i;?>" value="<?php echo $records[$i]['id'];?>" />
                                    <td>
                                                 <?php echo $records[$i]['title']; ?>

                                            </td>
                                        
                                            <td class="hidden-480"><?php echo $records[$i]["created"];?>
            </td>

                                   <td class="hidden-480">

                                    <img src="<?php echo Url::base().'/uploads/'.$image;?>" height="100px" width="100px" />
            </td>
                                            
                                                <td class="hidden-480">
                                                

                                                    <?php if($records[$i]['published']==1){ ?>

<span class="label label-success">Published</span>
<?php }else if($records[$i]['published']==0) {?>
<span class="label label-important ">Unpublished</span>
<?php } ?>
                                                </td>

                                                <td>
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        
                                                        <a class="btn btn-xs btn-info" href="<?php echo Url::base().'/article/edit/'.$id; ?>">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </a>
                                                        <a class="btn btn-xs btn-success" href="<?php echo Url::base().'/article/publish/'.$id;?>" >
                                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                                        </a>
                                      
                                      <a class="btn btn-xs btn-warning" href="<?php echo Url::base().'/article/unpublish/'.$id;?>">
                                                            <i class="ace-icon fa  fa-eye-slash bigger-120"></i>
                                                        </a>
                                            

                                                        <a class="btn btn-xs btn-danger"  href="<?php echo Url::base().'/article/delete/'.$id;?>">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </a>

                                            
                                                    </div>

                                                    <div class="hidden-md hidden-lg">
                                                        <div class="inline position-relative">
                                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    

                                                                <li>
                                                                    <a href="" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a class="tooltip-error" data-rel="tooltip" title="Delete" href="<?php echo Url::base().'/article/delete/'.$id;?>">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                        <li>
                                                                    <a  class="tooltip-success" data-rel="tooltip" title="Publish" href="<?php echo Url::base().'/article/publish/'.$id;?>">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                                    <li>
                                                                    <a class="tooltip-success" data-rel="tooltip" title="Unpublish" href="<?php echo Url::base().'/article/unpublish/'.$id;?>">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-eye-slash bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
    <?php } ?>
        
                                        </tbody>
                                    </table>
                                    </form>
                                </div><!-- /.span -->
                            </div><!-- /.row -->

                                        <div class="modal-footer no-margin-top">

                                        	<?= LinkPager::widget(['pagination' => $pagination]) ?>
                                        </div>


                                                                                <?php }else{  ?>


<div class="alert alert-block alert-danger">

                                Sorry...No Records Found..

                            </div>

                                        <?php } ?>


                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content -->


            <div id="dialog-confirm" class="hide">
                                        <div class="alert alert-info bigger-110">
                                            These items will be permanently deleted and cannot be recovered.
                                        </div>

                                        <div class="space-6"></div>

                                        <p class="bigger-110 bolder center grey">
                                            <i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
                                            Are you sure?
                                        </p>
                                    </div><!-- #dialog-confirm -->


                                                <div id="publish-confirm" class="hide">
                                        <div class="alert alert-info bigger-110">
                                            These items will be Published.
                                        </div>

                                        <div class="space-6"></div>

                                        <p class="bigger-110 bolder center grey">
                                            <i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
                                            Are you sure?
                                        </p>
                                    </div><!-- #dialog-confirm -->

                                                <div id="unpublish-confirm" class="hide">
                                        <div class="alert alert-info bigger-110">
                                            These items will be Unpublished.
                                        </div>

                                        <div class="space-6"></div>

                                        <p class="bigger-110 bolder center grey">
                                            <i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
                                            Are you sure?
                                        </p>
                                    </div><!-- #dialog-confirm -->


                                    <div class="article"> </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

     <script src="<?php echo Url::base(); ?>/admin_theme/assets/js/jquery.min.js"></script>
    <script src="<?php echo Url::base(); ?>/admin_theme/assets/js/jquery.mobile.custom.min.js"></script>
    <script src="<?php echo Url::base(); ?>/admin_theme/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo Url::base(); ?>/admin_theme/assets/js/jquery-ui.custom.min.js"></script>
    <script src="<?php echo Url::base(); ?>/admin_theme/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo Url::base(); ?>/admin_theme/assets/js/util.js"></script>
    <script src="<?php echo Url::base(); ?>/admin_theme/assets/js/ace-elements.min.js"></script>
    <script src="<?php echo Url::base(); ?>/admin_theme/assets/js/ace.min.js"></script>
    

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
            
                $( "#datepicker" ).datepicker({
                    showOtherMonths: true,
                    selectOtherMonths: false,
                    //isRTL:true,
            
                    
                    /*
                    changeMonth: true,
                    changeYear: true,
                    
                    showButtonPanel: true,
                    beforeShow: function() {
                        //change button colors
                        var datepicker = $(this).datepicker( "widget" );
                        setTimeout(function(){
                            var buttons = datepicker.find('.ui-datepicker-buttonpane')
                            .find('button');
                            buttons.eq(0).addClass('btn btn-xs');
                            buttons.eq(1).addClass('btn btn-xs btn-success');
                            buttons.wrapInner('<span class="bigger-110" />');
                        }, 0);
                    }
            */
                });
            
            
                //override dialog's title function to allow for HTML titles
                $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
                    _title: function(title) {
                        var $title = this.options.title || '&nbsp;'
                        if( ("title_html" in this.options) && this.options.title_html == true )
                            title.html($title);
                        else title.text($title);
                    }
                }));
                $( "#id-btn-dialog2" ).on('click', function(e) {
                    e.preventDefault();
                
                    $( "#dialog-confirm2" ).removeClass('hide').dialog({
                        resizable: false,
                        modal: true,
                        title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
                        title_html: true,
                        buttons: [
                            {
                                html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Delete all items",
                                "class" : "btn btn-danger btn-xs",
                                click: function() {
                                    $( this ).dialog( "close" );
                                }
                            }
                            ,
                            {
                                html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
                                "class" : "btn btn-xs",
                                click: function() {
                                    $( this ).dialog( "close" );
                                }
                            }
                        ]
                    });
                });
            
            
            
                
                

                    
            });
        </script>


<?php $this->endContent(); ?>







