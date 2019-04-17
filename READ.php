 <?php
if( isset($_POST['insert']) ){

$xml= new DomDocument("1.0", "UTF-8");
$xml->load('load.xml');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

        $rootTag =$xml->getElementsByTagName("document")->item(0);
      //se crea elemento
        $dataTag =$xml->createElement("data");

        $nombreTag =$xml->createElement("nombre",$_REQUEST['nombre']);
        $emailTag =$xml->createElement("email",$_REQUEST['email']);
        $asuntoTag =$xml->createElement("asunto",$_REQUEST['asunto']);
        $mensajeTag =$xml->createElement("mensaje",$_REQUEST['mensaje']);

        //carga de variables
            $dataTag->appendChild($nombreTag);
            $dataTag->appendChild($emailTag);
            $dataTag->appendChild($asuntoTag);
            $dataTag->appendChild($mensajeTag);

        $rootTag->appendChild($dataTag);
            $xml->save('load.xml');
    } else{
        echo" no esta listo";
    }