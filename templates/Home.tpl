{include file="templates/Cabeceras/Header.tpl"}

    <div class="container pink accent-3" >
     
            
                <div class="card-panel teal lighten-2 ">
                        <h1 class=" center-align  blue-text">REGISTRO</h1>
                </div>   
           
      
                
        <form method="post" action="?class=User&method=login">
            <div class="row">
                <div class="input-field col s8">
                    <input  name="user" id="first_name2" type="text" class="validate"/>
                    <label class="active" for="first_name2">Usuario</label>
                </div>
            
                <div class="input-field col s8">
                    <input  name="pass" id="first_name3" type="password" class="validate"/>
                    <label class="active" for="first_name3">Password</label>
                </div>
          </div>
          
          <div class="row">
              <div class="input-field col s4">
               
            
                <button class="btn waves-effect waves-light" type="submit" value="Ingresar">Ingresar<i class="material-icons right">send</i>
              </button>
              </div> 
          </div>   
        </form>
    </div>
{include file="templates/Cabeceras/Footer.tpl"}