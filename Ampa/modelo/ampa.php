<?php
session_start();
class ampa
{
    public $tutor1;
    public $tutor2;
    public $address;
    public $phoneTutor1;
    public $phoneTutor2;
    public $emailTutor1;
    public $emailTutor2;
    public $user;
    public $pass;
    public $name1;
    public $course1;
    public $name2;
    public $course2;
    public $name3;
    public $course3;
    public $name4;
    public $course4;
    public $name5;
    public $course5;

    /**
     * @param $tutor1
     * @param $tutor2
     * @param $address
     * @param $phoneTutor1
     * @param $phoneTutor2
     * @param $emailTutor1
     * @param $emailTutor2
     * @param $user
     * @param $pass
     * @param $name1
     * @param $course1
     * @param $name2
     * @param $course2
     * @param $name3
     * @param $course3
     * @param $name4
     * @param $course4
     * @param $name5
     * @param $course5
     */
    public function __construct($tutor1, $tutor2, $address, $phoneTutor1, $phoneTutor2, $emailTutor1, $emailTutor2, $user, $pass, $name1, $course1, $name2, $course2, $name3, $course3, $name4, $course4, $name5, $course5)
    {
        $this->tutor1 = $tutor1;
        $this->tutor2 = $tutor2;
        $this->address = $address;
        $this->phoneTutor1 = $phoneTutor1;
        $this->phoneTutor2 = $phoneTutor2;
        $this->emailTutor1 = $emailTutor1;
        $this->emailTutor2 = $emailTutor2;
        $this->user = $user;
        $this->pass = $pass;
        $this->name1 = $name1;
        $this->course1 = $course1;
        $this->name2 = $name2;
        $this->course2 = $course2;
        $this->name3 = $name3;
        $this->course3 = $course3;
        $this->name4 = $name4;
        $this->course4 = $course4;
        $this->name5 = $name5;
        $this->course5 = $course5;
    }

    /**
     * @return mixed
     */
    public function getTutor1()
    {
        return $this->tutor1;
    }

    /**
     * @param mixed $tutor1
     */
    public function setTutor1($tutor1): void
    {
        $this->tutor1 = $tutor1;
    }

    /**
     * @return mixed
     */
    public function getTutor2()
    {
        return $this->tutor2;
    }

