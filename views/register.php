<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastra-se</title>
</head>
<body>
   <div>
    <h2>Cadastro de Usuário</h2>
    <form action = ""method="post">
        <label form= "nome">Nome</label>
        <input type="text" name="nome" id="nome" required>
 
        <label form="nome">Email</label>
        <input type="email" name_="nome" id="nome" required>
 
        <label form="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
 
        <label form="perfil">Perfil:</label>
        <select name="perfil" id="perfil">
            <option value="admin">Admin</option>
            <option value="gestor">Gestor</option>
            <option value="colaborador">Colaborador</option>
        </select>
 
        <button type="submit">Cadastrar</button>
    </form>
 
    <a href=""></a>Voltar ao login</a>
   </div>
</body>
</html>
