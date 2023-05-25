<!DOCTYPE html>
<html>
<head>
    <title>Users PDF</title>
    <style>
        .table_des{
            text-align: center;
        }
        .table_responsive{
            width: 100%;
            text-align: center;
        }
        .table_responsive th{
            border: 1px solid black;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="table_des">
        <h1>{{ $title }}</h1>
        <p>Date: {{ $date }}</p>
        <p>All Users Information</p>
    </div>
        <div class="table_responsive">
            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Job Role</th>
                    <th>Total Leaves</th>
                    <th>Leaves</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($info as $item)
                <tr>
                    {{-- <td>{{ $users->firstItem()+$loop->index}}</td> --}}
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->addresss}}</td>
                    <td>{{ $item->phone}}</td>
                    <td>{{ $item->gender}}</td>
                    <td>{{ $item->job_title}}</td>
                    <td>{{ $item->leave_total}}</td>
                    <td>{{ $item->leave_count}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>


</body>
</html>



