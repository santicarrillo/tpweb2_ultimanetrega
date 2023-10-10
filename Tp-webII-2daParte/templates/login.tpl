{include 'header.tpl'}

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="auth">
        <div class="form-group">
            <label for="usuario">Email</label>
            <input type="usuario" required class="form-control" id="usuario" name="usuario" aria-describedby="usuariohelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

        {if $error}
            <div class='alert alert-danger' role='alert'>
                {$error}
            </div> 
        {/if}
       
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>

{include file='footer.tpl'}
