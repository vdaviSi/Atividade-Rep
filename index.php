<html>
    <head>
        <title>Guia de Requerimento</title>
    </head>
    <body>
        <form action="requerimento.php" method="POST">
            <table border="1">
                <tr>
                    <td>Protocolo n.° <input type="text" name="protocolo"></td>
                </tr>
                <tr>
                    <td>REQUERENTE <input type="text" name="requerente">  </td>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <td>PREENCHER:</td>
                    <td> DATA DE NASCIMENTO <input type="date" name="data"> 
                        NATURALIDADE <input type="text" name="naturalidade"> 
                        FILIAÇÃO <input type="text" name="filiacao">
                    </td>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <td>CURSO <input type="text" name="curso"> 
                        PERIODO <input type="text" name="periodo">
                        TURNO <input type="text" name="turno"> 
                    </td>
                </tr>
                <tr>
                    <td>TELEFONE <input type="tel" name="telefone"> | <input type="tel" name="telefone2">
                        EMAIL <input type="email" name="email">
                    </td>
                </tr>
            </table>

            ASSINALE:
            <table border ="1">
                <tr> 
                    <td>01</td><td>2° Via (especificar)</td><td>CAA</td> 
                    <td>12</td><td>Trancamento de Disciplina (especificar)</td><td>Coordenação dos Cursos</td>
                </tr>
                <tr> 
                    <td>02</td><td>Aproveitamento da disciplina (anexar Historico escolar e Programa da Disciplina)</td><td>Coordenação de Cursos</td> 
                    <td>13</td><td>Trancamento de Matrícula (anexar documentação comprobatória)</td><td>Coordenação Pedagógica</td>
                </tr>
                <tr> 
                    <td>03</td><td>Matricula fora do prazo (justificar)</td><td>CAA</td> 
                    <td>14</td><td>Transferência para outra instituição</td><td>CAA</td>
                </tr>
                <tr> 
                    <td>04</td><td>Cancelamento da Matricula</td><td>CAA</td> 
                    <td>15</td><td>Validação de Conhecimento (especificar)</td><td>Coordenação do Cursos</td>
                </tr>
                <tr> 
                    <td>05</td><td>Colação de Grau / Colação Especial(justificar)</td><td>CAA</td> 
                    <td>16</td><td>Reajuste</td><td>CAA</td>
                </tr>
                <tr> 
                    <td>06</td><td>Declaração (especificar)</td><td>CAA</td> 
                    <td>17</td><td>Recorreção de Prova</td><td>Coordenação do Curso</td>
                </tr>
                <tr> 
                    <td>07</td><td>Diploma (especificar)</td><td>CAA</td> 
                    <td>18</td><td>AUXÍLIO - Transporte</td><td>Serviço Social</td>
                </tr>
                <tr> 
                    <td>08</td><td>Histórico Escolar</td><td>CAA</td> 
                    <td>19</td><td>AUXÍLIO - Moradia</td><td>Serviço Social</td>
                </tr>
                <tr> 
                    <td>09</td><td>Reabertura de Matrícula</td><td>CAA</td>
                    <td>20</td><td>AUXÍLIO - Óculos</td><td>Serviço Social</td> 
                </tr>
                <tr> 
                    <td>10</td><td>Segunda Chamada (anexar justificativa e especificar)</td><td>Coordenação do Curso</td>
                    <td>21</td><td>AUXÍLIO - Pais e Mães</td><td>Serviço Social</td> 
                </tr>
                <tr> 
                    <td>11</td><td>Reingresso</td><td>CAA</td>
                    <td>22</td><td>Outros (especificar)</td><td></td> 
                </tr> 
                
            </table>
            <br>
            ESPECIFICAR: <br> <input type="text" name="especificar"> <br>
            JUSTIFICAR: <br> <input type="text" name="justificar"> <br>
            
            <h3>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</h3> <br>
            <table border="1">
                <tr> 
                    <td> <input type="text" name="ass"> </td> 
                    <td> <input type="text" name="ass2"> </td> 
                </tr>
                <tr> 
                    <td>REQUERENTE (ASS. LEGÍVEL) </td> 
                    <td> FUNCIONÁRIO (ASS. LEGÍVEL) </td> 
                </tr>
            </table>
            <br>
            CEDRO - CE, <input type="number" name="dia"> DE <input type="text" name="mes"> DE 20<input type="number" name="ano"> <br>
            <br>
            <table border="1">
                <tr> 
                    <th> VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS) </th> 
                    <th> VISTO (BIBLIOTECA) </th> 
                </tr>
                <tr> 
                    <td> <input type="radio" name="nchave"> O requerente NÃO deve chave de armário</td> 
                    <td> <input type="radio" name="nlivro"> O requerente NÃO deve livros na biblioteca</td> 
                </tr>
                <tr> 
                    <td> <input type="radio" name="chave"> O requerente deve chave do armário:<input type="text" name="chavenum"> </td> 
                    <td> <input type="radio" name="livro"> O requerente deve livros na biblioteca:<input type="text" name="livronome"> </td> 
                </tr>
                <tr> 
                    <td> <input type="text" name="ass3"> </td> 
                    <td> <input type="text" name="ass4"> </td> 
                </tr>
                <tr> 
                    <td> Responsável (ass. Legível) </td> 
                    <td> Responsável (ass. Legível) </td> 
                </tr>
            </table>
        </form>
    </body>
<html>
