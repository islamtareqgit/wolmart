@extends('admin.layouts.app')

@section('main-content')
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
                            <th scope="col"></th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="#"></a></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="">Edit</a>
                                <a class="btn btn-danger btn-sm" href="">Delete</a>
                            </td>
                        </tr>
                        
                        
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
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@endsection