<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Salary</th>
            <th>Todo Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach($salaries as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->salary_amount }}</td>
                <td>{{ $row->title }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
