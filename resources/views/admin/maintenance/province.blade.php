@extends('admin.maintenance.mastermainte')

@section ('Maintenance title') Province @endsection

@section ('Page title')
<h3>Provinces</h3>
@endsection

@section ('breadcrumb')
<li><a href="/dashboard">Dashboard</a></li>
<li class="active">Maintenance</li>
<li class="active">Provinces</li>
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
                                                <th width="60px">Seal</th>
                                                <th>Name</th>
                                                <th width="650px">Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Seal</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td><img src="images/agusannorteseal.png" width="60" alt=""/></td>
                                                <td>Agusan del norte</td>
                                                <td>Agusan del Norte is a province in the Philippines located in the Caraga region of Mindanao. Its capital is the city of Cabadbaran and it is bordered on the northeast by Surigao del Norte.</td>
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
                                                <td><img src="images/agusannorteseal.png" width="60" alt=""/></td>
                                                <td>Agusan del norte</td>
                                                <td>Agusan del Norte is a province in the Philippines located in the Caraga region of Mindanao. Its capital is the city of Cabadbaran and it is bordered on the northeast by Surigao del Norte.</td>
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
                                                <td><img src="images/agusannorteseal.png" width="60" alt=""/></td>
                                                <td>Agusan del norte</td>
                                                <td>Agusan del Norte is a province in the Philippines located in the Caraga region of Mindanao. Its capital is the city of Cabadbaran and it is bordered on the northeast by Surigao del Norte.</td>
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
                                                <td><img src="images/agusannorteseal.png" width="60" alt=""/></td>
                                                <td>Agusan del norte</td>
                                                <td>Agusan del Norte is a province in the Philippines located in the Caraga region of Mindanao. Its capital is the city of Cabadbaran and it is bordered on the northeast by Surigao del Norte.</td>
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
                                                            <h4 class="modal-title" id="myModalLabel">Add province</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form>
                                        <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Province's seal</label>
                                            <input type="file" class="form-control"  name="myfile" required />
                                            
                                        </div>
                                                 <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Province's name</label>
                                            <input type="text" class="form-control"  required />
                                            
                                        </div>
                                        <div class="form-group">
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