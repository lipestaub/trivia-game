VIEWS
---------------------------------------------------------------------------------------------------------------------------
tela de login -> nome de usuário (input text) e senha (input password)

tela de cadastro -> nome de usuário (input text), senha (input password) e confirmar senha (input password)

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
type
difficulty
category
text
correct_answer
incorrect_answers

*game_questions*
id
game_id
question_id
user_answer
is_correct

*game*
id
user_id
start_date
