 # 🧩 Projeto — Sistema de Gerenciamento de Clientes e Serviços

![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue?logo=php\&logoColor=white)
![Status](https://img.shields.io/badge/Status-Em%20Desenvolvimento-yellow)

Aplicação PHP simples com páginas administrativas para cadastro, alteração e exclusão de **clientes** e **serviços**.
Desenvolvida com foco em **aprendizado**, utilizando **PHP**, **MySQL** e o ambiente **XAMPP**.

---

## 🚀 Funcionalidades

✅ CRUD completo para **clientes**
✅ CRUD completo para **serviços**
✅ Conexão com banco de dados MySQL
✅ Páginas separadas para cada funcionalidade
✅ Estrutura simples e modular (HTML + PHP puro)

---

## 🧱 Requisitos

* PHP 7.4 ou superior
* XAMPP (Apache + MySQL)
* Navegador moderno
* Editor de código (VS Code, Sublime, etc.)

---

## ⚙️ Preparando o ambiente com XAMPP

### 1. Instalação

Baixe o **XAMPP** em: [https://www.apachefriends.org](https://www.apachefriends.org)
Disponível para *Windows, macOS* e *Linux*.

---

### 2. Adicionando o projeto

Coloque a pasta do projeto dentro da pasta `htdocs` do XAMPP.

Exemplo:

```
C:\xampp\htdocs\projeto_clientes_servicos
```

---

### 3. Iniciando os serviços

Abra o painel do XAMPP e clique em **Start** no **Apache** e no **MySQL**.

---

### 4. Criando o banco de dados

1. Acesse: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Clique em **Importar**
3. Selecione o arquivo `servicos.sql` (que vem junto com o projeto)
4. Clique em **Executar**

Esse arquivo cria o banco `sistema_servicos` com as tabelas e registros iniciais.

---

### 5. Configurando a conexão

No arquivo `admin/config.inc.php`, confira se as credenciais estão corretas:

```php
<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema_servicos";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
```

---

## ▶ Executando o projeto

Abra o navegador e acesse:

```
http://localhost/projeto_clientes_servicos
```

Ou diretamente a área administrativa:

```
http://localhost/projeto_clientes_servicos/admin/index.php
```

---

## 🗃 Estrutura do Banco de Dados

**Banco:** `sistema_servicos`

### Tabela `clientes`

| Campo   | Tipo         | Descrição                |
| ------- | ------------ | ------------------------ |
| id      | INT          | Identificador do cliente |
| cliente | VARCHAR(100) | Nome do cliente          |
| cidade  | VARCHAR(100) | Cidade do cliente        |
| estado  | VARCHAR(2)   | Estado do cliente        |

### Tabela `servicos`

| Campo     | Tipo          | Descrição                |
| --------- | ------------- | ------------------------ |
| id        | INT           | Identificador do serviço |
| servico   | VARCHAR(100)  | Nome do serviço          |
| categoria | VARCHAR(100)  | Categoria do serviço     |
| preco     | DECIMAL(10,2) | Valor do serviço         |
| descricao | TEXT          | Detalhes adicionais      |

---

## 🧰 Estrutura de Pastas

```
admin/
 ├── admin_clientes.php               → Lista e gerencia clientes
 ├── admin_clientes_servicos.php      → Lista e gerencia serviços
 ├── cadastra_clientes.php            → Cadastra novos clientes
 ├── cadastra_clientes_servicos.php   → Cadastra novos serviços
 ├── altera_clientes.php              → Atualiza dados de clientes
 ├── altera_clientes_sercos.php       → Atualiza dados de serviços
 ├── delete_cliente.php               → Exclui clientes
 ├── delete_cliente_servicos.php      → Exclui serviços
 ├── form_clientes.php                → Formulário de cadastro de clientes
 ├── form_clientes_servicos.php       → Formulário de cadastro de serviços
 ├── form_clientes_alterar.php        → Formulário de edição de clientes
 ├── form_clientes_alterar_servicos.php → Formulário de edição de serviços
 ├── config.inc.php                   → Conexão com o banco
index.php                             → Página inicial
clientes.php                          → Página pública de clientes
conteudo.php                          → Conteúdo principal
faleconosco.php                       → Página de contato
menu.php                              → Menu de navegação
rodape.php                            → Rodapé do site
topo.php                              → Cabeçalho do site
servicos.sql                          → Banco de dados com tabelas e exemplos
```

---

## 🧩 Área Administrativa

A área **admin** permite:

* 👥 Gerenciar clientes (inserir, editar, excluir)
* 💼 Gerenciar serviços (inserir, editar, excluir)
* 📊 Visualizar registros em tabelas organizadas
* 🔗 Navegação simples entre as páginas

---

## 🏁 Conclusão

Depois de importar o banco de dados e iniciar o servidor com o XAMPP, acesse o endereço local do projeto.
Se as listas de **clientes e serviços** aparecerem corretamente, seu ambiente está configurado com sucesso! 🎉

---
