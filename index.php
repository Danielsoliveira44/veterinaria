<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="site de clinica veterinaria com profissionais com foco no melhor atendimento ao cliente e seu pet">
    <meta name="author" content="Daniel da Silva Oliveira">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/mystile.css">
</head>
<body>   
    <?php include('header.html'); ?>
<div class="container">
      <div id="texto">   
       <h1>Veterinary Clinic</h1><br>
       <p>Médicos veterinários de confiança e procedimentos desenvolvidos com <br> 
                carinhovisando o bem-estar do seu bichinho, com o local perfeito para <br>
                seu pet.</p> 
        <div class="btn_index">        
        <a href="http://localhost/veterinaria/servico.php" id="btn_servico" type="button">NOSSOS SERVIÇOS</a> 
        <a href="https://api.whatsapp.com/send/?phone=5511951934537&text&type=phone_number&app_absent=0" id="btn_msg" type="button">ENVIE SUA MENSAGEM</a>        
        </div>
    </div>        
        <img id=img_index src="imagens/fundo-index.png" alt="filhote de cachorro">         
</div>


<div class="servico_section">
        <div class="servicos"> 
                <div class="img_servico">
                    <img src="imagens/vacina.png" alt="vacina">
                </div>
            <h1>VACINAÇÃO</h1>
            <p>Imunização veterinária.</p>
        </div>
        <div class="servicos">
                <div class="img_servico">
                    <img src="imagens/primeiros-socorros.png" alt="kit primeiros socorros">
                </div>       
            <h1>INTERNAÇÃO</h1>
            <p>Internação veterinaria, para<br> 
                o bem do seu melhor amigo</p>
        </div>
        <div class="servicos">
                <div class="img_servico">
                    <img src="imagens/consulta.png" alt="imagem de coraçâo com cachorros">     
                </div>       
            <h1>CONSULTA</h1>
            <p>Consulta veterinária, curativo e prescrição.</p>
        </div>
        <div class="servicos">
                <div class="img_servico">
                    <img src="imagens/exame.png" alt="imagem de coraçâo com cachorros">     
                </div>       
            <h1>EXAMES</h1>
            <p>Exames e acompanhamento<br> 
                para o seu melhor amigo.</p>
        </div>
        <div class="servicos">
                <div class="img_servico">
                    <img src="imagens/sutura.png" alt="imagem de coraçâo com cachorros">     
                </div>       
            <h1>SUTURAS</h1>
            <p>Consulta veterinária, curativo<br> 
                     e prescrição.</p>
        </div>
        <div class="servicos">
                <div class="img_servico">
                    <img src="imagens/eutanasia.png" alt="imagem de coraçâo com cachorros">     
                </div>       
            <h1>EUTANÁSIAS</h1>
            <p>Procedimento de eutanásia de cães e gatos.</p>
        </div>  
</div>
<div class="banner_contato">
    <img src="imagens/banner.png" alt="banner animais silvestres">
    <h1>Atendemos cães, gatos<br>
    e animais silvestres.</h1>
    <p>Os melhores cuidados para seu pet<br>
        com o amor que ele merece.</p>
</div>
<div class="local">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.794709739995!2d-46.458647385070876!3d-23.539884984693558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf222d207b%3A0x1939a901dce47f36!2sAv.%20Itaquera%2C%208266%20-%20Vila%20Carmosina%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008295-000!5e0!3m2!1spt-BR!2sbr!4v1674446733552!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php include('footer.html');?>
</body>
</html>