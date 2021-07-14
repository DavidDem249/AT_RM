<template>
    <div>
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Professors</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Professors</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">All Professors</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <!-- <div class="col-lg-12">
                <ul class="nav nav-pills mb-3">
                    <li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
                    <li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid View</a></li>
                </ul>
            </div> -->
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Professors  </h4>
                                <a href="add-professor.html" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Gender</th>
                                                <th>Education</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt="">
                                                </td>
                                                <td>Tiger Nixon</td>
                                                <td>Architect</td>
                                                <td>Male</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/07/25</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Female</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/08/14</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>