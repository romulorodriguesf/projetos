--INSERCAO DO PRIMEIRO PROJETO
INSERT INTO `projeto` 
			(`id`, `num_processo`, 
			`inicio_previsto`, 
			`termino`, 
			`nome_coordenador`, 
			`edital`, `titulo_projeto`, 
			`num_protocolo`, 
			`cotacao_moeda_estrangeira`, 
			`numero_fapeam_outorga`, 
			`publicacao_diario_oficial`) 

			VALUES ('01', '0102030405', 
				'2018-01-01 08:00:00', 
				'2018-12-31 20:00:00', 
				'Awdren Fontão', 
				'14/2018', 
				'Sistema de Gerenciamento de Projetos', 
				'000231234', 
				'4.01', 
				'15/2018', 
				'2017-12-04 06:00:00')




--INSERCAO DE UM ITEM DE PROJETO DO TIPO CUSTEIO MATERIAL DE CONSUMO
INSERT INTO `item` 
			(`id`, `natureza`, 
			`valor`, 
			`numero_item`, 
			`justificativa`, 
			`quantidade`, 
			`custo_unitario`, 
			`tipo_item`, 
			`descricao`, 
			`id_projeto`) 

			VALUES ('01', 'CUSTEIO', 
				'100', 
				'01', 
				NULL, 
				'10', 
				'10', 
				'1', 
				'Resma de Papel A4', 
				'1');


--INSERCAO DE UM ITEM DE PROJETO DO TIPO CAPITAL MATERIAL PERMANENTE
INSERT INTO `item` 
			(`id`, `natureza`, 
			`valor`, 
			`numero_item`, 
			`justificativa`, 
			`quantidade`, 
			`custo_unitario`, 
			`tipo_item`, 
			`descricao`, 
			`id_projeto`) 

			VALUES ('02', 'CAPITAL', 
				'5000', 
				'02', 
				NULL, 
				'2', 
				'2500', 
				'6', 
				'Notebook Sony VAIO', 
				'1');


--INSERCAO DE UM ITEM DE PROJETO DO TIPO CUSTEIO SERVICO DE TERCEIRO PESSOA FISICA
INSERT INTO `item` 
			(`id`, 
			`natureza`, 
			`valor`, 
			`numero_item`, 
			`justificativa`, 
			`quantidade`, 
			`custo_unitario`, 
			`tipo_item`, 
			`descricao`, 
			`id_projeto`) 

			VALUES ('03', 'CUSTEIO', 
				'2000', 
				'03', 
				NULL, 
				'20', 
				'100', 
				'3', 
				'Limpeza de ar condicionado', 
				'1');