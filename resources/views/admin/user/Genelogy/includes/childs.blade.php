    <tr height="50">
        @if ($tree->left_user_id)
            @php
                $left_user = \App\Models\User::where('id', $tree->left_user_id)->first();
                $left_tree = \App\Models\Tree::where('user_id', $left_user->id)->first();
            @endphp
            @if ($left_user->rank_id == null || $left_user->rank_id <= 3)

                @if ($left_tree)
                    @if ($left_tree->left_user_id)
                        <td colspan="2" class="table-primary">
                            <a href="{{ route('admin-child-genealogy', $left_tree->left_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($left_tree->left_user->photo)src="{{ asset('storage/user/thumbnail/'.$left_tree->left_user->photo) }}" @elseif($left_tree->left_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($left_tree->left_user->name) }} <br>
                                    {{ $left_tree->left_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="2" class="table-primary">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($left_tree->middle_user_id)
                        <td colspan="2" class="table-primary">

                            <a href="{{ route('admin-child-genealogy', $left_tree->middle_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($left_tree->middle_user->photo)src="{{ asset('storage/user/thumbnail/'.$left_tree->middle_user->photo) }}" @elseif($left_tree->middle_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($left_tree->middle_user->name) }}
                                    <br>
                                    {{ $left_tree->middle_user->member_id }}
                                </p>
                            </a>
                        </td>
                    @else
                        <td colspan="2" class="table-primary">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($left_tree->right_user_id)
                        <td colspan="2" class="table-primary">

                            <a href="{{ route('admin-child-genealogy', $left_tree->right_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($left_tree->right_user->photo)src="{{ asset('storage/user/thumbnail/'.$left_tree->right_user->photo) }}" @elseif($left_tree->right_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($left_tree->right_user->name) }} <br>
                                    {{ $left_tree->right_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="2" class="table-primary">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                @else
                    <td colspan="2" class="table-primary">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="2" class="table-primary">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="2" class="table-primary">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>

                @endif
            @else
                @if ($left_tree)
                    @if ($left_tree->left_user_id)
                        <td colspan="1" class="table-primary">

                            <a href="{{ route('admin-child-genealogy', $left_tree->left_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($left_tree->left_user->photo)src="{{ asset('storage/user/thumbnail/'.$left_tree->left_user->photo) }}" @elseif($left_tree->left_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($left_tree->left_user->name) }} <br>
                                    {{ $left_tree->left_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-primary">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($left_tree->middle_user_id)
                        <td colspan="1" class="table-primary">

                            <a href="{{ route('admin-child-genealogy', $left_tree->middle_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($left_tree->middle_user->photo)src="{{ asset('storage/user/thumbnail/'.$left_tree->middle_user->photo) }}" @elseif($left_tree->middle_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($left_tree->middle_user->name) }}
                                    <br>
                                    {{ $left_tree->middle_user->member_id }}
                                </p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-primary">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($left_tree->right_user_id)
                        <td colspan="1" class="table-primary">

                            <a href="{{ route('admin-child-genealogy', $left_tree->right_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($left_tree->right_user->photo)src="{{ asset('storage/user/thumbnail/'.$left_tree->right_user->photo) }}" @elseif($left_tree->right_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($left_tree->right_user->name) }} <br>
                                    {{ $left_tree->right_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-primary">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($left_tree->fourth_user_id)
                        <td colspan="1" class="table-primary">

                            <a href="{{ route('admin-child-genealogy', $left_tree->fourth_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($left_tree->fourth_user->photo)src="{{ asset('storage/user/thumbnail/'.$left_tree->fourth_user->photo) }}" @elseif($left_tree->fourth_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($left_tree->fourth_user->name) }} <br>
                                    {{ $left_tree->fourth_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-primary">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                @else
                    <td colspan="1" class="table-primary">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="1" class="table-primary">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="1" class="table-primary">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="1" class="table-primary">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                @endif
            @endif
        @else
            <td colspan="6" class="table-primary"><a href="#">

                    <p> Vacant Place </p>
                </a></td>
        @endif
        <!-- left Leg End -->
        <!-- Middle Leg Start -->

        @if ($tree->middle_user_id)
            @php
                $middle_user = \App\Models\User::where('id', $tree->middle_user_id)->first();
                $middle_tree = \App\Models\Tree::where('user_id', $middle_user->id)->first();
            @endphp
            @if ($middle_user->rank_id == null || $middle_user->rank_id <= 3)
                @if ($middle_tree)
                    @if ($middle_tree->left_user_id)
                        <td colspan="2" class="table-success">
                            <a href="{{ route('admin-child-genealogy', $middle_tree->left_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($middle_tree->left_user->photo)src="{{ asset('storage/user/thumbnail/'.$middle_tree->left_user->photo) }}" @elseif($middle_tree->left_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($middle_tree->left_user->name) }} <br>
                                    {{ $middle_tree->left_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="2" class="table-success">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($middle_tree->middle_user_id)
                        <td colspan="2" class="table-success">

                            <a href="{{ route('admin-child-genealogy', $middle_tree->middle_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($middle_tree->middle_user->photo)src="{{ asset('storage/user/thumbnail/'.$middle_tree->middle_user->photo) }}" @elseif($middle_tree->middle_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($middle_tree->middle_user->name) }}
                                    <br>
                                    {{ $middle_tree->middle_user->member_id }}
                                </p>
                            </a>
                        </td>
                    @else
                        <td colspan="2" class="table-success">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($middle_tree->right_user_id)
                        <td colspan="2" class="table-success">

                            <a href="{{ route('admin-child-genealogy', $middle_tree->right_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($middle_tree->right_user->photo)src="{{ asset('storage/user/thumbnail/'.$middle_tree->right_user->photo) }}" @elseif($middle_tree->right_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($middle_tree->right_user->name) }} <br>
                                    {{ $middle_tree->right_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="2" class="table-success">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                @else
                    <td colspan="2" class="table-success">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="2" class="table-success">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="2" class="table-success">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>

                @endif
            @else
                @if ($middle_tree)
                    @if ($middle_tree->left_user_id)
                        <td colspan="1" class="table-success">
                            <a href="{{ route('admin-child-genealogy', $middle_tree->left_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($middle_tree->left_user->photo)src="{{ asset('storage/user/thumbnail/'.$middle_tree->left_user->photo) }}" @elseif($middle_tree->left_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($middle_tree->left_user->name) }} <br>
                                    {{ $middle_tree->left_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-success">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($middle_tree->middle_user_id)
                        <td colspan="1" class="table-success">

                            <a href="{{ route('admin-child-genealogy', $middle_tree->middle_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($middle_tree->middle_user->photo)src="{{ asset('storage/user/thumbnail/'.$middle_tree->middle_user->photo) }}" @elseif($middle_tree->middle_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($middle_tree->middle_user->name) }}
                                    <br>
                                    {{ $middle_tree->middle_user->member_id }}
                                </p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-success">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($middle_tree->right_user_id)
                        <td colspan="1" class="table-success">

                            <a href="{{ route('admin-child-genealogy', $middle_tree->right_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($middle_tree->right_user->photo)src="{{ asset('storage/user/thumbnail/'.$middle_tree->right_user->photo) }}" @elseif($middle_tree->right_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($middle_tree->right_user->name) }} <br>
                                    {{ $middle_tree->right_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-success">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($middle_tree->fourth_user_id)
                        <td colspan="1" class="table-success">

                            <a href="{{ route('admin-child-genealogy', $middle_tree->fourth_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($middle_tree->fourth_user->photo)src="{{ asset('storage/user/thumbnail/'.$middle_tree->fourth_user->photo) }}" @elseif($middle_tree->fourth_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($middle_tree->fourth_user->name) }} <br>
                                    {{ $middle_tree->fourth_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-success">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                @else
                    <td colspan="1" class="table-success">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="1" class="table-success">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="1" class="table-success">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="1" class="table-success">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                @endif
            @endif
        @else
            <td colspan="6" class="table-success"><a href="#">

                    <p> Vacant Place </p>
                </a></td>
        @endif
        <!-- Middle Leg End -->

        <!-- Right Leg Start -->
        @if ($tree->right_user_id)
            @php
                $right_user = \App\Models\User::where('id', $tree->right_user_id)->first();
                $right_tree = \App\Models\Tree::where('user_id', $tree->right_user->id)->first();
            @endphp

            @if ($right_user->rank_id == null || $right_user->rank_id <= 3)
                @if ($right_tree)
                    @if ($right_tree->left_user_id)
                        <td colspan="2" class="table-warning">
                            <a href="{{ route('admin-child-genealogy', $right_tree->left_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($right_tree->left_user->photo)src="{{ asset('storage/user/thumbnail/'.$right_tree->left_user->photo) }}" @elseif($right_tree->left_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($right_tree->left_user->name) }} <br>
                                    {{ $right_tree->left_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="2" class="table-warning">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($right_tree->middle_user_id)
                        <td colspan="2" class="table-warning">

                            <a href="{{ route('admin-child-genealogy', $right_tree->middle_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($right_tree->middle_user->photo)src="{{ asset('storage/user/thumbnail/'.$right_tree->middle_user->photo) }}" @elseif($right_tree->middle_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($right_tree->middle_user->name) }}
                                    <br>
                                    {{ $right_tree->middle_user->member_id }}
                                </p>
                            </a>
                        </td>
                    @else
                        <td colspan="2" class="table-warning">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($right_tree->right_user_id)
                        <td colspan="2" class="table-warning">

                            <a href="{{ route('admin-child-genealogy', $right_tree->right_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($right_tree->right_user->photo)src="{{ asset('storage/user/thumbnail/'.$right_tree->right_user->photo) }}" @elseif($right_tree->right_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($right_tree->right_user->name) }} <br>
                                    {{ $right_tree->right_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="2" class="table-warning">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                @else
                    <td colspan="2" class="table-warning">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="2" class="table-warning">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="2" class="table-warning">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>

                @endif
            @else
                @if ($right_tree)
                    @if ($right_tree->left_user_id)
                        <td colspan="1" class="table-warning">

                            <a href="{{ route('admin-child-genealogy', $right_tree->left_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($right_tree->left_user->photo)src="{{ asset('storage/user/thumbnail/'.$right_tree->left_user->photo) }}" @elseif($right_tree->left_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($right_tree->left_user->name) }} <br>
                                    {{ $right_tree->left_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-warning">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($right_tree->middle_user_id)
                        <td colspan="1" class="table-warning">

                            <a href="{{ route('admin-child-genealogy', $right_tree->middle_user->member_id) }}">
                                <img class="profile-user-img img-fluid img-circle"
                                    @if($right_tree->middle_user->photo)src="{{ asset('storage/user/thumbnail/'.$right_tree->middle_user->photo) }}" @elseif($right_tree->middle_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($right_tree->middle_user->name) }}
                                    <br>
                                    {{ $right_tree->middle_user->member_id }}
                                </p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-warning">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($right_tree->right_user_id)
                        <td colspan="1" class="table-warning">

                            <a href="{{ route('admin-child-genealogy', $right_tree->right_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($right_tree->right_user->photo)src="{{ asset('storage/user/thumbnail/'.$right_tree->right_user->photo) }}" @elseif($right_tree->right_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($right_tree->right_user->name) }} <br>
                                    {{ $right_tree->right_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-warning">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                    @if ($right_tree->fourth_user_id)
                        <td colspan="1" class="table-warning">

                            <a href="{{ route('admin-child-genealogy', $right_tree->fourth_user->member_id) }}">

                                <img class="profile-user-img img-fluid img-circle"
                                    @if($right_tree->fourth_user->photo)src="{{ asset('storage/user/thumbnail/'.$right_tree->fourth_user->photo) }}" @elseif($right_tree->fourth_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif alt="User profile picture">
                                <p>{{ ucfirst($right_tree->fourth_user->name) }} <br>
                                    {{ $right_tree->fourth_user->member_id }}</p>
                            </a>
                        </td>
                    @else
                        <td colspan="1" class="table-warning">
                            <a href="#">

                                <p> Vacant Place </p>
                            </a>
                        </td>
                    @endif
                @else
                    <td colspan="1" class="table-warning">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="1" class="table-warning">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="1" class="table-warning">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>
                    <td colspan="1" class="table-warning">

                        <a href="#">

                            <p> Vacant Place </p>
                        </a>
                    </td>

                @endif
            @endif
        @else
            <td colspan="6" class="table-warning">

                <a href="#">

                    <p> Vacant Place </p>
                </a>
            </td>
        @endif

        <!-- Right Leg End -->
    </tr>
