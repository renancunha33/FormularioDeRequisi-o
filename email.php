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

global $email; //transforma em variavel global a variavel e-mail ti.cbt@brado.com.br
$enviou =   mail("ticbt@brado.com.br,$email", 
                  utf8_decode("Solicitação de mudança: $titulo"),
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
   
   Setor Impactado:$setorimpacto
   
   =================================================
   FAVOR ANALISAR OS DADOS E ENTRAR EM CONTATO DIRETAMENTE AO SOLICITANTE!"),"From: $email");
if ($enviou)
{
 echo "<script>javascript:alert('Email enviado!')</script>";
 echo "<script>javascript:location.href='index.html'</script>";
}
else
{
 echo "<script language=javascript>";
 echo "alert ('Erro,email nao enviado')";
 echo "</script>";
}

?>