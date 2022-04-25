<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div>
        <form name="form_busqueda" method="POST" action="" class="form-control">
            <table>
                <tr>
                    <td>Nombre Completo *</td>
                    <td>
                        <input name="nombres" type="text" required>
                    </td>
                </tr>
                <tr>
                    <td>Correo Electrónico*</td>
                    <td>
                        <input name="correo" type="mail" required>
                    </td>
                </tr>
                <tr>
                    <td>Area</td>
                    <td>
                        <select name="area" class="form-select" required>
                            <option value="">Seleccionar Area </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Descripción</td>
                    <td>
                        <textarea name="descripcion" required></textarea>
                    </td>
                </tr>
                <td colspan="2"><input type="checkbox" class="form-check-input" required></td>
                </tr>
                <tr>
                    <td>Roles * </td>
                    <td colspan="2"><input type="checkbox" class="form-check-input" required> <label class="form-check-label">profesional de Proyectos</label></td>
                    <td colspan="2"><input type="checkbox" class="form-check-input" required> <label class="form-check-label">Gerente Estrategico</label></td>
                    <td colspan="2"><input type="checkbox" class="form-check-input" required> <label class="form-check-label">Auxiliar Administrativo</label></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" class="btn btn-primary">Guardar</button></td>
                </tr>
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    <div id="resultados">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Area</th>
                    <th scope="col">Boletin</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($resultados) {
                ?>
                    <tr>

                        <td><?php echo $resultados['nombre']; ?> </td>
                        <td><?php echo $resultados['email']; ?> </td>
                        <td><?php echo $resultados['sexo']; ?> </td>
                        <td><?php echo $resultados['area']; ?> </td>
                        <td><?php echo $resultados['boletin']; ?> </td>
                        <td><i class="bi bi-pen"></i></td>
                        <td><i class="bi bi-trash"></i></td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>