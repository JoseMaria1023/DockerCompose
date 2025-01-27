<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="Estilo.css">
</head>
<body>
    <h1 class="title">Lista de Usuarios</h1>
=======
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Lista de Usuarios</h1>
>>>>>>> e1ab6b37779cc929514dd94b6844b9e83dd321f5
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="user-table-body">
        </tbody>
    </table>
<<<<<<< HEAD
    <script src="script.js"></script>
=======

    <script>
        function cargarUsuarios() {
            fetch('http://localhost:9000/api/User')  
                .then(response => response.json())
                .then(users => {
                    const tableBody = document.getElementById('user-table-body');
                    tableBody.innerHTML = ''; 

                    if (users.length > 0) {
                        users.forEach(user => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>${user.id}</td>
                                <td>${user.nombre}</td>
                                <td>${user.email}</td>
                            `;
                            tableBody.appendChild(row);
                        });
                    } 
                })
        }
        window.onload = cargarUsuarios;
    </script>
>>>>>>> e1ab6b37779cc929514dd94b6844b9e83dd321f5
</body>
</html>
