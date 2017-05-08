<link rel="stylesheet" href="../style/css/Horas/horas.css" type="text/css" />

<body>
        <div class="container">
            <div class="row" id="rowTopTable">
                <h4 class="col m4">Horas reservables</h4>
                <button class="col m2 offset-m6 btn waves-effect waves-light" id="agregarHora">
                    Agregar
                    <i class="material-icons">add</i>
                </button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Precio por hora</th>
                        <th>Bloqueada</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>6:00am</td>
                        <td>¢15 000</td>
                        <td>
                            <input class="check-color" type="checkbox" id="test1" checked/>
                            <label for="test1"></label>
                        </td>
                        <td>
                            <a class="btn-floating waves-effect">
                                <i class="material-icons">mode_edit</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>6:00am</td>
                        <td>¢15 000</td>
                        <td>
                            <input class="check-color" type="checkbox" id="test2" checked/>
                            <label for="test2"></label>
                        </td>
                        <td>
                            <a class="btn-floating waves-effect waves-light">
                                <i class="material-icons">mode_edit</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>6:00am</td>
                        <td>¢15 000</td>
                        <td>
                            <input class="check-color" type="checkbox" id="test3" checked/>
                            <label for="test3"></label>
                        </td>
                        <td>
                            <a class="btn-floating waves-effect waves-light">
                                <i class="material-icons">mode_edit</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </body>
</html> 