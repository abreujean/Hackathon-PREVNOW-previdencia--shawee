<?php
require ("/home/datawebinsider/www/waveskit/vendor/autoload.php");
use deemru\WavesKit;

$wk = new WavesKit("T");
$wk->setSeed("shift attack deal slim oak ethics shrug purse toilet sound divorce stone age input glad");

$emailHash=$wk->base58Encode($wk->secureHash($_POST["email"]));
	$passwordHash=$wk->base58Encode($wk->secureHash($_POST["password"]));
if($_POST["call"]=="update") {
	


	$whiteListAddr="3N5bBn8VtQYV8XcH2MMSdeFzyGwDYo6RRYZ";

	if($op=$wk->getData($emailHash, $whiteListAddr)==false) echo "Este identificador não possui contrato para atualizar";
	else if($op!=$passwordHash) echo "Senha incorreta";
	else {
		$plan=array();
		$plan[$emailHash."_prevtipos"]=json_encode(
			Array("TipoFechada"=>$_POST["prevComplFechOpt"], "TipoAberta"=>$_POST["prevComplAberOpt"]), JSON_UNESCAPED_UNICODE );
		$plan[$emailHash."_investimento"]=json_encode(Array("aplicação"=>$_POST["corretoras"]." ".$_POST["percentual"]), JSON_UNESCAPED_UNICODE );
		$plan[$emailHash."_impostorenda"]=$_POST["ir"];
		$plan[$emailHash."_tarifa"]=$_POST["tarifa"];
		$plan[$emailHash."_update"]=time();
		$plan[$emailHash."_prevCredits"]=$wk->getData($emailHash."_prevCredits", $whiteListAddr)+100;

		





		//echo "Atualização executada com sucesso, verifique seu email com o novo documento de contrato<br/>";

		//echo "Seu identificador é".$emailHash." <br/>";

	//	echo "Assinatura de mensagem: ".$wk->base58Encode($wk->sign($_POST["nome"].$_POST["sobrenome"].$_POST["cpf"]))."<br/>";

		$tx=$wk->txData($plan);
		$tx=$wk->txSign($tx);

	//	echo "Assinatura do sistema: ".$tx["proofs"][0]."<br/>";

		
        $tx = $wk->txBroadcast( $tx );
     //       echo "Id de transação: ".$tx["id"];

    //        echo "Você acumulou: ".$plan[$emailHash."_prevCredits"]." tokens PrevCredits<br/>";

     echo '<div id="validation" class="col-md-12">
<h4>Contrato Operacional</h4>
    <span>Abertura executada com sucesso, verifique seu email com o documento de contrato: </span>
        <p>Seu identificador é:<b> '.$emailHash.'</b></p>
    <span>Assinatura de mensagem: </span>
        <p>'.$wk->base58Encode($wk->sign($_POST["nome"].$_POST["sobrenome"].$_POST["cpf"])).'</p>
    <span>Assinatura do sistema:  </span>
        <p>'.$tx["proofs"][0].'</p>
    <span>Id de transação:</span>
       <p><a href="https://wavesexplorer.com/testnet/tx/'.$tx["id"].'">'.$tx["id"].'</a><br>
       Você acumulou: '.$plan[$emailHash."_prevCredits"].' tokens PrevCredits</p>

    <div class="display:flex;" class="btn-contrato">
        <input value="Imprimir e Assinar" id="submit-button" class="contact-submit" type="button"> 
        <input value="Assinar com ICP e enviar" id="submit-button3" class="contact-submit" type="button">
        <input value="Assinar com OriginalMy e enviar" id="submit-button2" class="contact-submit" type="button">
    </div>
</div>';




        

	}
}

if($_POST["call"]=="send") {



	$whiteListAddr="3N5bBn8VtQYV8XcH2MMSdeFzyGwDYo6RRYZ";

	if($op=$wk->getData($emailHash, $whiteListAddr)==true) echo "Este identificador já possui contrato escolha atualizar";
	else {
		$plan=array();
		$plan[$emailHash."_prevtipos"]=json_encode(
			Array("TipoFechada"=>$_POST["prevComplFechOpt"], "TipoAberta"=>$_POST["prevComplAberOpt"]), JSON_UNESCAPED_UNICODE );
		$plan[$emailHash."_investimento"]=json_encode(Array("aplicação"=>$_POST["corretoras"]." ".$_POST["percentual"]), JSON_UNESCAPED_UNICODE );
		$plan[$emailHash."_impostorenda"]=$_POST["ir"];
		$plan[$emailHash."_tarifa"]=$_POST["tarifa"];
		$plan[$emailHash."_update"]=time();
		$plan[$emailHash."_prevCredits"]="500";

		//echo "Abertura executada com sucesso, verifique seu email com o documento de contrato<br/>";

		//echo "Seu identificador é".$emailHash." <br/>";

		//echo "Assinatura de mensagem: ".$wk->base58Encode($wk->sign($_POST["nome"].$_POST["sobrenome"].$_POST["cpf"]))."<br/>";

		$tx=$wk->txData($plan);
		$tx=$wk->txSign($tx);

		//echo "Assinatura do sistema: ".$tx["proofs"][0]."<br/>";

		
        $tx = $wk->txBroadcast( $tx );
        //echo "Id de transação: ".$tx["id"];
     //echo "Você ganho: 500 tokens PrevCredits<br/>";

     echo '<div id="validation" style="text-align:center" class="col-md-12">
<h4>Contrato Operacional</h4>
    <span>Abertura executada com sucesso, verifique seu email com o documento de contrato: </span>
        <p>Seu identificador é:<b> '.$emailHash.'</b></p>
    <span>Assinatura de mensagem: </span>
        <p>'.$wk->base58Encode($wk->sign($_POST["nome"].$_POST["sobrenome"].$_POST["cpf"])).'</p>
    <span>Assinatura do sistema:  </span>
        <p>'.$tx["proofs"][0].'</p>
    <span>Id de transação:</span>
       <p><a href="https://wavesexplorer.com/testnet/tx/'.$tx["id"].'">'.$tx["id"].'</a><br>
       Você ganhou: 500 tokens PrevCredits</p>

    <div class="display:flex;" class="btn-contrato">
        <input value="Imprimir e Assinar" id="submit-button" class="contact-submit" type="button"> 
        <input value="Assinar com ICP e enviar" id="submit-button3" class="contact-submit" type="button">
        <input value="Assinar com OriginalMy e enviar" id="submit-button2" class="contact-submit" type="button">
    </div>
</div>';
        
            
        

	}
}
























?>
