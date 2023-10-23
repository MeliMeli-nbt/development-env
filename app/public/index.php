<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dữ liệu từ API</h1>
    <table id="data-table">
        <tr>
            <th>Employee ID</th>
            <th>First Name</th>
						<th>Last Name</th>
						<th>Age</th>
						<th>Salary</th>
        </tr>
    </table>

    <script>
        // Sử dụng fetch API để gọi API
        fetch('http://localhost:50/api.php')
            .then(response => response.json())
            .then(data => {
                const dataTable = document.getElementById('data-table');
                data.forEach(item => {
                    const row = dataTable.insertRow();
                    const cell1 = row.insertCell(0);
                    const cell2 = row.insertCell(1);
                    const cell3 = row.insertCell(2);
                    const cell4 = row.insertCell(3);
                    const cell5 = row.insertCell(4);

                    cell1.innerHTML = item.employee_id;
                    cell2.innerHTML = item.first_name;
                    cell3.innerHTML = item.last_name;
                    cell4.innerHTML = item.age;
                    cell5.innerHTML = item.salary;
                });
            })
            .catch(error => {
                console.error('Fetch error:', error);
            });
    </script>
</body>
</html>