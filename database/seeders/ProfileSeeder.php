<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('profiles')->insert([
            'name' => 'Clarissa Fagonde de Souza ', 'email' => 'clarissouza@yahoo.com.br', 'description' => 'Sou advogada de formação, mas comecei a trabalhar com organização em 2012, após pedir exoneração de um concurso público, em Porto Alegre, fiz um curso pela Domus, em 2013 fiquei grávida e me deparei com a especialidade baby e comecei a atuar com roteiros e enxovais nos EUA, em 2017 já morando em Brasília me formei pela OZ e após fiz cursos de especialização baby dentre outros. Em 2019 sentindo a necessidade de termos um Guia, criei o Guia da Organização, que reúne o mundo da Organização em um só lugar. Hoje ainda atuo como PO, mas atuo em outras frentes como
            Mentora e estrategista digital. Além de eventos na área de Organização. ', 'description' => '', 'location' => 'Brasil todo', 'phone' => '61992903310', 'profile_image' => 'https://drive.google.com/open?id=1AGSc5EeYBYlM644S7T5-C4SYu7zneWSY', 'cpf' => '97846465015'
        ]);
        DB::table('profiles')->insert([
            'name' => 'Adriana Cynthia Oliveira Castro Chaves', 'email' => 'adrianacastroorganizer@gmail.com', 'description' => 'Sou certificada pelo Reorganize, desde maio de 2019. Fiz curso para ter conhecimentos mais específicos, em : Mudança, Arquivo, Baby, Marcenaria Inteligente, Consultoria On-line, Rotina Doméstica e Tecnicas de Limpeza e algumas oficinas em Organização de Malas e Organização Boat. Tenho mini cursos de aromatização, mesa e cama posta.', 'description' => '', 'location' => 'Presencial: Ceará; On-line: Brasil e brasileiros fora do Brasil', 'phone' => '85999788994', 'profile_image' => 'https://drive.google.com/open?id=1gqoIb8KVS6A4JT2wqW87FMwa0XgvdyyN', 'cpf' => '32551932300
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Marta Teresa Oliveira ', 'email' => 'organizacaopresente@gmail.com', 'description' => 'Dentista de formação, depois de quase 20 anos resolvi me dedicar ao meu talento: a organização. Atuo desde 2018 e já fiz cursos das mais diversas especialidades, mas as que mais gosto são mudança residencial, organização de consultórios e clínicas, consultoria online e organização de documentos. Criei a ORGANIZAÇÃO PRESENTE e há quase 5 anos ajudo pessoas a entender e aplicar os benefícios da organização em suas vidas. 😊', 'description' => '', 'location' => 'Presencial Rio de Janeiro, online sem limites', 'phone' => '21983542348', 'profile_image' => 'https://drive.google.com/open?id=1WkHQo_3GkFaIg4RizLUryYNO2HqtwUOM', 'cpf' => '1650666799
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Flavia Cipriano Pigatti', 'email' => 'lojasemprefeliz@hotmail.com', 'description' => 'Iniciei minha trajetória em 2020 no meio da pandemia e ali conheci meu propósito de vida, que sempre busquei e não me identificava em nada. Tudo foi acontecendo muito rápido, quando sabemos o que realmente queremos acontece. 
            Em 2022 fui embaixadora Norte no Pob.
            Desde então já foram mais de 60 projetos, com muita entrega, estudo e amor por essa profissão. ', 'description' => '', 'location' => 'Região Norte - Pará', 'phone' => '+5594992062797', 'profile_image' => 'https://drive.google.com/open?id=1i5w5kNb8yBBy5rdOyrkLqxAMQCfalDcG', 'cpf' => '8.244.795.727
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'TERESA CRISTINA NOGUEIRA DA SILVA', 'email' => 'Tnogueiraorganizer@gmail.com', 'description' => 'Após 10a de aposentada pós Correios vi a necessidade de fazer algo qdo me deparei no Curso de PO da Priscila Saboia em 2020. E desde então venho aprendendo com as colegas que já estão no ramo. Eu já era organizada mas não tinha a técnica é o conhecimento do amplo sistema que é trabalhar como PO. Pretendo ainda crescer mais e multiplicar o conhecimento adquirido.', 'description' => '', 'location' => 'Todo o Rio ', 'phone' => '994519518', 'profile_image' => 'https://drive.google.com/open?id=1cKhUCAYJSHI7ZjglNRcFx6n9Ia2hqsSu', 'cpf' => '49655210778
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'HELOISA BERTOLI', 'email' => 'heloisabertoli@yahoo.com.br', 'description' => '“CURSO DE FORMAÇÃO” pela Domus Organizzare / Porto Alegre / RS, com Rosângela Campos em 2015.
            Cursos de especialização em “ORGANIZAÇÃO DE RESIDÊNCIAS”, “ARMÁRIOS E CLOSETS” e “ARQUIVOS, ACERVOS E COLETÂNEAS” pela Domus Organizzare.
            Curso de especialização em “ORGANIZAÇÃO VIRTUAL”, com Helena Alkhas.
            Cursos de especialização em “ORGANIZAÇÃO DE QUARTO BABY E INFANTOJUVENIL”, “BRINQUEDOTECA”, “CLOSET FEMININO E MASCULINO”, “ROUPARIA”, “CRISTALEIRA, LOUCEIRO E MESA POSTA”, “COZINHA, DESPENSA E ÁREA GOURMET”, “ATELIÊ E HOME OFFICE”, ""PRÉ E PÓS-MUDANÇA"" e “ÁREA DE SERVIÇO, LAVANDERIA, GARAGEM E HOBBY BOX” pela Tendo Tempo.
            ', 'description' => '', 'location' => 'PORTO ALEGRE E REGIÃO METROPOLITANA', 'phone' => '51999115014', 'profile_image' => 'https://drive.google.com/open?id=1d10GllOu1Nb0aVkwFak9zY0JeSNNAE6k', 'cpf' => '31532861087
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Roselia Silva de Jesus Barbosa ', 'email' => 'roseliasjbarbosa@gmail.com', 'description' => 'Trabalhei em vários projetos de mudanças, meu e como assistente. Organizei um estúdio de fotos para bebês e mães. Organização de um quarto Baby e Closet .', 'description' => '', 'location' => 'Estado de São Paulo e São Vicente e Santos .', 'phone' => '964060520', 'profile_image' => 'https://drive.google.com/open?id=1HBfxJ42gcucKkgmRgfHAVT2KR0k4Tdxd', 'cpf' => '09437756805
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Afrodite Panagiotis', 'email' => 'Afrodite.personalorganizer@gmail.com', 'description' => 'Oiê! Sou Afrodite Panagiotis, sua Personal Organizer REORGANIZE em Vitória, Guarapari, Domingos Martins, Vila Velha e Serra,
            Se você está sofrendo com a desordem  da sua casa, está estressada, cansada, sobrecarregada, as tarefas domésticas estão sugando toda sua energia, com dificuldade em implantar ROTINAS EFICIENTES e  quer ter Paz , Leveza e trazer  Equilibrio e Boas Energias para seu dia a dia, Eu Posso te Ajudar! 
            Sou Personal Organizer, especialista em Organização Residencial, Treinamento de Limpeza e Elaboração de Rotinas, para você ter uma Casa  Harmonizada, Revitalizada e que Funciona de Verdade.
            Entre em contato comigo pelo WhatsApp ou e-mail e agende uma Consultoria Gratuita, online ou presencial, como você preferir, para que a gente possa se conhecer, conversar e eu possa te ajudar a dar seus primeiros passos para você ter sua Casa em Ordem e uma Vida mais Leve e Feliz.
            
            https://www.canva.com/design/DAEsvsteeVo/hkG-DMyTknTRk0FzDjJFoA/view?utm_content=DAEsvsteeVo&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink', 'description' => '', 'location' => 'Domingos Martins, Guarapari, Serra, Vila Velha, Vitória', 'phone' => '27992553749', 'profile_image' => 'https://drive.google.com/open?id=10MT4SSFf4QiuTucK9gF6IePZBGfPOSZu', 'cpf' => '03922915760
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Cláudia Fonte', 'email' => 'lumieresolucoes@gmail.co', 'description' => 'Formada em Administração de Empresas - Univ. Gama Filho/RJ
            Gestão de Equipes e Pessoas - IBMEC/RJ 
            Personal Organizer - OZ! Organize sua Vida/SP
            
            Atuação de 27 anos como Secretária Executiva no Mercado Financeiro
            
            Personal Organizer na Lumière Soluções desde 2014
            Consultora em Organização Residencial,  Corporativa e Home Care. 
            ', 'description' => '', 'location' => 'Rio de Janeiro/ São Paulo ', 'phone' => '21973734993', 'profile_image' => 'https://drive.google.com/open?id=1wsZ7C0kjOa-KxueRxwRvftcrG4GEZMHy', 'cpf' => '85223484720
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Cinthia Carmina Rodriguez Rodriguez ', 'email' => 'carmi_80@hotmail.com', 'description' => 'Sou da Bolívia e me formei como PO no México (2020) levo morando fora do meu país há 17 anos e o mundo da Organização mudou minha vida pessoal e familiar. 
            
            No ano do 2007 fiz meu primeiro curso de organização e daí nunca mais parei.
            Por causa do trabalho do meu marido a gente se movimenta muito de país então meu público na sua maioria são expatriados dando consultorias on line como projetos presenciales. 
            
            Atualmente formou parte do Comitê Internacional dá Anpop e sou muito grata de todas oportunidades e projetos que se estão presentando no meu camino aqui no Brasil.', 'description' => '', 'location' => 'Rio de Janeiro ', 'phone' => '21966329649', 'profile_image' => 'https://drive.google.com/open?id=1osWzzRgCr6BiKgjqcFi0wU-nZj6xsf6O', 'cpf' => '06031977796
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Rosângela Orsi', 'email' => 'rtorsi@uol.com.br', 'description' => 'Sou Rosângela Orsi profissional em Organização Residencial e Consultora HomeCare,  atualmente resido em Petrópolis-RJ mas tenho disponibilidade para atender onde você precisar. 
            Me dedico a  transformar vidas através da organização começando pelo Desapego e após organizado ajudo sua funcionária e você com meu Treinamento de Rotinas e Técnicas de Limpeza Doméstica Moderna onde sua casa se mantém limpa, organizada e perfumada.
            Quer se libertar da Bagunça e stress com o acúmulo de sujeira?
            Eu posso te ajudar, vamos conversar
            24998458844
            ', 'description' => '', 'location' => 'Petrópolis RJ e outros', 'phone' => '24998458844', 'profile_image' => 'https://drive.google.com/open?id=11CWKEhphpfLD3gKy107qXqSYU0NA6WoN', 'cpf' => '01981487808
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Raquel Siqueira de Morais', 'email' => 'raquelsiqueirademorais@gmail.com', 'description' => 'Meu proposito de vida é impactar vidas, transformar pessoas e suas rotinas, proporcionando qualidade de vida e redução de custos através da organização. Sou formada em Gestão de Pessoas e Personal Organizer desde 2019 pelo método Reorganize.', 'description' => '', 'location' => 'FORTALEZA E REGIÃO METROPOLITANA', 'phone' => '85988169859', 'profile_image' => 'https://drive.google.com/open?id=1iDTfSoZ7GYQ256rnJhEZM--qJPtAO-6c', 'cpf' => '00510131344
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Marcela dos Santos Sanchez ', 'email' => 'marcelasanchezporganizer@gmail.com', 'description' => 'Formada em Pedagogia e Tecnica e Contabilidade, fazia algumas organizações sem saber sobre ser Personal Organizer.
            Quando minha mãe falecer de COVID em 2020, ganhei o ingresso para o POB2020 onde descobri que já havia feito várias coisas como profissional de organização e não cobrava o trabalho. Assim resolvi me certificar e estou trabalhando só com isso desde então.', 'description' => '', 'location' => 'São Paulo e cidades de interior como Campinas, Jundiai, São José dos Campos.', 'phone' => '11947904861', 'profile_image' => '', 'cpf' => '27956268885
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Helena Carvalho de Santana ', 'email' => 'donahelenaorganizer@gmail.com', 'description' => 'Trabalhei como secretária por 30 anos, me aposentei, e exerci a profissão de babá, por 18 anos. Em abril/2022 resolvi seguir a profissão de Personal Organizer, e estou apaixonada, embora tenha feito poucos trabalhos, não tenho dúvidas que é isso que quero fazer, trazer paz e leveza para os lares que se encontram desorganizados e sem harmonia. Sou divorciado há mais de 30 anos, tenho 2 filhos, um no céu, e o outro em NY. Tenho uma linda neta de quase 12 anos, que é o pedacinho de amor que meu filho deixou, sua continuação. Tenho o objetivo de incentivar mães que perderam seus filhos, a  continuarem seguindo em frente, mesmo com o coração dilacerado, e gostaria de inspirar mulheres com a idade avançadas, a estarem sempre abertas para o novo, recomeçar sempre, isso é motivação, vontade de produzir e aprender todos os dias.', 'description' => '', 'location' => 'São Gonçalo, Niterói, Rio de Janeiro', 'phone' => '21993564854', 'profile_image' => '', 'cpf' => '45519218749
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Mônica Camargo ', 'email' => 'camargo.moni@gmail.com', 'description' => 'Personal Organizer, formada pela OZ em 2014. 
            Após 8 anos de trabalho como profissional de Educação Física e 30 anos como Assistente Executiva de Presidência e Diretoria, o chamado da organização pulsou mais forte.
            Cursos de especialização e experiência prática em gestão de mudança, brinquedoteca, organização de acervos, organização residencial, corporativa e digital.', 'description' => '', 'location' => 'Rio de Janeiro, para projetos presenciais. O mundo inteiro para projetos de consultoria virtual.', 'phone' => '21999993677', 'profile_image' => '', 'cpf' => '99264714715
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Mônica Copello Luiz ', 'email' => 'monicacopello2013@gmail.com', 'description' => 'Fiz dois cursos de Organização presenciais (Senac e Samantha Stofel), diversos cursos online (Débora Fernandes; Tati Tendo Tempo; Priscila Saboia, Ana Flavia, Paula Furlan, Minimalismo, essesncialimo, hygge entre outros)', 'description' => '', 'location' => 'Rio de Janeiro ', 'phone' => '21999670564', 'profile_image' => '', 'cpf' => '87592649772
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'CLAUDIA APARECIDA BICALHO', 'email' => 'claudiabicalho@bol.com.br', 'description' => 'Início o curso na pandemia, ainda trabalhava em CLT, mas me apaixonei pela organização e resolvi me dedicar 100% a profissão. São quase 2 anos vivendo esse mercado e tentando crescer mais e mais...', 'description' => '', 'location' => 'São Paulo ', 'phone' => '11981533370', 'profile_image' => '', 'cpf' => '13014885851
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Denise Maria Pinto de Figueiredo', 'email' => 'Denisefig@yahoo.com.br', 'description' => 'Formada em 2017 pelo Reorganize. Até 2021 era CLT mas a partir de 2022 atuando somente como PO. Comecei sozinha com projetos próprios, hj trabalho com equipe e também como assistente.', 'description' => '', 'location' => 'Rio de janeiro ', 'phone' => '21995353941', 'profile_image' => 'https://drive.google.com/open?id=1OX4WXn1pUn0hAJDM5m-8116a3O6MM5vB', 'cpf' => '85611042791
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Mônica Lourenço Jorge ', 'email' => 'monicaloj@gmail.com', 'description' => 'Sou do Rio de Janeiro, jornalista de formação, mãe e empreendedora. A organização sempre esteve presente na minha vida, profissional e pessoal. Fiz a certificação em Personal Organizer em 2015 e venho atuando e me dedicando desde então. Fiz inúmeros cursos de especialização e a organização é uma paixão e um propósito de vida! Desde que eu descobri que, com o meu trabalho como profissional de organização, eu gero bem- estar, qualidade de vida e muitos outros benefícios, o meu propósito só cresce a cada dia!', 'description' => '', 'location' => 'Rio de Janeiro ', 'phone' => '21991171064', 'profile_image' => 'https://drive.google.com/open?id=1vHnQLaCl5yMba9x9Gbvkfw7H0DRTZOQ1', 'cpf' => '82012610706
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Camila Moraes Silva Massimo ', 'email' => 'camilamassimo.organizer@gmail.com', 'description' => 'Sou personal organizer, formada no ano de 2022. Já fiz algumas organizações, como organização cozinha e quartos.', 'description' => '', 'location' => 'Juara MT ', 'phone' => '66981361112', 'profile_image' => '', 'cpf' => '00326949162
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Walescka Arruda Miranda', 'email' => 'walesmiranda@gmail.com', 'description' => 'Sou formada pelo Método Reorganize da Priscila Sabóia em 2021.
            Certificada pelo curso Personal Organizer Online da Ana Flávia Furlan em 2021.
            Certificada pelo Método Casa que Funciona como Consultora House Care em 2022.', 'description' => '', 'location' => 'Brasília - DF', 'phone' => '61984921325', 'profile_image' => 'https://drive.google.com/open?id=1zDLe90TRfz10OOOYVyP-bQKZ_1ZR2Qzu', 'cpf' => '53925653104
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'JOSE C VALINA FH', 'email' => 'contatopportes@gmail.com', 'description' => 'Comecei minha carreira em julho de 2021, ainda com emprego no regime CLT. Sou Administradora no ramo de Hotelaria. No fim de 2021, encerrei minha carreira na empresa privada e fiz a transição para Personal Organizer Minimalista. Tenho diploma na área de Personal Organizer e atuo desde então no nicho de ambientes de  residências. 
            Pré e pós mudança, closet, organização baby, roupeiro , lavanderia e cozinha.
            Me atualizo em tempo real de tudo que faça parte da ORGANIZAÇÃO.', 'description' => '', 'location' => 'Brasil todo', 'phone' => '31983163121', 'profile_image' => '', 'cpf' => '88213404653
            
            '
        ]);
        DB::table('profiles')->insert([
            'name' => 'Maria Cristina Lima Brasil Carmo', 'email' => 'mcrisbrasil@gmail.com', 'description' => 'Pedagoga de formação, tendo exercido a profissão de professora por 10 anos e se aposentada acomo funcionária do Tribunal de Justiça do Rio de Janeiro. 
            Na atividade de Personal Organizer, concluiu o curso de Personal Organizer pela Escola OZ, em 2021. Fez o Curso de Especialização Avançada no Mercado de Luxo e Premium, com a Paula Furlan,  Especialização em Organização Baby com Elaine Gouvea, Curso de organização para Idosos e organização para recém casados outras especializações com a Tati da Tendo Tempo. Atuando na área de Organização Residencial, Organização Baby e Organização para Idosos e Organização de Documentos. ', 'description' => '', 'location' => 'Rio de Janeiro', 'phone' => '21999231904', 'profile_image' => '', 'cpf' => '59899603791
        '
        ]);
    }
}
