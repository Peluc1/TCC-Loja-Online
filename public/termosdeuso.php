<?php

require('../app/db/conexao.php');

$page_title = 'Termos de uso';

$links = ['<link rel="stylesheet" type="text/css" href="public/css/projeto.css">
            <link rel="stylesheet" type="text/css" href="public/css/lightslider.css">
            <script type="text/javascript" src="public/js/JQuery3.3.1.js"></script>
            <script type="text/javascript" src="public/js/lightslider.js"></script>
            <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
            <script type="text/javascript" src="public/js/productslide.js"></script>'];

require('includes/header.php');

?>

<div class="container-geral-termos-deuso">
        <div class="titulo-termos-deuso">
            <p class="titulo-principal-termos">Termos e Condições de Uso</p>
            <p class="subtitulo-principal-termos">Seja bem-vindo ao MyTeams!</p>
            <p>Estes termos e condições descrevem as regras de uso do site da empresa MyTeams, localizada no endereço https://MyTeams.com.br/.</p>
            <p>Ao acessar este site, consideramos que você está de acordo com os termos e condições abaixo. Não continue a usar o MyTeams caso você discorde dos termos e condições descritos neste contrato.</p>
        </div>
        <div class="subscontainers-termos">
            <p class="titulo-termos-de-uso-sub-org">Cookies:</p>
            <p>O site usa cookies para ajudar na pesonalização da sua experiência na internet. Ao acessar o site MyTeams, você concorda com o uso dos cookies requeridos.</p>
            <p>Cookies são arquivos de texto inseridos no seu disco rígido por um servidor de página web. Os cookies não têm permissão para executar programas ou transferir vírus para seu computador. Os cookies são associados exclusivamente a você e só podem ser lidos pelo servidor web do domínio que emitiu o cookie.</p>
            <p>Nós podemos usar cookies para coletar, armazenar ou rastrear informações para finalidades estatísticas e mercadológicas do nosso site. Você tem a opção de aceitar ou rejeitar os cookies opcionais. Existem alguns cookies obrigatórios, que são necessários para o funcionamento de nosso site. Esses cookies obrigatórios são requerem seu consentimento. Por favor tenha em mente que, ao aceitar os cookies obrigatórios, você também estará aceitando cookies de terceiros, que podem ser usados por terceiros caso você utilize serviços fornecidos por eles em nosso site – por exemplo, uma janela de reprodução de vídeo fornecida por empresas terceiras e integrada ao nosso site.</p>
        </div>
        <div class="subscontainers-termos">
            <p class="titulo-termos-de-uso-sub-org">Licença:
            <p>Exceto em casos em que for indicado o contrário, MyTeams e seus licenciados têm direito à propriedade intelectual de todo o material postado no MyTeams. Todos os direitos à propriedade intelectual são reservados.</p>
        </div>
        <div class="subscontainers-termos">
            <ul><p class="titulo-termos-de-uso-sub-org-ul">Você não tem permissão para:</p>
                <li>Copiar ou republicar materiais do MyTeams;</li>
                <li>Vender, alugar ou sublocar materiais do MyTeams;</li>
                <li>Reproduzir, duplicar ou copiar materiais do MyTeams;</li>
                <li>Redistribuir conteúdos do MyTeams;</li>
                <li>Este Acordo terá efeito a partir da data presente.</li>
            </ul>
            <p>Partes deste site oferecem ao usuário a oportunidade de postar e discutir opiniões e informações em determinadas áreas. MyTeams não filtra, edita, publica ou revisa Comentários antes que eles sejam apresentados no site. Comentários refletem as opiniões da pessoa que os posta. Na extensão em que as leis aplicáveis permitem, MyTeams não se responsabiliza legalmente pelos Comentários ou quaisquer danos, riscos ou despesas causadas ou sofridas como resultado do uso, e/ou postagem e/ou aparência dos Comentários deste site.</p>
            
            <p>MyTeams reserva para si o direito de recomer quaisquer Comentários que possa ser considerado inapropriado, ofensivo ou quebre os Termos e Condições deste contrato.</p>
        </div>
        <div class="subscontainers-termos">
            <ul><p class="titulo-termos-de-uso-sub-org-ul">Você declara e garante que:</p>
                <li>Você tem o direito de postar Comentários em nosso site e tem todas as licenças e consentimentos para tal;</li>
                <li>Os Comentários não invadem qualquer propriedade intelectual, incluindo direitos autorais, patentes ou marcas registradas de terceiros;</li>
                <li>Os Comentários não contém material difamatório, injurioso, ofensivo, indecente ou de alguma forma ilícito, que é invasão de privacidade.</li>
                <li>Os Comentários não serão usados para solicitar ou promover negócios ou apresentar atividades comerciais ou atividades ilícitas.</li>
                <li>Você por meio deste concede a MyTeams a licença não-exclusiva de usar, reproduzir, editar e autorizar outros a usar, reproduzir ou editar qualquer um de seus Comentários em qualquer e todas as formas, formatos e mídias.</li>
            </ul>
        </div>
        <div class="subscontainers-termos">
            <p class="titulo-termos-de-uso-sub-org">Criação de links para nosso conteúdo</p>
                <ul><p class="titulo-termos-de-uso-sub-org-ul">As seguintes organizações podem criar links para nosso Site sem a necessidade de aprovação prévia por escrito:</p>
                    <li>Agências governamentais;</li>
                    <li>Mecanismos de busca;</li>
                    <li>Organizações de mídia;</li>
                    <li>Distribuidores de diretórios online podem inserir links para nosso Site na mesma maneira que inserem hiperlinks para Sites de outras empresas listadas; e</li>
                    <li>Empresas credenciadas, exceto organizações angariantes sem fins lucrativos e grupos de arrecadação de fundos para instituições de caridade, que não podem inserir links para nosso Site sem aprovação prévia.</li>
                </ul>
            <p>Essas organizações podem postar links para nossa página inicial, nossas publicações ou outras informações do Site, contanto que o link: (a) não seja, de forma alguma, enganoso; (b) não insinue falsamente a existência de uma relação de patrocínio, endosso, ou aprovação nossa a produtos e/ou serviços; e (c) seja apropriado ao contexto em que está sendo inserido.</p>
                
                <ul><p class="titulo-termos-de-uso-sub-org-ul">Nós podemos considerar e aprovar solicitações de link feitas pelos seguintes tipos de organizações:</p>
                    <li>Fontes de informação bem conhecidas sobre produtos e negócios;</li>
                    <li>Sites comunitários ponto.com;</li>
                    <li>Associações e outros grupos que representem isntituições de caridade;</li>
                    <li>Distribuidores de diretórios online;</li>
                    <li>Portais de internet;</li>
                    <li>Firmas de contabilidade, advocacia e consultoria; e</li>
                    <li>Instituições educacionais e associações de classe.</li>
                </ul>

            <p>Nós vamos aprovar solicitações de link feitas pelos tipos de organização listados acima se julgarmos que: (a) o link não é desfavorável para nossa imagem e/ou para a imagem de empresas credenciadas; (b) a organização solicitante não possui histórico negativo conosco; (c) o benefício que ganhamos com a visibilidade do link compensa a ausência do MyTeams; e (d) o link será inserido em um contexto geral informativo.</p>
                
            <p>Essas organizações podem postar links para nossa página inicial contanto que o link: (a) não seja, de forma alguma, enganoso; (b) não insinue falsamente a existência de uma relação de patrocínio, endosso, ou aprovação de produtos e/ou serviços da nossa parte; e (c) seja apropriado ao contexto em que está sendo inserido.</p>
                
            <p>Se você representa uma das organizações listadas no parágrafo 2 acima e está interessado em postar um link para nosso site, você deve nos informar de seu interesse enviando um e-mail para MyTeams. Por favor, inclua seu some, o nome da sua organização e suas informações de contato, assim como a URL do seu site, uma lista das URLs do nosso site que você pretende usar como links, e uma lista dos sites nos quais você pretende publicar nossas URLs. Aguarde entre 2 e 3 semanas para receber uma resposta.</p>
                
                <ul><p class="titulo-termos-de-uso-sub-org-ul">Organizações aprovadas poderão publicar links para nosso Site das seguintes formas:</p>
                    <li>Usando nosso nome corporativo; ou</li>
                    <li>Usando a URL para onde o link redireciona; ou</li>
                    <li>Usando qualquer outra descrição do nosso Site que faça sentido dentro do contexto e do formato do conteúdo onde o link está sendo inserido.</li>
                </uL>

            <p>Não será permitido o uso ou a publicação de links para o logo e/ou outros elementos visuais da MyTeams sem um acordo de licença para o uso da marca registrada.</p>
        </div>
        <div class="subscontainers-termos">
            <p class="titulo-termos-de-uso-sub-org">Responsabilização pelo Conteúdo:</p>
            <p>Não seremos responsabilizados legalmente por qualquer conteúdo que apareça em nosso Site. Você concorda em nos proteger e nos defender contra todas as acusações que forem levantadas contra nosso Site. Nenhum link deve aparecer em qualquer Site que possa ser interpretado como difamatório, obsceno, criminoso, ou que infrinja, viole ou defenda a violação dos direitos de terceiros.</p>
        </div>
        <div class="subscontainers-termos">
            <p class="titulo-termos-de-uso-sub-org">Reserva de Direitos:
            <p>Reservamos nosso direito de solicitar que você remova todos os links ou quaisquer links que redirecionem para nosso site. Você concorda em remover imediatamente todos os links para nosso site assim que a remoção for solicitada. Também reservamos nosso direito de corrigir e alterar estes termos e condições a qualquer momento. Ao publicar continuadamente links para nosso site, você concorda a seguir estes termos e condições sobre links.</p>
        </div>
        <div class="subscontainers-termos">
            <p class="titulo-termos-de-uso-sub-org">Remoção de links postados em nosso site:</p>
            <p>Se você encontrar qualquer link em nosso Site que seja de qualquer forma ofensivo, você tem a liberdade de entrar em contato conosco e nos informar do problema a qualquer momento. Vamos considerar as solicitações de remoção de links, mas não somos obrigados a remover quaisquer links do nosso site nem a responder diretamente à sua solicitação.</p>
            
            <p>Nós não garantimos que as informações continas neste site são corretas. Nós não garantimos integralidade ou exatidão do conteúdo. Não garantimos que o site se manterá disponível ou que o material do site se manterá atualizado.</p>
        </div>
        <div class="subscontainers-termos">
            <p class="titulo-termos-de-uso-sub-org">Declaração de Isenção de Responsabilidade:</p>

            <uL><p class="titulo-termos-de-uso-sub-org-ul">No máximo possível permitido por lei, nós excluímos todas as representações, garantias e condições relativas ao nosso site e ao uso deste site. Nada nesta declaração de isenção de responsabilidade vai:</p>
                <li>Limitar ou excluir nossa responsabilidade ou sua responsabilidade por mortes ou danos pessoais;</li>
                <li>Limitar ou excluir nossa responsabilidade ou sua responsabilidade por fraudes ou deturpações fraudulentas;</li>
                <li>Limitar nossa responsabilidade ou sua responsabilidade de quaisquer maneiras que não forem permitidas sob a lei; excluir quaisquer responsabilidades suas ou nossas que não podem ser excluídas de acordo com a lei aplicável.</li>
            </ul>
            <p>As limitações e proibições de responsabilização listadas nesta Seção e em outras partes desta declaração: (a) estão sujeitas ao parágrafo anterior; e (b) regem todas as responsabilizações que surgirem sob a declaração, incluindo responsabilizações surgidas em contrato, em delitos e em quebra de obrigações legais.</p>
            
            <p>Enquanto o site e as informações e serviços do site forem oferecidos gratuitamente, nós não seremos responsáveis por perdas e danos de qualquer natureza.</p>
        </div>
    </div>
</div>
