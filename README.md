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
- `POST /pilotos`: 






## Servicio PUT
- `PUT /pilotos/:ID`  
   






## Servicio DELETE
- `DELETE /pilotos/:ID`
    







## Autorizacion 
- `GET /auth/token`


