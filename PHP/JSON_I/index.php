<html>
    <head>
    </head>
    <body>
        <script>
            var joao = {
                "nome": "Joao",
                "idade": 19,
                "morada": "Portalegre"
            }
            document.write("Inicio" + "<br/>"); // exemplo do uso
            document.write(joao.nome);
            document.write("<br/>" + "Fim");
            document.write("<pre>");
            document.write(JSON.stringify(joao, null, "\t"));
            document.write("</pre>")
        </script>
    </body>
</html>

