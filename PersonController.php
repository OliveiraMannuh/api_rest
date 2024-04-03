<?php
class PersonController
{
    private $requestMethod;

    public function __construct($requestMethod)
    {
        $this->requestMethod = $requestMethod;
    }

    public function processRequest()
    {
        switch ($this->requestMethod) {
            case 'GET':
                $response = $this->getAllPersons();
                break;
            case 'POST':
                $response = $this->createPerson();
                break;
            case 'PUT':
                $response = $this->updatePerson();
                break;
            case 'DELETE':
                $response = $this->deletePerson();
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }

    // Implementação dos métodos getAllPersons, createPerson, updatePerson e deletePerson.
    private function getAllPersons()
    {
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode(array("message" => "GET Method executed successfully"));
        return $response;
    }

    private function createPerson()
    {
        $response['status_code_header'] = 'HTTP/1.1 201 Created';
        $response['body'] = json_encode(array("message" => "POST Method executed successfully"));
        return $response;
    }

    private function updatePerson()
    {
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode(array("message" => "PUT Method executed successfully"));
        return $response;
    }

    private function deletePerson()
    {
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode(array("message" => "DELETE Method executed successfully"));
        return $response;
    }

    private function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = null;
        return $response;
    }

}
?>