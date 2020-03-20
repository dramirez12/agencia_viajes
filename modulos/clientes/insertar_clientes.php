<?php /*Este archivo captura e inserta la informacion de perfil_clientes.php */?>
<?php 
 
/*......Primero validamos si el archivo encuentra los datos que mando el formulario por metodo POST........*/
if (isset($_POST['Primer_Nombre']) and isset($_POST['Segundo_Nombre']) and isset($_POST['Primer_Apellido']) and isset($_POST['Segundo_Apellido']) and isset($_POST['Sexo']) and isset($_POST['Tipo_Sangre']) and isset($_POST['Nacionalidad']) and isset($_POST['Enfermedades']) and isset($_POST['Medicamentos']) and isset($_POST['Caracteristicas']) and isset($_POST['Contacto_de']) and isset($_POST['Fecha_Nacimiento'])){ 
    include '../clases/DML.php';//Conexion a la base de datos
    $Primer_Nombre=mysqli_real_escape_string($conexion,$_POST['Primer_Nombre']);//Convertimos el dato POST en un dato para mysql
    $Segundo_Nombre=mysqli_real_escape_string($conexion,$_POST['Segundo_Nombre']);
    $Primer_Apellido=mysqli_real_escape_string($conexion,$_POST['Primer_Apellido']);
    $Segundo_Apellido=mysqli_real_escape_string($conexion,$_POST['Segundo_Apellido']);
    $Sexo=mysqli_real_escape_string($conexion,$_POST['Sexo']);
    $Tipo_Sangre=mysqli_real_escape_string($conexion,$_POST['Tipo_Sangre']);
    $Nacionalidad=mysqli_real_escape_string($conexion,$_POST['Nacionalidad']);
    $Enfermedades=mysqli_real_escape_string($conexion,$_POST['Enfermedades']);
    $Medicamentos=mysqli_real_escape_string($conexion,$_POST['Medicamentos']);
    $Descripcion=mysqli_real_escape_string($conexion,$_POST['Caracteristicas']);
    $Contacto_de=mysqli_real_escape_string($conexion,$_POST['Contacto_de']);
    $Fecha_Nacimiento=mysqli_real_escape_string($conexion,$_POST['Fecha_Nacimiento']);
    $Enfermedades=mysqli_real_escape_string($conexion,$_POST['Enfermedades']);
    $Medicamentos=mysqli_real_escape_string($conexion,$_POST['Medicamentos']);
    $Descripcion=mysqli_real_escape_string($conexion,$_POST['Caracteristicas']);
    $Contacto_de=mysqli_real_escape_string($conexion,$_POST['Contacto_de']);
    $Fecha_Nacimiento=mysqli_real_escape_string($conexion,$_POST['Fecha_Nacimiento']);
    $insertar=mysqli_query($conexion,'insert into tbl_clientes(Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Sexo_Cliente,Nacionalidad,Fecha_Nacimiento,Caracteristicas,Tipo_Sangre,Enfermedades,Medicamentos) values ("'.$Primer_Nombre.'","'.$Segundo_Apellido.'","'.$Primer_Apellido.'","'.$Segundo_Apellido.'","'.$Sexo.'","'.$Nacionalidad.'","'.$Fecha_Nacimiento.'","'.$Descripcion.'","'.$Tipo_Sangre.'","'.$Enfermedades.'","'.$Medicamentos.'")') or die ('No se pudo registrar<br>'.mysqli_error($conexion));
    mysqli_close($conexion);
    header('location: ./mantenimiento.php');
    
}else{
    echo "error al registrar";
}
?>