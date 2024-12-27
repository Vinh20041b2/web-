<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài của Vinh_Vu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 20%;
            padding: 10px;
            background-color: #f4f4f4;
        }
        .content {
            width: 80%;
            padding: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        input {
            width: 100%;
            border: none;
            text-align: center;
        }
    </style>
    <script>
        function addRow() {
            const table = document.getElementById('data-table');
            const newRow = table.insertRow();
            for (let i = 0; i < 6; i++) {
                const newCell = newRow.insertCell();
                const input = document.createElement('input');
                input.type = 'text';
                input.placeholder = 'Enter data';
                newCell.appendChild(input);
            }
        }

        function downloadTableAsExcel() {
            const table = document.getElementById('data-table');
            const rows = Array.from(table.rows);
            const csvContent = rows.map(row => {
                const cells = Array.from(row.cells);
                return cells.map(cell => {
                    const input = cell.querySelector('input');
                    return input ? input.value : '';
                }).join(',');
            }).join('\n');

            const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = 'table_data.csv';
            link.click();
        }
    </script>
</head>
<body>

<div class="sidebar">
    <h3>Mục Lục</h3>
    <ul>
        <li><a href="#">A</a></li>
        <li><a href="#">B</a></li>
        <li><a href="#">C</a></li>
    </ul>
</div>

<div class="content">
    <h1>Bài của Vinh_Vu</h1>
    <table id="data-table">
        <thead>
            <tr>
                <th>Cột 1</th>
                <th>Cột 2</th>
                <th>Cột 3</th>
                <th>Cột 4</th>
                <th>Cột 5</th>
                <th>Cột 6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
                <td><input type="text" placeholder="Enter data"></td>
            </tr>
        </tbody>
    </table>
    <button onclick="addRow()">Thêm Hàng</button>
    <button onclick="downloadTableAsExcel()">Tải bảng về dạng Excel</button>
</div>

</body>
</html>
