<?php
echo "
<button class='passoapasso' data-target='#completar-cadastro' data-toggle='modal'>
  <b>1º</b>
  <h4>Completar<br>cadastro</h4>
</button>
<button class='passoapasso' data-target='#cadastrar-mei' data-toggle='modal'>
  <b>2º</b>
  <h4>Cadastrar<br>MEI</h4>
</button>
<button class='passoapasso' data-target='#cadastrar-atividades' data-toggle='modal'>
  <b>3º</b>
  <h4>Cadastrar<br>atividades</h4>
</button>
";

include "conexoes/conexao-oo-cstea.inc";
$mysql = "SELECT cadastro FROM usuarios WHERE registro = '$registro' AND situacao = 'Ativado'";
$res = $conexao->query($mysql);

if ($res->num_rows > 0) {
  $info = $res->fetch_assoc();
  $cadastro = $info['cadastro'];
}

$sql = "SELECT nome, sobrenome, nascimento, endereco, complemento, bairro, cidade, estado, pais, cep, telefone FROM cadastros WHERE cadastro = '$cadastro' AND situacao = 'Ativado'";
$result = $conexao->query($sql);

if($result->num_rows > 0) {
  $info = $result->fetch_assoc();
  $nome = $info['nome'];
  $sobrenome = $info['sobrenome'];
  $nascimento = $info['nascimento'];
  $endereco = $info['endereco'];
  $complemento = $info['complemento'];
  $bairro = $info['bairro'];
  $cidade = $info['cidade'];
  $estado = $info['estado'];
  $pais = $info['pais'];
  $cep = $info['cep'];
  $telefone = $info['telefone'];
}

echo "
<div id='completar-cadastro' class='modal fade' role='dialog'>
 <div class='modal-dialog'>
  <div class='modal-content'>
   <div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal'>&times;</button>
    <p id='mensagem-cadastro' style='color:orangered;'></p>
   </div>
   <div class='modal-body'>
    <form name='atualizacao-cadastro' method='post' action='' onsubmit='return completarCadastro()'>
      <fieldset>
        <legend>Por favor confirme as informações abaixo e as atualize caso seja necessário</legend>
        <input class='entrada' type='text' id='cadastro' name='cadastro' value='$cadastro'></input>
        <label>Nome:</label>
        <input class='entrada' type='text' id='nome' name='nome' value='$nome'></input>
        <label>Sobrenome:</label>
        <input class='entrada' type='text' id='sobrenome' name='sobrenome' value='$sobrenome'></input>
        <label>Nascimento:</label>
        <input class='entrada' type='date' id='nascimento' name='nascimento' value='$nascimento'></input>
        <label>Endereço:</label>
        <input class='entrada' type='text' id='endereco' name='endereco' value='$endereco'></input>
        <label>Complemento:</label>
        <input class='entrada' type='text' id='complemento' name='complemento' value='$complemento'></input>
        <label>bairro:</label>
        <input class='entrada' type='text' id='bairro' name='bairro' value='$bairro'></input>
        <label>cidade:</label>
        <input class='entrada' type='text' id='cidade' name='cidade' value='$cidade'></input>
        <label>estado:</label>
        <input class='entrada' type='text' id='estado' name='estado' value='$estado'></input>
        <label>pais:</label>
        <input class='entrada' type='text' id='pais' name='pais' value='$pais'></input>
        <label>cep:</label>
        <input class='entrada' type='text' id='cep' name='cep' value='$cep'></input>
        <label>telefone:</label>
        <input class='entrada' type='text' id='telefone' name='telefone' value='$telefone'></input>
        <input class='enviar' type='submit' value='Atualizar meu cadastro'></input>
      </fieldset>
    </form>
   </div>
  </div>
 </div>
</div>";

$mysql_tec = "SELECT tecnico, cnpj, nome_empresarial, data_registro, profissao, documento FROM tecnicos WHERE cadastro = '$cadastro' AND situacao = 'Ativado'";
$query = $conexao->query($mysql_tec);

