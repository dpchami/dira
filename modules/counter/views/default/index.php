<?php

$this->registerCss('
body {
    background-color: #dedede;
}

.main {
    width: 100%;
    position: relative;
    padding-bottom:20px;
}

nav.subbar {
  position: relative;
  width: 100%;
  border-radius: 0px;
  background: #fff;
  margin: 50px 0 -50px 0;
  padding: 10px 0 0 0;
  z-index: 2;
}
nav.subbar > ul.nav.nav-tabs {
  padding: 0 5px;
}

nav.subbar > ul.nav.nav-tabs > li.active > a {
    background: #dedede;
    border-top: 1px solid #a6a6a6;
    border-left: 1px solid #a6a6a6;
    border-right: 1px solid #a6a6a6;
    border-radius: 0px;
}

.content {
    margin-top: 70px;
    padding: 0 30px;
}

@media(min-width:768px){
  .subbar li span {
    display: inline;
  }
}

@media(min-width:992px) {
    .wrapper {
      padding-left: 50px;
    }

  .wrapper.toggled {
    padding-left: 200px;
  }

.navbar-btn {
    background: none;
    border: none;
    height: 35px;
    min-width: 35px;
    color: #fff;
}
.navbar-text {
  margin-top: 14px;
  margin-bottom: 14px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px;
  }
}

.panel-height{
  height: 120px;
}

');
?>
       
  <section class="main">
            
    <section class="tab-content">
                                   
        <div class="row">
         
          <div class="col-xs-6 col-sm-3">
              <div class="panel panel-primary">
                <div class="panel-heading">A Basic Panel</div>
                  <div class="panel-body">
                      <br/><br/><br/><br/>
                  </div>
              </div>
          </div>
          
          <div class="col-xs-6 col-sm-3">
              <div class="panel panel-success">
                <div class="panel-heading">A Basic Panel</div>
                  <div class="panel-body" style="max-height: 10;">
                    Deus<br/>
                    chami<br/>
                    hosanna<br/>
                    technology<br/>  
                  </div>
              </div>
          </div>
          
          <div class="col-xs-6 col-sm-3">
              <div class="panel panel-danger">
                <div class="panel-heading">A Basic Panel</div>
                  <div class="panel-body panel-height"> 
                  fdoinfds sdofjohisdfj
                  </div>
              </div>
          </div>
          
          <div class="col-xs-6 col-sm-3">
              <div class="panel panel-warning">
                <div class="panel-heading">A Basic Panel</div>
                  <div class="panel-body">
                      <br/><br/><br/><br/>
                  </div>
              </div>
          </div>
         
         <div class="col-xs-12 col-sm-9">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     Something
                 </div>
                 <div class="panel-body">
                     This layout uses tabs to demonstrate what you could do with it. It probably makes more sense to use individual pages/templates in a production app.
                     <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                 </div>
             </div>
         </div>
         
         <div class="col-xs-12 col-sm-3">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     Something
                 </div>
                 <div class="panel-body">
                     The sidebar is naturally responsive according to screen width. You can toggle it using the menu button in the topbar. Test it out by increasing/decreasing your screen width and watch it respond.
                 </div>
             </div>
             
             <div class="panel panel-default">
                 <div class="panel-heading">
                     Kaitani Labs
                 </div>
                 <div class="panel-body">
                  Deus chami
                 </div>
             </div>
          </div>
                   
        </div>
                   
      </section>
               
               <section class="tab-pane dfade" id="configuration">
                   <nav class="subbar">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-code"></i> <span>System</span></a></li>
                            <li><a href="#roles" data-toggle="tab"><i class="fa fa-user"></i> <span>Roles</span></a></li>
                        </ul>
                    </nav>
                    
                    <section class="tab-content content">
                        
                        <section class="tab-pane active fade in" id="access">
                            
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </section>
                        
                        <section class="tab-pane ffade" id="roles">
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-9">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="hidden-xs col-sm-4 col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Something
                                        </div>
                                        <div class="panel-body">
                                            <br/><br/><br/>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </section>
                        
                    </section>
                    
               </section>
</section>

