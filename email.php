<?php
// recebe as Variaveis
$nome     = $_POST["txtNomeSolicitante"    ];
$email     = $_POST["txtEmailSolicitante"    ];
$data     = $_POST["dtSolicitacao"    ];
$matricula     = $_POST["txtMatricula"    ];
$setor     = $_POST["txtsetor"    ];
$titulo     = $_POST["txtTitulo"    ];
$motivo     = $_POST["txtMotivo"    ];
$descricao     = $_POST["txtDescricao"    ];
$efeitos     = $_POST["txtEfeitos"    ];
$impacto     = $_POST["txtImpacto"    ];
$setorimpacto     = $_POST["txtsetorImpact"    ];

global $email; //transforma em variavel global a variavel e-mail
$enviou =   mail("xxxxx@xxxxxx.com.br,$email",utf8_decode("Solicitação de mudança: $titulo"),
   utf8_decode("
   Uma nova soliçitação de mudança foi gerada por um usuário da empresa.
   
   Nome do solicitante: $nome
   Matrícula: $matricula
   Data da solicitação: $data
   Setor: $setor
   ________________________________________________
   Motivo da mudança: $motivo
   Descrição: $descricao
   ________________________________________________
   Efeitos da mudança: $efeitos
   Impacto caso não seja realizada:
   $impacto
   
   Setor Impactado: $setorimpacto
   
   =================================================
   FAVOR ANALISAR OS DADOS E ENTRAR EM CONTATO DIRETAMENTE AO SOLICITANTE!"),"From: $email");
if ($enviou)
{
 print "Email Enviado!";
}
else
{
 print "Erro, email nao enviado";
}

?>
