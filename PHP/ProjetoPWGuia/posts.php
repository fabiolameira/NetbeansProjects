
<div ng-init="inicializa()" id="postApp" class="container" ng-app="postApp" ng-controller="postController">
        
        <!--NOVO SOLUCAO todo o script é novo-->
        <script>
           
            app.controller('postController', function ($scope) {
                $scope.posts = [];
                $scope.frases = "";
                $scope.maxIdPost = 0;
               
                $scope.inicializa = function()
                {
                    setInterval("angular.element($('#postApp')).scope().chamaServicoLeituraPosts()",1000);          
                };
                
                
                $scope.enviar = function (p)
                    {
                        //alert("Post on");
                        $.post(
                                "addPostsRest.php",
                                {
                                    "frases": $scope.frases

                                },
                                function (dados)
                                {
                                    
                                }
                        );
                        $scope.frases = '';
                    };
                
                $scope.chamaServicoLeituraPosts  = function()
                {
                        
                        $.getJSON(
                                "servicoLeituraPosts.php",
                                {
                                    "maxIdPost" : $scope.maxIdPost
                                },
                                function(jsonData)
                                {
                                    //angular.element($("#chatApp")).scope().mensagens = jsonData;
                                    //angular.element($("#chatApp")).scope().$apply();
                                    
                                    
                                    if($scope.maxIdPost == 0)
                                    {
                                        $scope.posts = jsonData;
                                        
                                        $scope.maxIdPost = $scope.posts[0]['idPost'];
                                    }
                                    else
                                    {
                                        $_postsAux = jsonData;
                                        
                                        if($_postsAux.length > 0)
                                        {
                                            for($i = $_postsAux.length - 1; $i >= 0; $i--)
                                            {
                                                $scope.posts.unshift($_postsAux[$i]);
                                            }
                                            
                                            $scope.maxIdPost = $scope.posts[0]['idPost'];
                                        }
                                    }
                                    
                                    $scope.$apply();
                                    
                                });
                };
                
                $scope.removeLike = function($_idPost, $_meuLike)
                {
                        //var amigoDeConversa = $("select option:selected" ).attr("value");
                        //var mensagem = $("#mensagem").val();
                        //$("#mensagem").val("");
                        $scope.mensagemErro = "";
                         //alert("$_idPost");
                         //alert($scope.meuLike);
                        $scope.maxIdPost = 0;
                        
                         if($_meuLike == '1')
                                {
                                     $.getJSON(
                                
                                            "removeMeuLike.php",
                                            {
                                               "idPost" :  $_idPost
                                            },
                                            function(dados)
                                            {
                                                $scope.posts = "";
                                                //alert(dados);
                                                if(dados.resposta == false)
                                                {
                                                    $scope.mensagemErro = "ERRO DE COMUNICACAO";
                                                }
                                                //alert("dados: " + dados.resposta);
                                                $scope.chamaServicoLeituraPosts();
                                                $scope.$apply();

                                            },
                                            function(){
                                                $scope.mensagemErro = "ERRO DE COMUNICACAO";
                                                 $scope.$apply();
                                            }
                                     );
                                }
                                if($_meuLike == '0')
                                {

                                    $.getJSON(

                                        "doMeuLike.php",
                                        {
                                           "idPost" :  $_idPost
                                        },
                                        function(dados)
                                        {
                                            $scope.posts = "";
                                            //alert(dados);
                                            if(dados.resposta == false)
                                            {
                                                $scope.mensagemErro = "ERRO DE COMUNICACAO";
                                            }
                                            //alert("dados: " + dados.resposta);
                                            $scope.chamaServicoLeituraPosts();
                                            $scope.$apply();

                                        },
                                        function(){
                                            $scope.mensagemErro = "ERRO DE COMUNICACAO";
                                             $scope.$apply();
                                        }
                                    );
                                }
                                
                };
            });
            
            
                                
                                
                   
            
        </script>
            
    <input ng-model="frases"  placeholder="Escreva aqui o seu post" class="form-control" id="txtpost" style="width: 98%;display: inline;"/>
                <a  ng-click="enviar()" ><span class="glyphicon glyphicon-send" type="button" /></a>
                <style>
                    .post{
                        border: 1px solid lightgray;
                        padding:10px;
                    }
                </style>
        
            <div class="panel panel-default">
               
           <a href="#"><span class="label label-info">POST</span></a>
    
              
                    <div class='row' ng-repeat="p in posts" >
                        
                        
                        <div class="container">
	<div class="row">
        <div class="col-md-12">
		    
              
                                      
                <div class="panel-footer">
                    <span class="glyphicon glyphicon-user" id="start"></span> <label id="started">By</label> {{p.nome}} |
                    <label id="started">{{p.data}}</label> |
                    
                    <a href="" ng-click="removeLike(p.idPost, p.meulike);" id="startedby"><img src="img/{{p.meulike}}.png" style="height: 10px;"/></a> {{p.likes}} | 
                    
                    
                </div>
            <div class="panel-body">
                
                          
                            <p>{{p.texto}}</p>
                            
                    </div>
            </div>
        </div>
	</div>
</div>
             </div>            
                        
                    
                
                
                
                
        
                    
          
                  
   </div>   

    
 