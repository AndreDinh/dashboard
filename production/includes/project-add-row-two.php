<div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
      <div class="x_title">
         <h2>Project Image - Image must be 1800 x 1200px.</h2>
         <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
               <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
               </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
         </ul>
         <div class="clearfix"></div>
      </div>
      <div class="x_content">
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel-body">
               <!-- Standar Form -->
               <h4>Select files from your computer</h4>
               <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                  <div class="form-inline">
                     <div class="form-group">
                        <input type="file" name="files[]" id="js-upload-files" multiple>
                     </div>
                     <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
                  </div>
               </form>
               <!-- Drop Zone -->
               <h4>Or drag and drop files below</h4>
               <div class="upload-drop-zone" id="drop-zone">
                  Just drag and drop files here
               </div>
               <!-- Progress Bar -->
               <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                     <span class="sr-only">60% Complete</span>
                  </div>
               </div>
               <!-- Upload Finished -->
               <div class="js-upload-finished">
                  <h3>Processed files</h3>
                  <div class="list-group">
                     <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
                  </div>
               </div>
            </div>
            <!-- /container -->
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_content">
               <br/>
               <img style="max-width: 100%; height: auto;" src="http://placehold.it/1800x1200">
            </div>
         </div>
      </div>
   </div>
</div>