    /**
     * @param mixed $tutor2
     */
    public function setTutor2($tutor2): void
    {
        $this->tutor2 = $tutor2;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhoneTutor1()
    {
        return $this->phoneTutor1;
    }

    /**
     * @param mixed $phoneTutor1
     */
    public function setPhoneTutor1($phoneTutor1): void
    {
        $this->phoneTutor1 = $phoneTutor1;
    }

    /**
     * @return mixed
     */
    public function getPhoneTutor2()
    {
        return $this->phoneTutor2;
    }

    /**
     * @param mixed $phoneTutor2
     */
    public function setPhoneTutor2($phoneTutor2): void
    {
        $this->phoneTutor2 = $phoneTutor2;
    }

    /**
     * @return mixed
     */
    public function getEmailTutor1()
    {
        return $this->emailTutor1;
    }

    /**
     * @param mixed $emailTutor1
     */
    public function setEmailTutor1($emailTutor1): void
    {
        $this->emailTutor1 = $emailTutor1;
    }

    /**
     * @return mixed
     */
    public function getEmailTutor2()
    {
        return $this->emailTutor2;
    }

    /**
     * @param mixed $emailTutor2
     */
    public function setEmailTutor2($emailTutor2): void
    {
        $this->emailTutor2 = $emailTutor2;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * @param mixed $name1
     */
    public function setName1($name1): void
    {
        $this->name1 = $name1;
    }

    /**
     * @return mixed
     */
    public function getCourse1()
    {
        return $this->course1;
    }

    /**
     * @param mixed $course1
     */
    public function setCourse1($course1): void
    {
        $this->course1 = $course1;
    }

    /**
     * @return mixed
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * @param mixed $name2
     */
    public function setName2($name2): void
    {
        $this->name2 = $name2;
    }

    /**
     * @return mixed
     */
    public function getCourse2()
    {
        return $this->course2;
    }

    /**
     * @param mixed $course2
     */
    public function setCourse2($course2): void
    {
        $this->course2 = $course2;
    }

    /**
     * @return mixed
     */
    public function getName3()
    {
        return $this->name3;
    }

    /**
     * @param mixed $name3
     */
    public function setName3($name3): void
    {
        $this->name3 = $name3;
    }

    /**
     * @return mixed
     */
    public function getCourse3()
    {
        return $this->course3;
    }

    /**
     * @param mixed $course3
     */
    public function setCourse3($course3): void
    {
        $this->course3 = $course3;
    }

    /**
     * @return mixed
     */
    public function getName4()
    {
        return $this->name4;
    }

    /**
     * @param mixed $name4
     */
    public function setName4($name4): void
    {
        $this->name4 = $name4;
    }

    /**
     * @return mixed
     */
    public function getCourse4()
    {
        return $this->course4;
    }

    /**
     * @param mixed $course4
     */
    public function setCourse4($course4): void
    {
        $this->course4 = $course4;
    }

    /**
     * @return mixed
     */
    public function getName5()
    {
        return $this->name5;
    }

    /**
     * @param mixed $name5
     */
    public function setName5($name5): void
    {
        $this->name5 = $name5;
    }

    /**
     * @return mixed
     */
    public function getCourse5()
    {
        return $this->course5;
    }

    /**
     * @param mixed $course5
     */
    public function setCourse5($course5): void
    {
        $this->course5 = $course5;
    }


}

$tutor1 = $_SESSION['tutor1'];
$tutor2 = $_SESSION['tutor2'];
$address = $_SESSION['address'];
$phoneTutor1 = $_SESSION['phoneTutor1'];
$phoneTutor2 = $_SESSION['phoneTutor2'];
$emailTutor1 = $_SESSION['emailTutor1'];
$emailTutor2 = $_SESSION['emailTutor2'];
$name1 = $_SESSION['name1'];
$course1 = $_SESSION['course1'];
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];


$unaFamilia = new ampa(
    $tutor1,
    $tutor2,
    $address,
    $phoneTutor1,
    $phoneTutor2,
    $emailTutor1,
    $emailTutor2,
    $user,
    $pass,
    $name1,
    $course1,
    $name1, // Assuming the same value for $name2
    $course1,  // Assuming the same value for $course2
    $name1, // Assuming the same value for $name3
    $course1,  // Assuming the same value for $course3
    $name1, // Assuming the same value for $name4
    $course1,  // Assuming the same value for $course4
    $name1, // Assuming the same value for $name5
    $course1   // Assuming the same value for $course5
);

include "../modelo/conexion.php";
$link = conectar();
if (empty($_SESSION['emailTutor2']) && empty($_SESSION['$phoneTutor2'])){
    $query = "INSERT INTO familia (tutor1, tutor2, telefono_tutor1, email_tutor1, direccion, usuario, contraseña) VALUES ('".$unaFamilia->getTutor1()."','".$unaFamilia->getTutor2()."',".$unaFamilia->getPhoneTutor1().",'".$unaFamilia->getEmailTutor1()."','".$unaFamilia->getAddress()."','".$unaFamilia->getUser()."','".$unaFamilia->getPass()."');";
    echo $query;
    $result = mysqli_query($link, $query);
}else if(empty($_SESSION['emailTutor2'])){
    $query = "INSERT INTO familia (tutor1, tutor2, telefono_tutor1, telefono_tutor2, email_tutor1,  direccion, usuario, contraseña) VALUES ('".$unaFamilia->getTutor1()."','".$unaFamilia->getTutor2()."',".$unaFamilia->getPhoneTutor1().",".$unaFamilia->getPhoneTutor2().",'".$unaFamilia->getEmailTutor1()."','".$unaFamilia->getAddress()."','".$unaFamilia->getUser()."','".$unaFamilia->getPass()."');";
    echo $query;
    $result = mysqli_query($link, $query);
}else if(empty($_SESSION['$phoneTutor2'])){
    $query = "INSERT INTO familia (tutor1, tutor2, telefono_tutor1, email_tutor1, email_tutor2, direccion, usuario, contraseña) VALUES ('".$unaFamilia->getTutor1()."','".$unaFamilia->getTutor2()."',".$unaFamilia->getPhoneTutor1().",".$unaFamilia->getEmailTutor1().",'".$unaFamilia->getEmailTutor2()."','".$unaFamilia->getAddress()."','".$unaFamilia->getUser()."','".$unaFamilia->getPass()."');";
    echo $query;
    $result = mysqli_query($link, $query);
}
else{
    $query = "INSERT INTO familia (tutor1, tutor2, telefono_tutor1, telefono_tutor2, email_tutor1, email_tutor2, direccion, usuario, contraseña) VALUES ('".$unaFamilia->getTutor1()."','".$unaFamilia->getTutor2()."',".$unaFamilia->getPhoneTutor1().",".$unaFamilia->getPhoneTutor2().",'".$unaFamilia->getEmailTutor1()."','".$unaFamilia->getEmailTutor2()."','".$unaFamilia->getAddress()."','".$unaFamilia->getUser()."','".$unaFamilia->getPass()."');";
    echo $query;
    $result = mysqli_query($link, $query);
}

if ($result){
    $queryIdFamilia="select id from familia where usuario = '".$unaFamilia->getUser()."';";
    $result1=mysqli_query($link,$queryIdFamilia);
    $fila=mysqli_fetch_assoc($result1);
    $idFamilia = $fila['id'];
    $queryAlumno = "INSERT INTO alumno (nombre_alumno,id_familia,id_curso) VALUES ('".$unaFamilia->getName1()."', $idFamilia,".$unaFamilia->getCourse1().");";
    $result2 = mysqli_query($link, $queryAlumno);
    mysqli_close($link);
    if ($result2){
        $mensaje = "Gracias por darse de alta";
        session_destroy();
        header("Location:http://localhost:63342/PHP/Ampa/vista/index.php?mensaje=$mensaje");

    }
}else{
    session_destroy();
    mysqli_close($link);
    $mensaje = "Ha ocurrido un error vuelva a intentarlo";
    echo $mensaje;
//    header("Location:http://localhost:63342/PHP/Ampa/vista/index.php?mensaje=$mensaje");

}
