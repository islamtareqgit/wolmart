@extends('admin.layouts.app')

@section('main-content')
<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }

    #role_ad_modal ul li{

        list-style-type: none;
    }
    </style>
<div class="row">
    <div class="col">

        
        
        <h6 class="mb-0 text-uppercase">All users role</h6>
        <hr>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#role_ad_modal">Add new Role</button><br><br>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Permission</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="role-list">
                        {{--<tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                           
                            <td>@mdo</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                  </label>
                            
                            </td>
                            <td>
                                <a class="btn btn-info btn-sm" href="">Edit</a>
                                <a class="btn btn-danger btn-sm" href="">Delete</a>
                            </td>
                        </tr>--}}
                        
                        
                    </tbody>
                </table>
            </div>
        </div>


        
    </div>
</div>

{{--Modal for new role--}}

<div class="modal fade show" id="role_ad_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <form id="role_add_form" method="POST">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add new Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="msg"></div>

            <div class="form-group">

          <label for="">Role Name</label>
          <input name="name" type="text" class="form-control">

            </div>
            <div class="form-group">
                
          <label for="">Permissions</label>
          <hr>
          <ul>
            <li><input name="permission[]" type="checkbox" value="Dashboard" id="Dashboard"> <label for="Dashboard">Dashboard <label></li>
            <li><input name="permission[]" type="checkbox" value="Post" id="Post"> <label for="Post"> Post <label></li>
            <li><input name="permission[]"  type="checkbox" value="Product" id="Product"> <label for="Product"> Product <label></li>
            <li><input name="permission[]" type="checkbox" value="Orders" id="Orders"> <label for="Orders"> Orders <label></li>
            <li><input name="permission[]" type="checkbox" value="Users" id="Users"> <label for="Users"> Users <label></li>
            <li><input name="permission[]" type="checkbox" value="Settings" id="Settings"> <label for="Settings"> Settings <label></li>
            <li><input name="permission[]" type="checkbox" value="Slider" id="Slider"> <label for="Slider">Slider <label></li>





                


          </ul>

            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>


@endsection