<h3>Fornecedor</h3>

@php
/*
    if(!<condiçao>) {}//enquanto executa se o retorno for true 
*/
@endphp
{{--@unless executa se o retorno for false--}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br/>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if($fornecedores[0]['status'] == 'N')
    Fornecedor inativo
@endif
