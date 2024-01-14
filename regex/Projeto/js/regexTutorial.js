/*
 *   Copyright (c) 2020 
 *   All rights reserved.
 */

/*
 * meta-char => \. \/
 * quantifier => {2}
 * a virgula como definidor de limite e quantidade.
 * ? => não é obrigatório.
 * \d => digito numerico.
 * \s => digito whitespaces.
 * [] => classes de digitos.
 * + => 1 ou mais vezes.
 * * =. 0 ou mais vezes.
 * ? - zero ou uma vez.
 * * - zero ou mais vezes.
 * + - uma ou mais vezes.
 * {n} - exatamente n vezes.
 * {n,} - no mínimo n vezes.
 * {n,m} - no mínimo n vezes, no máximo m vezes.
 * \w => qualquer numero ou letra.
 * \b => word boundary. (âncora)
 * ^ => inicio de uma expressão.
 * $ => fim de uma expressão.
 * \B => non-word boundary.
 * () => grupos Regex.
 * ?: => non-capturing-group (não retorna o valor).
 * | => ou um ou outra opção.
 * \num => backreferences.
 * . => todos.
 */

//123.456.789-00

var CPF = "(?:\d{3})\.?(?:\d{3})\.?(?:\d{3})[-.]?(?:\d{2})";

//15.123.321/8883-22

var CNPJ = "\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}";

/* 
 * 126.1.112.34
 * 128.126.12.244
 * 192.168.0.34
 */

var IP = "\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}";

//20040-030

var CEP = "\d{5}\-\d{3}";

// (21) 3216-2345

var telefone = "\(\d{2}\)\s\d{4}\-\d{4}";

// <code> e </code>

var code = "\<\/?code\>";

// 19h32min16s

var horario = "[0-2]?\d\s?h\s?[0-6]\d\s?min\s?[0-6]\d\s?s\s?";

// KMG-8089

var placaVeiculo = "[A-Z]{3}\-\d{4}";

/*
9.8 - Robson, 
7.1 - Teresa, 
4.5 - Armênio, 
6.5 - Zulu, 
7.7 - Stefania, 
7.8 - João, 
5.0 - Romeu, 
7.2 - Pompilho, 
3.1 - Reinaldo, 
7.3 - Bernadete, 
4.7 - Cinério
*/

var notaAprovada = "[7-9]\.[2-9]\s+\-\s+[A-Z][a-zã]{1,9}" || "[7-9]\.[2-9]\s+\-\s+\w";

/*
  10 - Bruce, 
  9.5 - Miranda, 
  7.9    - Bob, 
  10 - Zimbabue, 
  7.5 - Bety
*/

var notaAprovada1 = "[7]\.[5-9]\s{1,}\-\s{1,}\w+";

/* BALEIRO GARROTE SERROTE GOLEIRO ROTEIRO */

var joioTrigo = "[A-Z]*ROT[A-Z]+";

// username

var username = "[A-Z]\w{1,9}";

// data

var data = "[0123]?\d\s+de\s+[A-Z][a-zç]{1,8}\s+de\s+[12]\d{3}";

// expressão

var exp = "^Caused by:.*";

// Z171PZ7AZ23PZ7819AZ78GZ1AZ99IZ34O

var cod = "(?:[Z]\d+)(\w)";

// Caused by: com.mysql.jdbc.exceptions.jdbc4.CommunicationsException: Communications link failure

var exception = "^(\w{6}\s\w{2}\:\w{3}\.\w{5}\.\w{4}\.\w{10}\.\w{5}\.\w{24}\:)\s(\w{14}\s\w{4}\s\w{7})";

// super.mario@caelum.com.br

var helpAlura = "^([\w-]\.?)+@([\w-]+\.)+([A-Za-z]{2,4})+$";

// Nico Steppat|14/05/1977|Rua Buarque de Macedo|50|22222-222|Rio de Janeiro

var correios = 
"^([A-Z][a-z]+\s[A-Z][a-z]+)|([0-3]\d\/[0-1]\d\/[1-2]\d{3})|([A-Z][a-z]+\s+ |[a-z][a-z]+\s+)+|(\d{2})|(\d{5}\-\d{3})|([A-Z][a-z]+\s+ |[a-z][a-z]+\s+)+$" || 
"^ ([\w\s] +) \| (?: \d\d\/\d\d\/\d\d\d\d)\|([\w\s]+)\|(\d{1,4})\|(\d{5}-\d{3})\|(?:[\w\s]{10,})$";