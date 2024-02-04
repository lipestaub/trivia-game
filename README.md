VIEWS
---------------------------------------------------------------------------------------------------------------------------
tela de login -> nome de usuário (input text) e senha (input password)

tela de cadastro -> nome de usuário (input text), senha (input password) e confirmar senha (input password)

tela principal-> dificuldade (select), selecionar tema (select), tipo de pergunta (select), quantidade de jogadores? (select ou input number) e botão iniciar (button ou input submit)

tela de jogo -> pergunta (h3), alternativas (input radio) e botão salvar resposta (button ou input submit)

tela de resultado? -> quantidade de acertos e respostas corretas para as alternativas

BANCO DE DADOS
---------------------------------------------------------------------------------------------------------------------------
*user*
id
username
password

*question*
id
type_id
difficulty_id
category_id
text
correct_answer
incorrect_answers

*category*
id
description

*type*
id
description

*difficulty*
id
description

*game_questions*
id
game_id
question_id
user_answer
is_correct

*game*
id
user_id
type_id
difficulty_id
category_id
datetime
