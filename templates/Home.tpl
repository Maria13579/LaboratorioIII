{include file="templates/Cabeceras/Header.tpl"}
 
  <div class="card-panel teal lighten-2 "><h1 class="center-align">Inicie Sesion</h1> </div>
                <br/><br/>
                   
                 <form method="post" action="?class=user&method=iniciosesion" >
                 
                            <div  class="row">
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input  type="text" name="user" placeholder="Ingrese su Usuario">   
                                                               
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">lock</i>
                                        <input type="password" name="pass" placeholder="Ingrese su Contraseña">
                                   
                               </div>
                                </div>
                            </div>
                            <div class = "center">
                                <input class="waves-effect waves-light btn " type= "submit" value="Ingresar">
                            </div>
                   
                 </form>
                      <div class = "center">
                           <img class="responsive-img" src="Recursos/f1.jpg">                     
                       </div>
    </div>
{include file="templates/Cabeceras/Footer.tpl"}