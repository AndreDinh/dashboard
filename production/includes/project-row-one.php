<div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
      <div class="x_title">
         <h2>Project Profile</h2>
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
            <div class="x_content">
               <br />
               <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
               <form class="form-horizontal form-label-left" novalidate>
                  <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name <span class="required">*</span>
                     </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text">
                     </div>
                  </div>
                  <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name <span class="required">*</span>
                     </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text">
                     </div>
                  </div>
                  <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                     </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text">
                     </div>
                  </div>
                  <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kickstarter Username
                     </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text">
                     </div>
                  </div>
                  <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Indiegogo Username
                     </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text">
                     </div>
                  </div>
                  <br/>
                  <div class="form-group">
                     <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button id="send" type="submit" class="btn btn-success">Update</button>
                     </div>
                  </div>
               </form>
               </form>
            </div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_content">
               <br />
               <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
               <form class="form-horizontal form-label-left" novalidate>
                  <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Project URL <span class="required">*</span>
                     </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title</label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="resizable_textarea form-control" placeholder=""></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Description</label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="resizable_textarea form-control" placeholder=""></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="form-control">
                           <option>Art</option>
                           <option>Design</option>
                           <option>Music</option>
                           <option>Publishing</option>
                           <option>Tech</option>
                        </select>
                     </div>
                  </div>
               </form>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
$(document).ready(function() {
    autosize($('.resizable_textarea'));
    });
</script>