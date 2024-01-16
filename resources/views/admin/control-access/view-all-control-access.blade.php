@extends('admin.layouts.app')
@section('title', 'Admin All View Control Access')
@section('description', '')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">View Control Access Details</h4>
                        </div>
                    </div>
                    <div class="iq-card-body" style="overflow-x:auto;">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"> List </th>
                                    <th scope="col"> Details </th>


                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">Dashboard</th>
                                    <th scope="row">
                                        @if (in_array(1, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Banners</th>
                                    <th scope="row">
                                        @if (in_array(2, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Categories</th>
                                    <th scope="row">
                                        @if (in_array(3, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Sub Categories</th>
                                    <th scope="row">
                                        @if (in_array(4, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Professionals</th>
                                    <th scope="row">
                                        @if (in_array(5, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Users</th>
                                    <th scope="row">
                                        @if (in_array(6, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Appointments</th>
                                    <th scope="row">
                                        @if (in_array(7, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Rating And Reviews</th>
                                    <th scope="row">
                                        @if (in_array(8, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Consultations</th>
                                    <th scope="row">
                                        @if (in_array(9, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Payment</th>
                                    <th scope="row">
                                        @if (in_array(10, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Prescription Management</th>
                                    <th scope="row">
                                        @if (in_array(11, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Notifications</th>
                                    <th scope="row">
                                        @if (in_array(12, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Group Therapy</th>
                                    <th scope="row">
                                        @if (in_array(13, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Report</th>
                                    <th scope="row">
                                        @if (in_array(14, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Profile Details</th>
                                    <th scope="row">
                                        @if (in_array(15, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Why Choose us</th>
                                    <th scope="row">
                                        @if (in_array(16, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Spotlight Member</th>
                                    <th scope="row">
                                        @if (in_array(17, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">App Link</th>
                                    <th scope="row">
                                        @if (in_array(18, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Contact Details</th>
                                    <th scope="row">
                                        @if (in_array(19, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Blog</th>
                                    <th scope="row">
                                        @if (in_array(20, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Testimonials</th>
                                    <th scope="row">
                                        @if (in_array(21, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">Page Content</th>
                                    <th scope="row">
                                        @if (in_array(22, $menus))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" onclick="location.href = '{{route('admin-edit-control-access',$admin->id)}}';" class="btn btn-primary">Edit All Access</button>
                                        <button type="button" class="btn btn-primary">Delete</button>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

