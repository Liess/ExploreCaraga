@extends('admin.maintenance.mastermainte')

@section ('Maintenance title') Cities @endsection

@section ('Page title')
<h3>Cities</h3>
@endsection

@section ('breadcrumb')
<li><a href="/dashboard">Dashboard</a></li>
<li class="active">Maintenance</li>
<li class="active">Cities</li>
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
                                                <th>Province</th>
                                                <th>Name</th>
                                                <th width="600px">Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Seal</th>
                                                <th>Province</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td><img src="images/bayuganseal.jpg" width="60" alt=""/></td>
                                                <td>Agusan del sur</td>
                                                <td>Bayugan city</td>
                                                <td>Bayugan, officially The City of Bayugan (Cebuano: Dakbayan sa Bayugan; Filipino: Lungsod ng Bayugan), is a city in the province of Agusan del Sur, Philippines. It has a population of 103,202 according to the 2015 q39825.</td>
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
                                                <td><img src="images/bayuganseal.jpg" width="60" alt=""/></td>
                                                <td>Agusan del sur</td>
                                                <td>Bayugan city</td>
                                                <td>Bayugan, officially The City of Bayugan (Cebuano: Dakbayan sa Bayugan; Filipino: Lungsod ng Bayugan), is a city in the province of Agusan del Sur, Philippines. It has a population of 103,202 according to the 2015 q39825.</td>
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
                                                <td><img src="images/bayuganseal.jpg" width="60" alt=""/></td>
                                                <td>Agusan del sur</td>
                                                <td>Bayugan city</td>
                                                <td>Bayugan, officially The City of Bayugan (Cebuano: Dakbayan sa Bayugan; Filipino: Lungsod ng Bayugan), is a city in the province of Agusan del Sur, Philippines. It has a population of 103,202 according to the 2015 q39825.</td>
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
                                                <td><img src="images/bayuganseal.jpg" width="60" alt=""/></td>
                                                <td>Agusan del sur</td>
                                                <td>Bayugan city</td>
                                                <td>Bayugan, officially The City of Bayugan (Cebuano: Dakbayan sa Bayugan; Filipino: Lungsod ng Bayugan), is a city in the province of Agusan del Sur, Philippines. It has a population of 103,202 according to the 2015 q39825.</td>
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
                                        <div class="form-group col-sm-4">
                                    <label>Province's seal</label>
                                            <input type="file" class="form-control"  name="myfile" required />
                                            
                                        </div>
                                                 <div class="form-group col-sm-4">
                                    <label>Province</label>
                                                <select class="form-control m-b-sm">
                                                    <option>Agusan del norte</option>
                                                    <option>Agusan del sur</option>
                                                    <option>Dinagat islands</option>
                                                    <option>Surigao del norte</option>
                                                    <option>Surigao del sur</option>
                                                </select>
                                            </div>
                                                  <div class="form-group col-sm-4">
                                    <label>City's name</label>
                                            <input type="text" class="form-control"  required />                                           
                                        </div>
                                        </br>
                                        <div class="form-group" style="padding-top:69px;">
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