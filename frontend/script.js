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
        .catch(error => console.error('Error al cargar los usuarios:', error));
}

window.onload = cargarUsuarios;