if($query->num_rows > 0) {
  $dados = $query->fetch_assoc();
  $tecnico = $dados['tecnico'];
  $cnpj = $dados['cnpj'];
  $nome_empresarial = $dados['nome_empresarial'];
  $data_registro = $dados['data_registro'];
  $profissao = $dados['profissao'];
  $documento = $dados['documento'];
} else {
  $tecnico = "";
  $cnpj = "";
  $nome_empresarial = "";
  $data_registro = "";
  $profissao = "";
  $documento = "";
}

echo "
<div id='cadastrar-mei' class='modal fade' role='dialog'>
 <div class='modal-dialog'>
  <div class='modal-content'>
   <div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal'>&times;</button>
    <p id='mensagem-mei' style='color:orangered;'><a href='http://www.portaldoempreendedor.gov.br' target='_blank'>Se você ainda não tem um MEI registrado, entre no site oficial do governo para cadastrar o seu MEI</a></p>
   </div>
   <div class='modal-body'>
    <form name='registro-mei' method='post' action='' onsubmit='return cadastroMEI()'>
      <fieldset>
        <legend>Registre o seu MEI para começar a atender nossos clientes.</legend>
        <input class='entrada' type='text' id='cadastro' name='cadastro' value='$cadastro'></input>
        <label>Digite o seu CNPJ</label>
        <input class='entrada' type='text' id='cnpj' name='cnpj' value='$cnpj' placeholder='Digite um CNPJ válido'></input>
        <label>Nome empresarial</label>
        <input class='entrada' type='text' id='nome-empresarial' name='nome-empresarial' value='$nome_empresarial' placeholder='Digite o seu nome empresarial registrado como MEI'></input>
        <label>Data de registro</label>
        <input class='entrada' type='date' id='data-registro' name='data-registro' value='$data_registro' placeholder='Digite a data de registro do seu CNPJ'></input>
        <label>Diga-nos a sua profissão</label>
        <input class='entrada' type='text' id='profissao' name='profissao' value='$profissao' placeholder='Técnico eletrônica, informática, mecânica, eletrotécnica...'></input>
        <label>Possue documentação de registro técnico</label>
        <input class='entrada' type='text' id='documentacao' name='documentacao' value='$documento' placeholder='Se tiver, digite a númeração aqui'></input>
        <input class='enviar' type='submit' value='Registrar meu MEI'></input>
      </fieldset>
    </form>
   </div>
  </div>
 </div>
</div>

<div id='cadastrar-atividades' class='modal fade' role='dialog'>
 <div class='modal-dialog'>
  <div class='modal-content'>
   <div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal'>&times;</button>
    <p id='mensagem-atividades' style='color:orangered;'></p>
   </div>
   <div class='modal-body'>
    <form name='registro-mei' method='post' action='' onsubmit='return cadastroAtividades()'>
      <fieldset>
        <legend>Para finalizar informe quais atividades você excerce.</legend>
        <input class='entrada' type='text' id='registro-tecnico' value='$tecnico'></input>
        <label>Informe sua atividade principal:</label>
        <input class='entrada' type='text' id='atividade-principal' name='atividade-principal' placeholder='Atividade principal'></input>
        <label>Informe até 3 atividades secundárias:</label>
        <input class='entrada' type='text' id='atividade01' name='atividade01' placeholder='Informe sua atividade secundária'></input>
        <input class='entrada' type='text' id='atividade02' name='atividade02' placeholder='Informe sua atividade secundária'></input>
        <input class='entrada' type='text' id='atividade03' name='atividade03' placeholder='Informe sua atividade secundária'></input>
        <input class='enviar' type='submit' value='Registrar minhas atividades'></input>
      </fieldset>
    </form>
   </div>
  </div>
 </div>
</div>
";
?>
