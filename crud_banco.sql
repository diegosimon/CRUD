-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.28-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para crud_banco
CREATE DATABASE IF NOT EXISTS `crud_banco` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `crud_banco`;


-- Copiando estrutura para tabela crud_banco.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `codigo` varchar(50) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `qtd_estoque` int(11) NOT NULL,
  `valor_venda` double NOT NULL,
  `valor_custo` double NOT NULL,
  `categoria` varchar(250) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela crud_banco.produto: ~0 rows (aproximadamente)
DELETE FROM `produto`;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`codigo`, `descricao`, `qtd_estoque`, `valor_venda`, `valor_custo`, `categoria`) VALUES
	('123', 'Produto 1', 13, 45.7, 24.6, 'InformÃ¡tica'),
	('456', 'Produto 2', 22, 22.78, 12, 'AcessÃ³rios');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
