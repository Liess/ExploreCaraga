@extends('admin.maintenance.mastermainte')

@section ('Maintenance title') Destinations @endsection

@section ('Page title')
<h3>Destinations</h3>
@endsection

@section ('breadcrumb')
<li><a href="/dashboard">Dashboard</a></li>
<li class="active">Maintenance</li>
<li class="active">Destinations</li>
@endsection


@section ('Content')

 

         <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix" style="padding-bottom: 50px;">
  <center> <button type="button" class="btn btn-info btn-addon m-b-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add</button> </center>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Province</th>
                                                <th>City</th>
                                                <th>Name</th>
                                                <th>tags</th>
                                                <th width="300px">Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Province</th>
                                                <th>City</th>
                                                <th>Name</th>
                                                <th>tags</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Agusan del sur</td>
                                                <td>Bayugan city</td>
                                                <td>Magkiangkang Cave</td>
                                                <td>adventure, cave, hiking</td>
                                                <td>a spectacular cave located at the mountainous barangay of Magkiankang.</td>
                                                <td>
                                                <div class="onoffswitch1">
                                                <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1" checked>
                                                <label class="onoffswitch1-label" for="myonoffswitch1">
                                                       <span class="onoffswitch1-inner"></span>
                                                        <span class="onoffswitch1-switch"></span>
                                                </label>
                                                 </div>
                                                </td>
                                                <td>
                                                <button type="button" class="btn btn-warning btn-addon m-b-sm"><i class="fa fa-edit"></i> Edit</button> 
                                                 <button type="button" class="btn btn-danger btn-addon m-b-sm"><i class="fa fa-times"></i> Delete</button>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Agusan del sur</td>
                                                <td>Bayugan city</td>
                                                <td>Magkiangkang Cave</td>
                                                <td>adventure, cave, hiking</td>
                                                <td>a spectacular cave located at the mountainous barangay of Magkiankang.</td>
                                                <td>
                                                <div class="onoffswitch1">
                                                <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1" checked>
                                                <label class="onoffswitch1-label" for="myonoffswitch1">
                                                       <span class="onoffswitch1-inner"></span>
                                                        <span class="onoffswitch1-switch"></span>
                                                </label>
                                                 </div>
                                                </td>
                                                <td>
                                                <button type="button" class="btn btn-warning btn-addon m-b-sm"><i class="fa fa-edit"></i> Edit</button> 
                                                 <button type="button" class="btn btn-danger btn-addon m-b-sm"><i class="fa fa-times"></i> Delete</button>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Agusan del sur</td>
                                                <td>Bayugan city</td>
                                                <td>Magkiangkang Cave</td>
                                                <td>adventure, cave, hiking</td>
                                                <td>a spectacular cave located at the mountainous barangay of Magkiankang.</td>
                                                <td>
                                                <div class="onoffswitch1">
                                                <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1" checked>
                                                <label class="onoffswitch1-label" for="myonoffswitch1">
                                                       <span class="onoffswitch1-inner"></span>
                                                        <span class="onoffswitch1-switch"></span>
                                                </label>
                                                 </div>
                                                </td>
                                                <td>
                                                <button type="button" class="btn btn-warning btn-addon m-b-sm"><i class="fa fa-edit"></i> Edit</button> 
                                                 <button type="button" class="btn btn-danger btn-addon m-b-sm"><i class="fa fa-times"></i> Delete</button>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Agusan del sur</td>
                                                <td>Bayugan city</td>
                                                <td>Magkiangkang Cave</td>
                                                <td>adventure, cave, hiking</td>
                                                <td>a spectacular cave located at the mountainous barangay of Magkiankang.</td>
                                                <td>
                                                <div class="onoffswitch1">
                                                <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1" checked>
                                                <label class="onoffswitch1-label" for="myonoffswitch1">
                                                       <span class="onoffswitch1-inner"></span>
                                                        <span class="onoffswitch1-switch"></span>
                                                </label>
                                                 </div>
                                                </td>
                                                <td>
                                                <button type="button" class="btn btn-warning btn-addon m-b-sm"><i class="fa fa-edit"></i> Edit</button> 
                                                 <button type="button" class="btn btn-danger btn-addon m-b-sm"><i class="fa fa-times"></i> Delete</button>  
                                                </td>
                                            </tr>

                                         
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>

                        </div>
       

<!-- add modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Add city</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form>
                                        <div class="form-group col-sm-6">
                                    <label>Province</label>
                                                  <select class="form-control">
                                                    <option>Agusan del norte</option>
                                                    <option>Agusan del sur</option>
                                                    <option>Dinagat islands</option>
                                                    <option>Surigao del norte</option>
                                                    <option>Surigao del sur</option>
                                                </select>
                                            
                                        </div>
                                                 <div class="form-group col-sm-6">
                                    <label>Cities</label>
                                                <select class="form-control">
                                                    <option>Bayugan</option>
                                                    <option>Bislig</option>

                                                </select>
                                            </div>

                                                  <div class="form-group col-sm-6">
                                    <label>Destination's tag</label>
                          <select class="js-states form-control" multiple="multiple" tabindex="-1" style="display: none; width: 100%">

                                            <option value="FAM">Family</option>
                                            <option value="ADV">adventure</option>
                                            <option value="RST">resto</option>
                                            <option value="HIK">Hiking</option>
                                    </select>                                        
                                        </div>
                                                    <div class="form-group col-sm-6">
                                    <label>Destination's name</label>
                          <input type="text" class="form-control"  required />                                          
                                        </div>
                                        <div class="form-group" style="padding-top:150px;">
                                            <label>Description</label>
<textarea class="form-control" rows="5" required=""></textarea>
                                        </div>
                                       
                               
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                        </div>
                                                             </form>
                                                    </div>
                                                </div>
                                            </div>
<!-- edit modal -->

@endsection

@section ('Script')

<script>



</script>

@endsection