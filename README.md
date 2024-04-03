# API Restful - Documentação

## Introdução

Essa é uma API Restful simples para manipular dados de uma entidade chamada `Person`. Atualmente, os métodos apenas retornam mensagens de sucesso.
Foi montada utilizando a linguagem PHP (8.2.12) e servidor xampp. 

## Endpoints

### GET /persons

Retorna uma mensagem de sucesso.

**Parâmetros**: Nenhum

**Resposta de sucesso**: `{"message": "GET Method executed successfully"}`

### POST /persons

Retorna uma mensagem de sucesso indicando que uma nova pessoa foi criada.

**Parâmetros**: Nenhum

**Corpo da Solicitação**: Nenhum

**Resposta de sucesso**: `{"message": "POST Method executed successfully"}`

### PUT /persons/{id}

Retorna uma mensagem de sucesso indicando que os detalhes de uma pessoa específica foram atualizados.

**Parâmetros**: `id` (obrigatório) - O ID da pessoa.

**Corpo da Solicitação**: Nenhum

**Resposta de sucesso**: `{"message": "PUT Method executed successfully"}`

### DELETE /persons/{id}

Retorna uma mensagem de sucesso indicando que uma pessoa específica foi excluída.

**Parâmetros**: `id` (obrigatório) - O ID da pessoa.

**Resposta de sucesso**: `{"message": "DELETE Method executed successfully"}`

## Respostas de Erro

Se um endpoint não for encontrado, a API retornará um status 404.

**Resposta de erro**: `HTTP/1.1 404 Not Found`