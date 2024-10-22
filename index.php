<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário e-Social</title>
</head>
<body>
    <div class="container">
        <h1>FORMULÁRIO E-SOCIAL</h1>

        <!-- Seção 1 - Dados de Contratação -->
        <section>
            <h2>1 - DADOS DE CONTRATAÇÃO</h2>
    <form action="gerar_pdf.php" method="POST">        

                <div class="form-group">
                    <label for="empresa">EMPRESA:</label>
                    <input type="text" id="empresa" name="empresa" value="BRASIL GESTÃO LTDA" readonly>
                </div>
                <div class="form-group">
                    <label for="departamento">DEPARTAMENTO:</label>
                    <input type="text" id="departamento" name="departamento">
                </div>
                <div class="form-group">
                    <label for="funcao">FUNÇÃO:</label>
                    <input type="text" id="funcao" name="funcao">
                </div>
                <div class="form-group">
                    <label for="salario">SALÁRIO:</label>
                    <input type="text" id="salario" name="salario" value="R$ 2101,18" readonly>
                </div>
                <div class="form-group">
                    <label>PNE (PESSOAS COM NECESSIDADES ESPECIAIS):</label>
                    <select id="pne" name="pne">
                        <option value="">Selecione</option>
                        <option value="sim">SIM</option>
                        <option value="nao">NÃO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="horario_trabalho">HORÁRIO DE TRABALHO:</label>
                    <input type="text" id="horario_trabalho" name="horario_trabalho" value="CARGA HORÁRIA: 360 HORAS" readonly>
                </div>
                <div class="form-group">
                    <label>Deseja contribuir com a contribuição sindical?</label>
                    <select id="contribuicao" name="contribuicao">
                        <option value="">Selecione</option>
                        <option value="sim">SIM</option>
                        <option value="nao">NÃO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="data_admissao">DATA ADMISSÃO:</label>
                    <input type="date" id="data_admissao" name="data_admissao">
                </div>
                <div class="form-group">
                    <label>Deseja receber VALE TRANSPORTE?</label>
                    <select id="valetransporte" name="valetransporte">
                        <option value="">Selecione</option>
                        <option value="sim">SIM</option>
                        <option value="nao">NÃO</option>
                    </select>
        </section>

        <!-- Seção 2 - Dados do Colaborador -->
        <section>
            <h2>2 - DADOS DO COLABORADOR</h2>

                <div class="form-group">
                    <label for="nome">NOME:</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="nome_social">NOME SOCIAL:</label>
                    <input type="text" id="nome_social" name="nome_social">
                </div>
                <div class="form-group">
                    <label for="email">EMAIL:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="cel">CEL:</label>
                    <input type="text" id="cel" name="cel">
                </div>
                <div class="form-group">
                    <label for="recado">CEL para Recado:</label>
                    <input type="text" id="recado" name="recado">
                </div>
                <h3>ENDEREÇO:</h3>
                <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep">
                </div>
                <div class="form-group">
                    <label for="rua">RUA:</label>
                    <input type="text" id="rua" name="rua">
                </div>
                <div class="form-group">
                    <label for="bairro">BAIRRO:</label>
                    <input type="text" id="bairro" name="bairro">
                </div>
                <div class="form-group">
                    <label for="numerocasa">NUMERO DA RESIDÊNCIA:</label>
                    <input type="text" id="numerocasa" name="numerocasa">
                </div>
                <h3>NASCIMENTO:</h3>
                <div class="form-group">
                    <label for="data_nascimento">DATA:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento">
                </div>
                <div class="form-group">
                    <label for="uf">UF:</label>
                    <input type="text" id="uf" name="uf">
                </div>
                <div class="form-group">
                    <label for="municipio">MUNICÍPIO:</label>
                    <input type="text" id="municipio" name="municipio">
                </div>
                <h3>FILIAÇÃO:</h3>
                <div class="form-group">
                    <label for="pai">NOME DO PAI:</label>
                    <input type="text" id="pai" name="pai">
                </div>
                <div class="form-group">
                    <label for="mae">NOME DA MÃE:</label>
                    <input type="text" id="mae" name="mae">
                </div>
                <h3>CONTA BANCÁRIA:</h3>
                <div class="form-group">
                    <label for="numero_conta">N° DA CONTA:</label>
                    <input type="text" id="numero_conta" name="numero_conta">
                </div>
                <div class="form-group">
                    <label for="agencia">AGÊNCIA:</label>
                    <input type="text" id="agencia" name="agencia">
                </div>
                <div class="form-group">
                    <label for="tipo_conta">TIPO DE CONTA:</label>
                    <input type="text" id="tipo_conta" name="tipo_conta">
                </div>
                <div class="form-group">
                    <label>RAÇA OU COR:</label>
                    <select id="raca" name="raca">
                        <option value="">Selecione</option>
                        <option value="branco">BRANCO</option>
                        <option value="negro">NEGRO</option>
                        <option value="amarelo">AMARELO</option>
                        <option value="indigena">INDEIGENA</option>
                        <option value="pardo">PARDO</option>
                    </select>
                </div>

        </section>

        <!-- Seção 3 - Dados Complementares -->
        <section>
            <h2>3 - DADOS COMPLEMENTARES</h2>

                <h3>INFORMAÇÕES CASA PRÓPRIA</h3>
                <div class="form-group">
                    <label for="casa-propria">IMÓVEL PRÓPRIO:</label>
                    <select id="casa" name="casa">
                        <option value="">Selecione</option>
                        <option value="sim">SIM</option>
                        <option value="nao">NÃO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fgts">RECURSOS FGTS:</label>
                    <select id="fgts" name="fgts">
                        <option value="">Selecione</option>
                        <option value="sim">SIM</option>
                        <option value="nao">NÃO</option>
                    </select>
                </div>

                <h3>INFORMAÇÕES SEGURO DESEMPREGO</h3>
                <div class="form-group">
                    <label for="desemprego">ESTÁ RECEBENDO:</label>
                    <select id="desemprego" name="desemprego">
                        <option value="">Selecione</option>
                        <option value="sim">SIM</option>
                        <option value="nao">NÃO</option>
                    </select>
                </div>

                <h3>GRAU DE INSTRUÇÃO</h3>
                <div class="form-group">
                    <select id="grau_instrucao" name="grau_instrucao">
                        <option value="">Selecione</option>
                        <option value="analfabeto">Analfabeto</option>
                        <option value="fundamental_incompleto_ate_5">Até o 5º ano incompleto do ensino fundamental (antiga 4ª série)</option>
                        <option value="fundamental_completo">5º ano completo do ensino fundamental</option>
                        <option value="fundamental_incompleto_6a9">Do 6º ao 9º ano do ensino fundamental incompleto (antiga 5ª à 8ª série)</option>
                        <option value="fundamental_completo">Ensino fundamental completo</option>
                        <option value="medio_incompleto">Ensino médio incompleto</option>
                        <option value="medio_completo">Ensino médio completo</option>
                        <option value="superior_incompleta">Educação superior incompleta</option>
                        <option value="superior_completa">Educação superior completa</option>
                        <option value="pos_graduacao">Pós Graduação</option>
                        <option value="mestrado">Mestrado</option>
                        <option value="doutorado">Doutorado</option>
                    </select>
                </div>

                <h3>ESTADO CIVIL</h3>
                <div class="form-group">
                    <select id="estado_civil" name="estado_civil">
                        <option value="">Selecione</option>
                        <option value="solteiro">Solteiro</option>
                        <option value="casado">Casado</option>
                        <option value="divorciado">Divorciado</option>
                        <option value="viuvo">Viúvo</option>
                        <option value="outros">Outros</option>
                        <option value="uniao_estavel">União Estável</option>
                    </select>
                </div>

        </section>

        <!-- Seção 4 - Documentos -->
        <section>
            <h2>4 - DOCUMENTOS</h2>

                <div class="form-group">
                    <label for="pis">N° PIS:</label>
                    <input type="text" id="pis" name="pis">
                </div>
                <div class="form-group">
                    <label for="datapis">DATA DA EMISSÃO:</label>
                    <input type="date" id="datapis" name="datapis">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf">
                </div>
                <h3>CARTEIRA DE IDENTIDADE</h3>
                <div class="form-group">
                    <label for="carteira_identidade">CARTEIRA DE IDENTIDADE N°:</label>
                    <input type="text" id="carteira_identidade" name="carteira_identidade">
                </div>
                <div class="form-group">
                    <label for="orgao_expedidor">ÓRGÃO EXPEDIDOR:</label>
                    <input type="text" id="orgao_expedidor" name="orgao_expedidor">
                </div>
                <div class="form-group">
                    <label for="data_expedicao_id">DATA EXPEDIÇÃO:</label>
                    <input type="date" id="data_expedicao_id" name="data_expedicao_id">
                </div>
                <div class="form-group">
                    <label for="uf_id">UF:</label>
                    <input type="text" id="uf_id" name="uf_id">
                </div>
                <H3>CTPS</H3>
                <div class="form-group">
                    <label for="ctps_numero">CTPS N°:</label>
                    <input type="text" id="ctps_numero" name="ctps_numero">
                </div>
                <div class="form-group">
                    <label for="serie_uf">SÉRIE E UF:</label>
                    <input type="text" id="serie_uf" name="serie_uf">
                </div>
                <div class="form-group">
                    <label for="data_expedicao_ctps">DATA EXP:</label>
                    <input type="date" id="data_expedicao_ctps" name="data_expedicao_ctps">
                </div>
                <h3>CNH</h3>
                <div class="form-group">
                    <label for="cnh_numero">CNH N°:</label>
                    <input type="text" id="cnh_numero" name="cnh_numero">
                </div>
                <div class="form-group">
                    <label for="orgao_expeditor_cnh">ORGÃO EXPEDITOR:</label>
                    <input type="text" id="orgao_expeditor_cnh" name="orgao_expeditor_cnh">
                </div>
                <div class="form-group">
                    <label for="cnh_categoria">CATEGORIA:</label>
                    <input type="text" id="cnh_categoria" name="cnh_categoria">
                </div>
                <div class="form-group">
                    <label for="data_validade_cnh">DATA VALIDADE:</label>
                    <input type="date" id="data_validade_cnh" name="data_validade_cnh">
                </div>
                <div class="form-group">
                    <label for="data_primeira_habilitacao">DATA 1ª HABILITAÇÃO:</label>
                    <input type="date" id="data_primeira_habilitacao" name="data_primeira_habilitacao">
                </div>
                <div class="form-group">
                    <label for="data_expedicao_cnh">DATA EXPEDIÇÃO:</label>
                    <input type="date" id="data_expedicao_cnh" name="data_expedicao_cnh">
                </div>
                <h3>TÍTULO DE ELEITOR</h3>
                <div class="form-group">
                    <label for="titulo_numero">NÚMERO:</label>
                    <input type="text" id="titulo_numero" name="titulo_numero">
                </div>
                <div class="form-group">
                    <label for="titulo_zona">ZONA:</label>
                    <input type="text" id="titulo_zona" name="titulo_zona">
                </div>
                <div class="form-group">
                    <label for="titulo_secao">SEÇÃO:</label>
                    <input type="text" id="titulo_secao" name="titulo_secao">
                </div>
                <div class="form-group">
                    <label for="carteira_sus">Número da carteira do SUS:</label>
                    <input type="text" id="carteira_sus" name="carteira_sus">
                </div>
                <h3>CERTIFICADO DE RESERVISTA</h3>
                <div class="form-group">
                    <label for="numero_reservista">NÚMERO:</label>
                    <input type="text" id="numero_reservista" name="numero_reservista">
                </div>
                <div class="form-group">
                    <label for="serie_reservista">SÉRIE:</label>
                    <input type="text" id="serie_reservista" name="serie_reservista">
                </div>
                <div class="form-group">
                    <label for="cat_reservista">CAT:</label>
                    <input type="text" id="cat_reservista" name="cat_reservista">
                </div>
                <h3>Nº REGISTRO ÓRGÃO DE CLASSE (TEC. SEGURANÇA E ENFERMEIROS):</h3>
                <div class="form-group">
                    <label for="registro_numero">Nº REGISTRO:</label>
                    <input type="text" id="registro_numero" name="registro_numero">
                </div>
                <div class="form-group">
                    <label for="validade_registro">VALIDADE:</label>
                    <input type="date" id="validade_registro" name="validade_registro">
                </div>
                <div class="form-group">
                    <label for="data_emissao_registro">DATA EMISSÃO:</label>
                    <input type="date" id="data_emissao_registro" name="data_emissao_registro">
                </div>
                <div class="form-group">
                    <label for="municipio_uf">MUNICÍPIO E UF:</label>
                    <input type="text" id="municipio_uf" name="municipio_uf">
                </div>
                <h3>CERTIDÃO CIVIL (casamento, nascimento):</h3>
                <div class="form-group">
                    <label for="tipo_certidao">TIPO:</label>
                    <input type="text" id="tipo_certidao" name="tipo_certidao">
                </div>
                <div class="form-group">
                    <label for="data_emissao_certidao">DATA EMISSÃO:</label>
                    <input type="date" id="data_emissao_certidao" name="data_emissao_certidao">
                </div>
                <div class="form-group">
                    <label for="termo_matricula">TERMO/MATRICULA:</label>
                    <input type="text" id="termo_matricula" name="termo_matricula">
                </div>
                <div class="form-group">
                    <label for="livro">LIVRO:</label>
                    <input type="text" id="livro" name="livro">
                </div>
                <div class="form-group">
                    <label for="folha">FOLHA:</label>
                    <input type="text" id="folha" name="folha">
                </div>
                <div class="form-group">
                    <label for="municipio_certidao">MUNICÍPIO:</label>
                    <input type="text" id="municipio_certidao" name="municipio_certidao">
                </div>
                <div class="form-group">
                    <label for="uf_certidao">UF:</label>
                    <input type="text" id="uf_certidao" name="uf_certidao">
                </div>
        </section>

        <!-- Seção 5 - Dados dos Dependentes -->

        <section>
    <h2>5 - DADOS DOS DEPENDENTES</h2>

    <!-- Dependente 1 -->
    <h3>Dependente 1</h3>
    <div class="form-group">
        <label for="dependente_nome_1">DEPENDENTE 1 NOME:</label>
        <input type="text" id="dependente_nome_1" name="dependente_nome_1">
    </div>
    <div class="form-group">
        <label for="dependente_cpf_1">DEPENDENTE 1 CPF:</label>
        <input type="text" id="dependente_cpf_1" name="dependente_cpf_1">
    </div>
    <div class="form-group">
        <label for="dependente_data_nascimento_1">DEPENDENTE 1 DATA NASCIMENTO:</label>
        <input type="date" id="dependente_data_nascimento_1" name="dependente_data_nascimento_1">
    </div>
    <div class="form-group">
        <label for="dependencia_1">DEPENDENTE 1 SITUAÇÃO DE DEPENDÊNCIA:</label>
        <select id="dependencia_1" name="dependencia_1">
            <option value="">Selecione</option>
            <option value="irrf">IRRF</option>
            <option value="salario_familia">Salário Família</option>
            <option value="ambos">Ambos</option>
            <option value="nenhum">Nenhum</option>
        </select>
    </div>
    <h4>Dependente 1 - Local de Nascimento</h4>
    <div class="form-group">
        <label for="local_nascimento_1">LOCAL:</label>
        <input type="text" id="local_nascimento_1" name="local_nascimento_1">
    </div>
    <div class="form-group">
        <label for="cartorio_1">CARTÓRIO:</label>
        <input type="text" id="cartorio_1" name="cartorio_1">
    </div>
    <div class="form-group">
        <label for="registro_1">REGISTRO:</label>
        <input type="text" id="registro_1" name="registro_1">
    </div>
    <div class="form-group">
        <label for="termo_1">TERMO:</label>
        <input type="text" id="termo_1" name="termo_1">
    </div>
    <h4>Dependente 1 - Grau de Instrução</h4>
    <div class="form-group">
        <label for="dependente_grau_instrucao_1">GRAU DE INSTRUÇÃO:</label>
        <select id="dependente_grau_instrucao_1" name="dependente_grau_instrucao_1">
            <option value="">Selecione</option>
            <option value="analfabeto">Analfabeto</option>
            <option value="fundamental_incompleto_ate_5">Até o 5º ano incompleto do ensino fundamental</option>
            <option value="fundamental_completo">5º ano completo do ensino fundamental</option>
            <option value="fundamental_incompleto_6a9">Do 6º ao 9º ano do ensino fundamental incompleto</option>
            <option value="fundamental_completo">Ensino fundamental completo</option>
            <option value="medio_incompleto">Ensino médio incompleto</option>
            <option value="medio_completo">Ensino médio completo</option>
            <option value="superior_incompleta">Educação superior incompleta</option>
            <option value="superior_completa">Educação superior completa</option>
            <option value="pos_graduacao">Pós Graduação</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
        </select>
    </div>

    <!-- Dependente 2 -->
    <h3>Dependente 2</h3>
    <div class="form-group">
        <label for="dependente_nome_2">DEPENDENTE 2 NOME:</label>
        <input type="text" id="dependente_nome_2" name="dependente_nome_2">
    </div>
    <div class="form-group">
        <label for="dependente_cpf_2">DEPENDENTE 2 CPF:</label>
        <input type="text" id="dependente_cpf_2" name="dependente_cpf_2">
    </div>
    <div class="form-group">
        <label for="dependente_data_nascimento_2">DEPENDENTE 2 DATA NASCIMENTO:</label>
        <input type="date" id="dependente_data_nascimento_2" name="dependente_data_nascimento_2">
    </div>
    <div class="form-group">
        <label for="dependencia_2">DEPENDENTE 2 SITUAÇÃO DE DEPENDÊNCIA:</label>
        <select id="dependencia_2" name="dependencia_2">
            <option value="">Selecione</option>
            <option value="irrf">IRRF</option>
            <option value="salario_familia">Salário Família</option>
            <option value="ambos">Ambos</option>
            <option value="nenhum">Nenhum</option>
        </select>
    </div>
    <h4>Dependente 2 - Local de Nascimento</h4>
    <div class="form-group">
        <label for="local_nascimento_2">LOCAL:</label>
        <input type="text" id="local_nascimento_2" name="local_nascimento_2">
    </div>
    <div class="form-group">
        <label for="cartorio_2">CARTÓRIO:</label>
        <input type="text" id="cartorio_2" name="cartorio_2">
    </div>
    <div class="form-group">
        <label for="registro_2">REGISTRO:</label>
        <input type="text" id="registro_2" name="registro_2">
    </div>
    <div class="form-group">
        <label for="termo_2">TERMO:</label>
        <input type="text" id="termo_2" name="termo_2">
    </div>
    <h4>Dependente 2 - Grau de Instrução</h4>
    <div class="form-group">
        <label for="dependente_grau_instrucao_2">GRAU DE INSTRUÇÃO:</label>
        <select id="dependente_grau_instrucao_2" name="dependente_grau_instrucao_2">
            <option value="">Selecione</option>
            <option value="analfabeto">Analfabeto</option>
            <option value="fundamental_incompleto_ate_5">Até o 5º ano incompleto do ensino fundamental</option>
            <option value="fundamental_completo">5º ano completo do ensino fundamental</option>
            <option value="fundamental_incompleto_6a9">Do 6º ao 9º ano do ensino fundamental incompleto</option>
            <option value="fundamental_completo">Ensino fundamental completo</option>
            <option value="medio_incompleto">Ensino médio incompleto</option>
            <option value="medio_completo">Ensino médio completo</option>
            <option value="superior_incompleta">Educação superior incompleta</option>
            <option value="superior_completa">Educação superior completa</option>
            <option value="pos_graduacao">Pós Graduação</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
        </select>
    </div>

    <!-- Dependente 3 -->
    <h3>Dependente 3</h3>
    <div class="form-group">
        <label for="dependente_nome_3">DEPENDENTE 3 NOME:</label>
        <input type="text" id="dependente_nome_3" name="dependente_nome_3">
    </div>
    <div class="form-group">
        <label for="dependente_cpf_3">DEPENDENTE 3 CPF:</label>
        <input type="text" id="dependente_cpf_3" name="dependente_cpf_3">
    </div>
    <div class="form-group">
        <label for="dependente_data_nascimento_3">DEPENDENTE 3 DATA NASCIMENTO:</label>
        <input type="date" id="dependente_data_nascimento_3" name="dependente_data_nascimento_3">
    </div>
    <div class="form-group">
        <label for="dependencia_3">DEPENDENTE 3 SITUAÇÃO DE DEPENDÊNCIA:</label>
        <select id="dependencia_3" name="dependencia_3">
            <option value="">Selecione</option>
            <option value="irrf">IRRF</option>
            <option value="salario_familia">Salário Família</option>
            <option value="ambos">Ambos</option>
            <option value="nenhum">Nenhum</option>
        </select>
    </div>
    <h4>Dependente 3 - Local de Nascimento</h4>
    <div class="form-group">
        <label for="local_nascimento_3">LOCAL:</label>
        <input type="text" id="local_nascimento_3" name="local_nascimento_3">
    </div>
    <div class="form-group">
        <label for="cartorio_3">CARTÓRIO:</label>
        <input type="text" id="cartorio_3" name="cartorio_3">
    </div>
    <div class="form-group">
        <label for="registro_3">REGISTRO:</label>
        <input type="text" id="registro_3" name="registro_3">
    </div>
    <div class="form-group">
        <label for="termo_3">TERMO:</label>
        <input type="text" id="termo_3" name="termo_3">
    </div>
    <h4>Dependente 3 - Grau de Instrução</h4>
    <div class="form-group">
        <label for="dependente_grau_instrucao_3">GRAU DE INSTRUÇÃO:</label>
        <select id="dependente_grau_instrucao_3" name="dependente_grau_instrucao_3">
            <option value="">Selecione</option>
            <option value="analfabeto">Analfabeto</option>
            <option value="fundamental_incompleto_ate_5">Até o 5º ano incompleto do ensino fundamental</option>
            <option value="fundamental_completo">5º ano completo do ensino fundamental</option>
            <option value="fundamental_incompleto_6a9">Do 6º ao 9º ano do ensino fundamental incompleto</option>
            <option value="fundamental_completo">Ensino fundamental completo</option>
            <option value="medio_incompleto">Ensino médio incompleto</option>
            <option value="medio_completo">Ensino médio completo</option>
            <option value="superior_incompleta">Educação superior incompleta</option>
            <option value="superior_completa">Educação superior completa</option>
            <option value="pos_graduacao">Pós Graduação</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
        </select>
    </div>

    <!-- Dependente 4 -->
    <h3>Dependente 4</h3>
    <div class="form-group">
        <label for="dependente_nome_4">DEPENDENTE 4 NOME:</label>
        <input type="text" id="dependente_nome_4" name="dependente_nome_4">
    </div>
    <div class="form-group">
        <label for="dependente_cpf_4">DEPENDENTE 4 CPF:</label>
        <input type="text" id="dependente_cpf_4" name="dependente_cpf_4">
    </div>
    <div class="form-group">
        <label for="dependente_data_nascimento_4">DEPENDENTE 4 DATA NASCIMENTO:</label>
        <input type="date" id="dependente_data_nascimento_4" name="dependente_data_nascimento_4">
    </div>
    <div class="form-group">
        <label for="dependencia_4">DEPENDENTE 4 SITUAÇÃO DE DEPENDÊNCIA:</label>
        <select id="dependencia_4" name="dependencia_4">
            <option value="">Selecione</option>
            <option value="irrf">IRRF</option>
            <option value="salario_familia">Salário Família</option>
            <option value="ambos">Ambos</option>
            <option value="nenhum">Nenhum</option>
        </select>
    </div>
    <h4>Dependente 4 - Local de Nascimento</h4>
    <div class="form-group">
        <label for="local_nascimento_4">LOCAL:</label>
        <input type="text" id="local_nascimento_4" name="local_nascimento_4">
    </div>
    <div class="form-group">
        <label for="cartorio_4">CARTÓRIO:</label>
        <input type="text" id="cartorio_4" name="cartorio_4">
    </div>
    <div class="form-group">
        <label for="registro_4">REGISTRO:</label>
        <input type="text" id="registro_4" name="registro_4">
    </div>
    <div class="form-group">
        <label for="termo_4">TERMO:</label>
        <input type="text" id="termo_4" name="termo_4">
    </div>
    <h4>Dependente 4 - Grau de Instrução</h4>
    <div class="form-group">
        <label for="dependente_grau_instrucao_4">GRAU DE INSTRUÇÃO:</label>
        <select id="dependente_grau_instrucao_4" name="dependente_grau_instrucao_4">
            <option value="">Selecione</option>
            <option value="analfabeto">Analfabeto</option>
            <option value="fundamental_incompleto_ate_5">Até o 5º ano incompleto do ensino fundamental</option>
            <option value="fundamental_completo">5º ano completo do ensino fundamental</option>
            <option value="fundamental_incompleto_6a9">Do 6º ao 9º ano do ensino fundamental incompleto</option>
            <option value="fundamental_completo">Ensino fundamental completo</option>
            <option value="medio_incompleto">Ensino médio incompleto</option>
            <option value="medio_completo">Ensino médio completo</option>
            <option value="superior_incompleta">Educação superior incompleta</option>
            <option value="superior_completa">Educação superior completa</option>
            <option value="pos_graduacao">Pós Graduação</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
        </select>
    </div>
</section>

        
        <div class="form-group">
            <input type="submit" value="Enviar Dados" class="btn-custom">
        </div>
        </form> 
</body>
</html>
