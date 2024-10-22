<?php

require_once('TCPDF/tcpdf.php');

$pdf = new TCPDF();

// DADOS CONTRATAÇÃO
$empresa = $_POST['empresa'];
$departamento = $_POST['departamento'];
$funcao = $_POST['funcao'];
$salario = $_POST['salario'];
$pne = $_POST['pne'];
$horario_trabalho = $_POST['horario_trabalho'];
$contribuicao = $_POST['contribuicao'];
$data_admissao = $_POST['data_admissao'];
$valetransporte = $_POST['valetransporte'];

// DADOS DO COLABORADOR
$nome = $_POST['nome'];
$nome_social = $_POST['nome_social'];
$email = $_POST['email'];
$cel = $_POST['cel'];
$recado = $_POST['recado'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numerocasa = $_POST['numerocasa'];
$data_nascimento = $_POST['data_nascimento'];
$uf = $_POST['uf'];
$municipio = $_POST['municipio'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$numero_conta = $_POST['numero_conta'];
$agencia = $_POST['agencia'];
$tipo_conta = $_POST['tipo_conta'];
$raca = $_POST['raca'];

// DADOS COMPLEMENTARES
$casa = $_POST['casa'];
$fgts = $_POST['fgts'];
$desemprego = $_POST['desemprego'];
$grau_instrucao = $_POST['grau_instrucao'];
$estado_civil = $_POST['estado_civil'];

// DOCUMENTOS
$pis = $_POST['pis'];
$datapis = $_POST['datapis'];
$cpf = $_POST['cpf'];
$carteira_identidade = $_POST['carteira_identidade'];
$orgao_expedidor = $_POST['orgao_expedidor'];
$data_expedicao_id = $_POST['data_expedicao_id'];
$uf_id = $_POST['uf_id'];
$ctps_numero = $_POST['ctps_numero'];
$serie_uf = $_POST['serie_uf'];
$data_expedicao_ctps = $_POST['data_expedicao_ctps'];
$cnh_numero = $_POST['cnh_numero'];
$orgao_expeditor_cnh = $_POST['orgao_expeditor_cnh'];
$cnh_categoria = $_POST['cnh_categoria'];
$data_validade_cnh = $_POST['data_validade_cnh'];
$data_primeira_habilitacao = $_POST['data_primeira_habilitacao'];
$data_expedicao_cnh = $_POST['data_expedicao_cnh'];
$titulo_numero = $_POST['titulo_numero'];
$titulo_zona = $_POST['titulo_zona'];
$titulo_secao = $_POST['titulo_secao'];
$carteira_sus = $_POST['carteira_sus'];
$numero_reservista = $_POST['numero_reservista'];
$serie_reservista = $_POST['serie_reservista'];
$cat_reservista = $_POST['cat_reservista'];
$registro_numero = $_POST['registro_numero'];
$validade_registro = $_POST['validade_registro'];
$data_emissao_registro = $_POST['data_emissao_registro'];
$municipio_uf = $_POST['municipio_uf'];
$tipo_certidao = $_POST['tipo_certidao'];
$data_emissao_certidao = $_POST['data_emissao_certidao'];
$termo_matricula = $_POST['termo_matricula'];
$livro = $_POST['livro'];
$folha = $_POST['folha'];
$municipio_certidao = $_POST['municipio_certidao'];
$uf_certidao = $_POST['uf_certidao'];

//DADOS DOS DEPENDENTES

$dependente_nome_1 = $_POST['dependente_nome_1'];
$dependente_cpf_1 = $_POST['dependente_cpf_1'];
$dependente_data_nascimento_1 = $_POST['dependente_data_nascimento_1'];
$dependencia_1 = $_POST['dependencia_1'];
$local_nascimento_1 = $_POST['local_nascimento_1'];
$cartorio_1 = $_POST['cartorio_1'];
$registro_1 = $_POST['registro_1'];
$termo_1 = $_POST['termo_1'];
$dependente_grau_instrucao_1 = $_POST['dependente_grau_instrucao_1'];

$dependente_nome_2 = $_POST['dependente_nome_2'];
$dependente_cpf_2 = $_POST['dependente_cpf_2'];
$dependente_data_nascimento_2 = $_POST['dependente_data_nascimento_2'];
$dependencia_2 = $_POST['dependencia_2'];
$local_nascimento_2 = $_POST['local_nascimento_2'];
$cartorio_2 = $_POST['cartorio_2'];
$registro_2 = $_POST['registro_2'];
$termo_2 = $_POST['termo_2'];
$dependente_grau_instrucao_2 = $_POST['dependente_grau_instrucao_2'];

$dependente_nome_3 = $_POST['dependente_nome_3'];
$dependente_cpf_3 = $_POST['dependente_cpf_3'];
$dependente_data_nascimento_3 = $_POST['dependente_data_nascimento_3'];
$dependencia_3 = $_POST['dependencia_3'];
$local_nascimento_3 = $_POST['local_nascimento_3'];
$cartorio_3 = $_POST['cartorio_3'];
$registro_3 = $_POST['registro_3'];
$termo_3 = $_POST['termo_3'];
$dependente_grau_instrucao_3 = $_POST['dependente_grau_instrucao_3'];

$dependente_nome_4 = $_POST['dependente_nome_4'];
$dependente_cpf_4 = $_POST['dependente_cpf_4'];
$dependente_data_nascimento_4 = $_POST['dependente_data_nascimento_4'];
$dependencia_4 = $_POST['dependencia_4'];
$local_nascimento_4 = $_POST['local_nascimento_4'];
$cartorio_4 = $_POST['cartorio_4'];
$registro_4 = $_POST['registro_4'];
$termo_4 = $_POST['termo_4'];
$dependente_grau_instrucao_4 = $_POST['dependente_grau_instrucao_4'];

$html = '
<style>
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }
  
  th, td {
    border: 1px solid #000;
    padding: 8px;
    text-align: left;
    font-size: 12px;
  }

  th {
    background-color: #f2f2f2;
  }

  h1, h2 {
    text-align: center;
    color: #333;
  }

  h1 {
    font-size: 24px;
    margin-bottom: 20px;
  }

  h2 {
    font-size: 20px;
    margin-top: 30px;
  }

  .section-title {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    text-transform: uppercase;
  }

  .signature-section {
    width: 100%;
    margin-top: 50px;
  }

  .signature-section td {
    border: none;
    padding: 20px;
  }

  .signature-box {
    border-top: 1px solid #000;
    padding-top: 10px;
    text-align: center;
    width: 200px;
  }
</style>

<h1>Formulário de Cadastro</h1>

<!-- Dados da Contratação -->
<h2>Dados da Contratação</h2>
<table>
<tr>
<th>Empresa:</th>
<td>'.$empresa.'</td>
</tr>
<tr>
<th>Departamento:</th>
<td>'.$departamento.'</td>
</tr>
<tr>
<th>Função:</th>
<td>'.$funcao.'</td>
</tr>
<tr>
<th>Salário:</th>
<td>'.$salario.'</td>
</tr>
<tr>
<th>Carga Horária de Trabalho:</th>
<td>'.$horario_trabalho.'</td>
</tr>
<tr>
<th>Data de Admissão:</th>
<td>'.$data_admissao.'</td>
</tr>
</table>

<!-- Dados do Colaborador -->
<h2>Dados do Colaborador</h2>
<table>
<tr>
<th>Nome:</th>
<td>'.$nome.'</td>
</tr>
<tr>
<th>Nome Social:</th>
<td>'.$nome_social.'</td>
</tr>
<tr>
<th>Email:</th>
<td>'.$email.'</td>
</tr>
<tr>
<th>Celular:</th>
<td>'.$cel.'</td>
</tr>
<tr>
<th>Telefone para Recado:</th>
<td>'.$recado.'</td>
</tr>
<tr>
<th>Endereço:</th>
<td>'.$rua.', '.$numerocasa.', '.$bairro.', '.$cep.'</td>
</tr>
<tr>
<th>Data de Nascimento:</th>
<td>'.$data_nascimento.'</td>
</tr>
<tr>
<th>UF:</th>
<td>'.$uf.'</td>
</tr>
<tr>
<th>Município:</th>
<td>'.$municipio.'</td>
</tr>
<tr>
<th>Pai:</th>
<td>'.$pai.'</td>
</tr>
<tr>
<th>Mãe:</th>
<td>'.$mae.'</td>
</tr>
<tr>
<th>Conta Bancária:</th>
<td>'.$tipo_conta.' - Agência: '.$agencia.', Número: '.$numero_conta.'</td>
</tr>
<tr>
<th>Raça:</th>
<td>'.$raca.'</td>
</tr>
</table>

<!-- Documentos -->
<h2>Documentos</h2>
<table>
<tr>
<th>PIS:</th>
<td>'.$pis.'</td>
</tr>
<tr>
<th>Data PIS:</th>
<td>'.$datapis.'</td>
</tr>
<tr>
<th>CPF:</th>
<td>'.$cpf.'</td>
</tr>
<tr>
<th>Carteira de Identidade:</th>
<td>'.$carteira_identidade.'</td>
</tr>
<tr>
<th>Órgão Expedidor:</th>
<td>'.$orgao_expedidor.'</td>
</tr>
<tr>
<th>Data de Expedição ID:</th>
<td>'.$data_expedicao_id.'</td>
</tr>
<tr>
<th>UF ID:</th>
<td>'.$uf_id.'</td>
</tr>
<tr>
<th>Número CTPS:</th>
<td>'.$ctps_numero.'</td>
</tr>
<tr>
<th>Série/UF:</th>
<td>'.$serie_uf.'</td>
</tr>
<tr>
<th>Data de Expedição CTPS:</th>
<td>'.$data_expedicao_ctps.'</td>
</tr>
<tr>
<th>Número CNH:</th>
<td>'.$cnh_numero.'</td>
</tr>
<tr>
<th>Órgão Expeditor CNH:</th>
<td>'.$orgao_expeditor_cnh.'</td>
</tr>
<tr>
<th>Categoria CNH:</th>
<td>'.$cnh_categoria.'</td>
</tr>
<tr>
<th>Data Validade CNH:</th>
<td>'.$data_validade_cnh.'</td>
</tr>
<tr>
<th>Data Primeira Habilitação:</th>
<td>'.$data_primeira_habilitacao.'</td>
</tr>
<tr>
<th>Data Expedição CNH:</th>
<td>'.$data_expedicao_cnh.'</td>
</tr>
<tr>
<th>Número Título:</th>
<td>'.$titulo_numero.'</td>
</tr>
<tr>
<th>Zona Título:</th>
<td>'.$titulo_zona.'</td>
</tr>
<tr>
<th>Seção Título:</th>
<td>'.$titulo_secao.'</td>
</tr>
<tr>
<th>Carteira SUS:</th>
<td>'.$carteira_sus.'</td>
</tr>
<tr>
<th>Número Reservista:</th>
<td>'.$numero_reservista.'</td>
</tr>
<tr>
<th>Série Reservista:</th>
<td>'.$serie_reservista.'</td>
</tr>
<tr>
<th>Categoria Reservista:</th>
<td>'.$cat_reservista.'</td>
</tr>
<tr>
<th>Número Registro:</th>
<td>'.$registro_numero.'</td>
</tr>
<tr>
<th>Validade Registro:</th>
<td>'.$validade_registro.'</td>
</tr>
<tr>
<th>Data Emissão Registro:</th>
<td>'.$data_emissao_registro.'</td>
</tr>
<tr>
<th>Município/UF:</th>
<td>'.$municipio_uf.'</td>
</tr>
<tr>
<th>Tipo Certidão:</th>
<td>'.$tipo_certidao.'</td>
</tr>
<tr>
<th>Data Emissão Certidão:</th>
<td>'.$data_emissao_certidao.'</td>
</tr>
<tr>
<th>Termo Matrícula:</th>
<td>'.$termo_matricula.'</td>
</tr>
<tr>
<th>Livro:</th>
<td>'.$livro.'</td>
</tr>
<tr>
<th>Folha:</th>
<td>'.$folha.'</td>
</tr>
<tr>
<th>Município Certidão:</th>
<td>'.$municipio_certidao.'</td>
</tr>
<tr>
<th>UF Certidão:</th>
<td>'.$uf_certidao.'</td>
</tr>
</table>

<!-- Dependentes -->
<h2>Dependentes</h2>
<table>
<tr>
<th>Nome do Dependente 1:</th>
<td>'.$dependente_nome_1.'</td>
</tr>
<tr>
<th>CPF do Dependente 1:</th>
<td>'.$dependente_cpf_1.'</td>
</tr>
<tr>
<th>Data de Nascimento do Dependente 1:</th>
<td>'.$dependente_data_nascimento_1.'</td>
</tr>
<tr>
<th>Grau de Dependência 1:</th>
<td>'.$dependencia_1.'</td>
</tr>
<tr>
<th>Nome do Dependente 2:</th>
<td>'.$dependente_nome_2.'</td>
</tr>
<tr>
<th>CPF do Dependente 2:</th>
<td>'.$dependente_cpf_2.'</td>
</tr>
<tr>
<th>Data de Nascimento do Dependente 2:</th>
<td>'.$dependente_data_nascimento_2.'</td>
</tr>
<tr>
<th>Grau de Dependência 2:</th>
<td>'.$dependencia_2.'</td>
</tr>
<tr>
<th>Nome do Dependente 3:</th>
<td>'.$dependente_nome_3.'</td>
</tr>
<tr>
<th>CPF do Dependente 3:</th>
<td>'.$dependente_cpf_3.'</td>
</tr>
<tr>
<th>Data de Nascimento do Dependente 3:</th>
<td>'.$dependente_data_nascimento_3.'</td>
</tr>
<tr>
<th>Grau de Dependência 3:</th>
<td>'.$dependencia_3.'</td>
</tr>
<tr>
<th>Nome do Dependente 4:</th>
<td>'.$dependente_nome_4.'</td>
</tr>
<tr>
<th>CPF do Dependente 4:</th>
<td>'.$dependente_cpf_4.'</td>
</tr>
<tr>
<th>Data de Nascimento do Dependente 4:</th>
<td>'.$dependente_data_nascimento_4.'</td>
</tr>
<tr>
<th>Grau de Dependência 4:</th>
<td>'.$dependencia_4.'</td>
</tr>
</table>
<h2>Assinaturas</h2>
<table style="width:100%; margin-top:50px;">
<tr>
  <td style="text-align:left;">
    <p>_______________________________________</p>
    <p>Assinatura do Funcionário:</p>
  </td>
  <td style="text-align:right;">
    <p>_______________________________________</p>
    <p>Assinatura do Empregador:</p>
  </td>
</tr>
</table>
';



$pdf->AddPage();

//conteúdo html no pdf

$pdf->writeHTML($html, true, false, true, false, '');

//saida do PDF para o navegador ou arquivo

$pdf->Output('funcionario.pdf', 'I');



?>