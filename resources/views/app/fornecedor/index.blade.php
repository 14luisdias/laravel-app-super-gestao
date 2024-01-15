<h3>FORNECEDOR</h3>

{{-- Comentário que será descartado pelo interpretador blade--}}
@php
 //comentário no php
   // echo 'TESTE'
@endphp

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns Fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem Vários Fornecedores </h3>
@else
    <h3> Ainda não existem Fornecedores </h3>
@endif
<hr>
@foreach ($fornecedores as $indice => $fornecedor)
    <strong>Iteração Atual</strong> {{$loop->iteration}} <br>
    <strong>Fornecedor:</strong> {{$fornecedor['nome']}} <br>
    <strong>Status:</strong> {{$fornecedor['status']}} <br>
    <strong>CNPJ:</strong> {{$fornecedor['cnpj']}} <br>
    <strong>DDD:</strong> {{$fornecedor['ddd']}} <br>
    <strong>Telefone:</strong> {{$fornecedor['telefone']}} <br> <hr>
@endforeach

{{--imprimir um array--}}
@dd($fornecedores)