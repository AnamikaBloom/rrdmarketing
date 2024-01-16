<table class="table table-hover table-bordered">
<thead class="thead-dark">
    <tr>
    <th>Trips</th>
    <th>Expedition</th>
    <th>Packages</th>
    <th>Duration</th>
    <th>Amount</th>
    <th>Action</th>
    </tr>
</thead>
<tbody>
@foreach ($packages as $package)
    <tr>
    <td>{{$package->name}}</td>
    <td>{{$package->expedition}}</td>
    <td>{{$package->amount}}</td>
    <td>{{$package->duration}} X 369</td>
    <td>{{$package->packages}}</td>
    <td>
        <form action="{{route('user-package')}}" method="POST">
        @csrf
        <input type="text" name="amount" value="{{$package->amount}}" readonly hidden>
        <input type="text" name="package_id" value="{{$package->id}}" readonly hidden>
        <!-- <input type="submit" class="btn btn-primary " value="Buy Package"> -->
        </form>
    </td>
    </tr>
@endforeach
</tbody>
</table>