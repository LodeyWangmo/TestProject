<!DOCTYPE html>
<html>
<head>
  <title>HTML Table</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      text-align: left;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color:tomato;
      
    }

  </style>
</head>
<body>
<button type="button">
    <a href="/create_role_index">Create New</a></button>
<button type="button">
    <a href="/get_role_list/status/NA/Active">List Active Role</a></button>

<button type="button">
    <a href="/get_role_list/ALL/NA/ALL">List All Role</a></button>
    <button type="button">
    <a href="/get_role_list/ALL/NA/ALL">List Inactive</a></button>
    <h2>Role management</h2>
  <table>
        <thead>
        <tr>
            <th>Sl No</th>
            <th>Role Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
    <tbody>
        @foreach($response_data as $id=> $data)
            <tr>
                <td>{{$id+1}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <button type="button">
                        <a href="/edit_role/{{$data->id}}">
                    Edit</a></button>


                    <button type="button">
                    <a href="/delete_role/{{$data->id}}">
                    Delete</a></button>
                </td>
            </tr>
      @endforeach
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</body>
</html>
