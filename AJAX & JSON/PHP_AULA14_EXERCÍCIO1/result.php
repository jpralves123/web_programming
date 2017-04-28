<?php

include_once("bd_connect.php");

if (isset($_POST['submit'])) {

    $search = $_POST['search'];

    // Searching data
    $sql = "SELECT * FROM usuario WHERE nome LIKE '" . $search . "'";

    $result = mysqli_query($conn, $sql);

    $results = array();

    if (mysqli_num_rows($result) > 0) {
        /*
          // Print Result
          while ($row = mysqli_fetch_assoc($result)) {
          echo "RESULTADO DA BUSCA: <br> - Codigo: " . $row["codigo"] . "<br> - Nome: " . $row["nome"] . "<br> - Endereco" . $row["endereco"] . "<br><br>";
          }
         */

        //create an array
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }

        echo json_encode($emparray); // Era para imprimir o JSON aqui
        
    } else {
        echo "0 results";
    }

    echo "OBS.: Por algum motivo o JSON não é impresso, mesmo seguindo vários tutoriais.<br>";

    //close the db connection
    mysqli_close($conn);

}
?>

