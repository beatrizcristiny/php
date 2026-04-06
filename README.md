TEORICOS!!!!!!!!!!!!!
AULA-3 
ex1- Organizar é essencial pra não ficar tudo bagunçado, e facilita procurar arquivos, deletar e corrigi-los.

ex2-criado

ex3- Na pasta data guarda os dados que vai simular um bd, includes guarda os arquivos repetidos ou reutilizaveis e em pages ficam as telas que o cliente ou usuario acessa.

AULA-4
ex1- A sessão é a forma do sistema de lembrar quem é o usuario tipo no inicio o usuario recebe um codigo e com esse coddigo o sistema vai lembrando e sabe quem está logado. Sem a sessão o sitema esquece quem é o usuario.

ex2-O auth vai verificar se o usuario está logado ou nao e se ele não estiver ele vai ser redirecionado pra pagina de login assim impendido o acesso.

ex3- $usuarios = [["usuario" => "joao", "senha" => "123", "perfil" => "cliente"], ["usuario" => "arnaldo", "senha" => "2121212", "perfil" => "professor"]];

desafio2- if ($_SESSION["perfil"] == "cliente"){
    echo "Está é a area do cliente";
}else if ($_SESSION["perfil"] == "professor"){
    echo "Está é a area da empresa";
}

AULA-5
ex1- O perfil de usuario é o tanto de acesso que cada usuaio tem no sistema por exemplo só ver aquilo que esta designado ao usuario

ex2- O logico impede o usuario de acessar paginas diretamente e o visual mostra ou esconde os menus dependendo do perfil 

AULA-6
ex1- O bootstrap é uma ferramenta que mexe com a parte visual do sistema.

