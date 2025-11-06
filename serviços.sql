CREATE DATABASE IF NOT EXISTS sistema_servicos;
USE sistema_servicos;

CREATE TABLE IF NOT EXISTS servicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    servico VARCHAR(100) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    descricao TEXT,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('ativo', 'inativo') DEFAULT 'ativo'
);

CREATE TABLE IF NOT EXISTS config (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chave VARCHAR(50) UNIQUE NOT NULL,
    valor TEXT,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO servicos (servico, categoria, preco, descricao) VALUES
('Desenvolvimento de Site', 'Tecnologia', 2500.00, 'Criação completa de site institucional.'),
('Manutenção de Computadores', 'Suporte Técnico', 150.00, 'Serviço de diagnóstico e reparo.'),
('Design de Logo', 'Design Gráfico', 300.00, 'Criação de logotipo profissional.'),
('Consultoria em TI', 'Consultoria', 500.00, 'Análise e planejamento de infraestrutura de TI.');

INSERT INTO config (chave, valor) VALUES
('nome_sistema', 'Sistema de Gerenciamento de Serviços'),
('versao', '1.0'),
('email_contato', 'contato@sistema.com');
