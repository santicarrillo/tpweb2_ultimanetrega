# Formula 1 API

Endpoint de la API : **http://localhost/TPe-webII-parte3/api/escuderias**

# Endpoints:




## Servicios GET

- `GET /escuderias`: Se accede al listado completo de escuderias que existen en la base de datos 'formula ' dentro de la tabla escuderias

    - #### Ordenamiento por campos
        
        -  




    - #### Paginacion

        - `GET /escuderias?limit=value&pag=value`  

        

        

    - #### Filtrado
        - `GET /escuderias?field=value&value=value`

        


- `GET /escuderias/:ID`: Este endpoint permite acceder a una escuderia en especifico de la tabla dado un id en particular. En caso de que el id sea incorrecto, se producira un error ## 404 Not Found 

- ***Ejemplo*** `GET /escuderias/4`  


        {
            "id": 4,
            "equipos": "Aston Martin",
            "img": "img/63f476ab5c263f.png",
            "description": "La incursión original de Aston Martin en la Fórmula (hace más de medio siglo) duró sólo cinco carreras. Pero esta vez la cosa va en serio. Este equipo de F1 no es ajeno al éxito, ya que ganó con su forma original de Jordan y más recientemente como Racing Point en 2020. Reconocido por su capacidad para superar su peso, y ahora con un dos veces campeón liderando su alineación de pilotos. , Aston Martin es un equipo a seguir.",
            "puntos_equipo": 217,
            "pos_equipos": 4
        }

***
      

## Servicio POST
- `POST /escuderias`: Este servicio permite agregar una nueva escuderia a la tabla a traves del body de postman 

- ***Ejemplo*** `POST /escuderias`  


        {
	    "id": 1,            
	    "equipos": "Prueba POST",
            "description": "Descripcion",
            "puntos_equipo": 100,
            "pos_equipos": 1
        }

***




## Servicio PUT
- `PUT /escuderias/:ID`
Por medio de este endpoint se puede hacer una modificacion a una escuderia existente en la tabla de la base de datos. Para especificar la escuderia a modificar se captura el ID que viene por parametro. Este ID debe existir en la tabla de lo contrario se arroja un status `404 Not Found`.
    La modificacion al igual que con `POST` se hace a traves del body de postman, respetando la estructura del objeto.  
   
- ***Ejemplo*** `PUT /escuderias/123`  


    Los nuevos valores de los campos de la escuderia 123 seran los siguientes:  

    ```
    {
        "id": "1",
        "equipos": Prueba PUT,
        "description": "Descripcion editada",
        "puntos_equipo": 50,
        "pos_equipos": 10
    }
    ```

***


## Servicio DELETE
- `DELETE /pilotos/:ID`
    
    Este servicio elimina la escuderia de la tabla cuyo id sea el que se pase por parametro. De no existir tal parametro ocurrira un `404 Not found`

- ***Ejemplo*** `DELETE /escuderias/123`


    De existir esa escuderia la respuesta sera:
    "Eliminado con exito la escuderia con id = 123"

***


## Autorizacion 
- `GET /auth/token`

El usuario que consume la api tiene libertad de ver todos los registros, de manera ordenada, filtrada y/o paginada. Pero para hacer modificaciones (**PUT POST**) debe estar **autorizado**, para esto, desde este endpoint `GET /auth/token` debe hacer una autorizacion en postman de tipo **basic**, ingresar su **email** y **contraseña**.  

Estos datos deben coincidir con los registros de la base de datos en la tabla *usuarios*, si estos datos son erroneos o estan incompletos se produce un error `401 Not Found Unauthorized`.  

Si la autenticacion es correcta, devuelve un *token*, el cual a traves del endopoint `PUT /escuderias/:ID` O `POST /escuderias` se utiliza en la autorizacion de tipo **Bearer Token** y si es correcto el token, se ejecuta el PUT o POST.
