
    <tr height="50">

        @if ($tree->left_user_id)
            <td colspan="6" class="table-primary">
                {{-- <img src="{{asset('user/assets/img/screen1.png') }}"><br><br> --}}
                <a href="{{ route('child-genealogy', $tree->left_user->member_id) }}">
                    <img class="profile-user-img img-fluid img-circle" @if($tree->left_user->photo)src="{{ asset('storage/user/thumbnail/'.$tree->left_user->photo) }}" @elseif($tree->left_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif
                        alt="User profile picture">
                    <p> {{ ucfirst($tree->left_user->name) }} <br>
                        {{ $tree->left_user->member_id }}
                        <br>
                        {{ ($tree->left_user->rank)?$tree->left_user->rank->name:'-' }}
                    </p>
                </a>
            </td>
        @else
            <td colspan="6" class="table-primary">
                <a href="#">

                    <p> Vacent Place </p>
                </a>
            </td>
        @endif
        @if ($tree->middle_user_id)
            <td colspan="6" class="table-success">
                {{-- <img src="{{asset('user/assets/img/screen1.png') }}"><br><br> --}}
                <a href="{{ route('child-genealogy', $tree->middle_user->member_id) }}">
                    <img class="profile-user-img img-fluid img-circle" @if($tree->middle_user->photo)src="{{ asset('storage/user/thumbnail/'.$tree->middle_user->photo) }}" @elseif($tree->middle_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif
                        alt="User profile picture">
                    <p> {{ ucfirst($tree->middle_user->name) }} <br>
                        {{ $tree->middle_user->member_id }}
                    <br>
                    {{ ($tree->middle_user->rank)?$tree->middle_user->rank->name:'-' }}
                    </p>
                </a>
            </td>
        @else
            <td colspan="6" class="table-success"><a href="#">

                    <p> Vacent Place </p>
                </a>
            </td>
        @endif
        @if ($tree->right_user_id)
            <td colspan="6" class="table-warning">
                {{-- <img src="{{asset('user/assets/img/screen1.png') }}"><br><br> --}}
                <a href="{{ route('child-genealogy', $tree->right_user->member_id) }}">
                    <img class="profile-user-img img-fluid img-circle" @if($tree->right_user->photo)src="{{ asset('storage/user/thumbnail/'.$tree->right_user->photo) }}" @elseif($tree->right_user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif
                        alt="User profile picture">
                    <p> {{ ucfirst($tree->right_user->name) }} <br>
                        {{ $tree->right_user->member_id }}
                        <br>
                        {{ ($tree->right_user->rank)?$tree->right_user->rank->name:'-' }}</p>
                </a>
            </td>
        @else
            <td colspan="6" class="table-warning">
                <a href="#">

                    <p> Vacent Place </p>
                </a>
            </td>
        @endif
    </tr>
