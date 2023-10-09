{include file="header.tpl"}

<div class="errorMsg">
    <h1>Error</h1>
    <h3>{$msg}</h3>
<p><a href='{if $url} {$url} {else} form_alta {/if}'>Volver</a></p>;

{include file="footer.tpl"}
