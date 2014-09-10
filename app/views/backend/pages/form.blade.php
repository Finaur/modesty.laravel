@extends('backend.layout.defaultView')

@section('content')

   <section class="vbox">
      <section class="scrollable padder">
         <div class="m-b-md">
            <h2 class="font-thin m-b">Form <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span></h2>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <section class="panel panel-default">
                  <header class="panel-heading font-bold"> 
                     Inline form 
                  </header>
                  <div class="panel-body">
                     <form class="form-inline" role="form">
                        <div class="form-group"> 
                           <label class="sr-only" for="exampleInputEmail2">Email address</label> 
                           <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"> 
                        </div>
                        <div class="form-group"> 
                           <label class="sr-only" for="exampleInputPassword2">Password</label> 
                           <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"> 
                        </div>
                        <div class="checkbox m-l m-r-xs"> 
                           <label class="i-checks"> 
                              <input type="checkbox">
                              <i></i> Remember me 
                           </label> 
                        </div>
                        <button type="submit" class="btn btn-default">
                           Sign in
                        </button> 
                        <a href="#modal-form" class="btn btn-success" data-toggle="modal">
                           Form in a modal
                        </a> 
                     </form>
                  </div>
               </section>
               <section class="panel panel-default">
                  <header class="panel-heading font-bold"> 
                     Element
                  </header>
                  <div class="panel-body">
                     <form class="form-horizontal" method="get">
                        <div class="form-group">
                           <label class="col-sm-2 control-label">
                              With help
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="text" class="form-control"> 
                                 <span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span> 
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-sm-2 control-label" for="input-id-1">
                              Label focus
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="text" class="form-control" id="input-id-1"> 
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">
                              Password
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="password" name="password" class="form-control"> 
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">
                              Placeholder
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="text" class="form-control" placeholder="placeholder"> 
                           </div>
                         </div>
                         <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Select</label> 
                           <div class="col-sm-10">
                              <select name="account" class="form-control m-b">
                                 <option>option 1</option>
                                 <option>option 2</option>
                                 <option>option 3</option>
                                 <option>option 4</option>
                              </select>
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Chosen</label> 
                           <div class="col-sm-10">
                              <select style="width:260px" class="chosen-select">
                                 <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                 </optgroup>
                                 <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                 </optgroup>
                              </select>
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Chosen multiple</label> 
                           <div class="col-sm-10">
                              <select style="width:260px" multiple class="chosen-select">
                                 <option value="AK">Alaska</option>
                                 <option value="HI">Hawaii</option>
                                 <option value="CA">California</option>
                                 <option value="NV">Nevada</option>
                                 <option value="OR">Oregon</option>
                                 <option value="WA">Washington</option>
                              </select>
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">
                              Custom Checkboxes & radios
                           </label> 
                           <div class="col-sm-10">
                              <div class="checkbox i-checks"> 
                                 <label> 
                                    <input type="checkbox" value=""> <i></i> O
                                       ption one 
                                 </label> 
                              </div>
                              <div class="checkbox i-checks"> 
                                 <label> 
                                    <input type="checkbox" checked value=""> 
                                    <i></i> Option two checked 
                                 </label> 
                              </div>
                              <div class="checkbox i-checks"> 
                                 <label> 
                                    <input type="checkbox" checked disabled value=""> 
                                    <i></i> Option three checked and disabled 
                                 </label> 
                              </div>
                              <div class="checkbox i-checks"> 
                                 <label> 
                                    <input type="checkbox" disabled value=""> 
                                    <i></i> Option four disabled 
                                 </label> 
                              </div>
                              <div class="radio i-checks"> 
                                 <label> 
                                    <input type="radio" name="a" value="option1"> 
                                    <i></i> Option one 
                                 </label> 
                              </div>
                              <div class="radio i-checks"> 
                                 <label> 
                                    <input type="radio" name="a" value="option2" checked> 
                                    <i></i> Option two checked 
                                 </label> 
                              </div>
                              <div class="radio i-checks"> 
                                 <label> 
                                    <input type="radio" value="option2" checked disabled> 
                                    <i></i> Option three checked and disabled 
                                 </label> 
                              </div>
                              <div class="radio i-checks"> 
                                 <label> 
                                    <input type="radio" name="a" disabled> <i></i> Option four disabled 
                                 </label> 
                              </div>
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">
                              Datepicker
                           </label> 
                           <div class="col-sm-10"> 
                              <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="12-02-2013" data-date-format="dd-mm-yyyy" > 
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">
                              File input
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"> 
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <!--Wyswyg bootstrap editor-->
                        <div class="form-group">
                           <label class="col-sm-2 control-label">
                              Wysiwyg
                           </label> 
                           <div class="col-sm-10">
                              <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
                                 <div class="btn-group">
                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font">
                                       <i class="fa fa-font"></i>
                                       <b class="caret"></b>
                                    </a> 
                                    <ul class="dropdown-menu"> </ul>
                                 </div>
                                 <div class="btn-group">
                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a> 
                                    <ul class="dropdown-menu">
                                       <li><a data-edit="fontSize 5" style="font-size:24px">Huge</a></li>
                                       <li><a data-edit="fontSize 3" style="font-size:18px">Normal</a></li>
                                       <li><a data-edit="fontSize 1" style="font-size:14px">Small</a></li>
                                    </ul>
                                 </div>
                                 <div class="btn-group">
                                   <a class="btn btn-default btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
                                   <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                 </div>
                                 <div class="btn-group"> 
                                    <a class="btn btn-default btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a> <a class="btn btn-default btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a> <a class="btn btn-default btn-sm" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a> <a class="btn btn-default btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a> 
                                 </div>
                                 <div class="btn-group"> 
                                    <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a> <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a> <a class="btn btn-default btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a> <a class="btn btn-default btn-sm" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a> 
                                 </div>
                                 <div class="btn-group"> 
                                    <a class="btn btn-default btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a> <a class="btn btn-default btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a> <a class="btn btn-default btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a> <a class="btn btn-default btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a> 
                                 </div>
                                 <div class="btn-group">
                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a> 
                                    <div class="dropdown-menu">
                                       <div class="input-group m-l-xs m-r-xs">
                                          <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink"/> 
                                          <div class="input-group-btn"> <button class="btn btn-default btn-sm" type="button">Add</button> </div>
                                       </div>
                                    </div>
                                    <a class="btn btn-default btn-sm" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a> 
                                 </div>
                                 <div class="btn-group hide"> 
                                    <a class="btn btn-default btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a> 
                                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" /> 
                                 </div>
                                 <div class="btn-group"> 
                                    <a class="btn btn-default btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a> <a class="btn btn-default btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a> 
                                 </div>
                              </div>
                              <div id="editor" name="xxx" class="form-control" style="overflow:scroll;height:350px;max-height:350px"> 
                                 
                              </div>

                           </div>
                        </div>
                        <!-- End ofWyswyg bootstrap editor-->
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                           <div class="form-group">
                              <label class="col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <button class="btn btn-s-md btn-primary">Submit</button>
                                 <button class="btn btn-s-md btn-info">Reset</button>
                              </div>
                           </div>
                     </form>
                  </div>
               </section>
            </div>
         </div>
      </section>
   </section>
   
@stop